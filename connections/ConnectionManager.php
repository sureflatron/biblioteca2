<?php
class ConnectionManager
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();

	
	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */	
	protected $_tablesConnectionIds;
	
	
	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}
	
	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */	
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}
	
	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */	
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}
	
	/**
	 * Get connection object by the connection id 
	 * @param String connId
	 * @return Connection
	 */	
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) )
			$this->cache[ $connId ] = $this->getConnection( $connId );

		return $this->cache[ $connId ];
	}
	
	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com" );
	}

	/**
	 * Get the users table db connection 
	 * @return Connection
	 */	
	public function getForLogin()
	{
		return $this->byId( "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com" );
	}
	
	/**
	 * Get the log table db connection 
	 * @return Connection
	 */	
	public function getForAudit()
	{
		return $this->getDefault();
	}
	
	/**
	 * Get the locking table db connection 
	 * @return Connection
	 */		
	public function getForLocking()
	{
		return $this->getDefault();
	}	
	
	/**
	 * Get the 'ug_groups' table db connection 
	 * @return Connection
	 */	
	public function getForUserGroups()
	{
		return $this->getDefault();
	}		

	/**
	 * Get the saved searches table db connection 
	 * @return Connection
	 */	
	public function getForSavedSearches()
	{
		return $this->getDefault();
	}

	/**
	 * Get the webreports tables db connection 
	 * @return Connection
	 */		
	public function getForWebReports()
	{
		return $this->getDefault();
	}
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		include_once getabspath("connections/Connection.php");
		
		$data = $this->_connectionsData[ $connId ];	
		switch( $data["connStringType"] )
		{
			case "mysql":
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/MySQLiConnection.php");
					return new MySQLiConnection( $data );
				}
				
				include_once getabspath("connections/MySQLConnection.php");	
				return new MySQLConnection( $data );	

			case "mssql":
			case "compact":
				if( useMSSQLWinConnect() )
				{
					include_once getabspath("connections/MSSQLWinConnection.php");
					return new MSSQLWinConnection( $data );
				}
				if( isSqlsrvExtLoaded() )
				{
					include_once getabspath("connections/MSSQLSrvConnection.php");	
					return new MSSQLSrvConnection( $data );
				}
				
				if( function_exists("mssql_connect") ) {
					include_once getabspath("connections/MSSQLUnixConnection.php");
					return new MSSQLUnixConnection( $data );			
				}

				if( class_exists("PDO") ) {
					include_once getabspath("connections/PDOConnection.php");
					$drivers = pdo_drivers();
					if( in_array( "sqlsrv", $drivers) )
					{
						$data["PDOString"] = "sqlsrv:Server=" . $data["connInfo"][0] . ";Database=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
					if( in_array( "dblib", $drivers) )
					{
						$data["PDOString"] = "dblib:host=" . $data["connInfo"][0] . ";dbname=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
				}
				echo "No SQL Server driver found in your PHP settings.";
				if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
					echo "<br>To enable SQL Server support add the following line to php.ini file:";
					echo "<br>extension=php_com_dotnet.dll";
				}
				exit();

			case "msaccess":
			case "odbc":
			case "odbcdsn":
			case "custom":
			case "file":
				if( stripos($data["ODBCString"], 'Provider=') !== false )
				{
					include_once getabspath("connections/ADOConnection.php");
					return new ADOConnection( $data );
				}
				
				include_once getabspath("connections/ODBCConnection.php");
				return new ODBCConnection( $data );
			
			case "oracle":
				include_once getabspath("connections/OracleConnection.php");
				return new OracleConnection( $data );

			case "postgre":
				include_once getabspath("connections/PostgreConnection.php");
				return new PostgreConnection( $data );

			case "db2":
				include_once getabspath("connections/DB2Connection.php");
				return new DB2Connection( $data );

			case "informix":
				include_once getabspath("connections/InformixConnection.php");
				return new InformixConnection( $data );

			case "sqlite":
				include_once getabspath("connections/SQLite3Connection.php");
				return new SQLite3Connection( $data );
			case "pdo":
				include_once getabspath("connections/PDOConnection.php");
				return new PDOConnection( $data );
		}
	}
	
	/**
	 * Set the data representing the project's 
	 * db connection properties
	 */	 
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();
		
		$data = array();
		$data["dbType"] = 4;
		$data["connId"] = "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com";
		$data["connName"] = "dcpm3cl5oquqpv at ec2-54-225-68-71.compute-1.amazonaws.com";
		$data["connStringType"] = "postgre";
		$data["connectionString"] = "postgre;ec2-54-225-68-71.compute-1.amazonaws.com;mvawexwfyzsfaw;2f79adb3f4e25ee2349f803479e6f072a75643170ba5590a78c083895efa9491;;dcpm3cl5oquqpv;;1;"; //currently unused
		
		$this->_connectionsIdByName["dcpm3cl5oquqpv at ec2-54-225-68-71.compute-1.amazonaws.com"] = "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "mvawexwfyzsfaw";
		$data["ODBCPWD"] = "2f79adb3f4e25ee2349f803479e6f072a75643170ba5590a78c083895efa9491";
		$data["leftWrap"] = "\"";
		$data["rightWrap"] = "\"";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "ec2-54-225-68-71.compute-1.amazonaws.com";
		$data["connInfo"][1] = "mvawexwfyzsfaw";
		$data["connInfo"][2] = "2f79adb3f4e25ee2349f803479e6f072a75643170ba5590a78c083895efa9491";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "dcpm3cl5oquqpv";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "Driver={PostgreSQL Unicode};Server=ec2-54-225-68-71.compute-1.amazonaws.com;Database=dcpm3cl5oquqpv;Uid=mvawexwfyzsfaw;Pwd=2f79adb3f4e25ee2349f803479e6f072a75643170ba5590a78c083895efa9491;";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com"] = $data;
		$this->_connectionsData = $connectionsData;
	}
	
	/**
	 * Set the data representing the correspondence between 
	 * the project's table names and db connections
	 */	 
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["public.autor"] = "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com";
		$connectionsIds["public.editorial"] = "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com";
		$connectionsIds["public.ejemplares"] = "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com";
		$connectionsIds["public.estado"] = "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com";
		$connectionsIds["public.idioma"] = "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com";
		$connectionsIds["public.libro"] = "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com";
		$connectionsIds["public.lector"] = "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com";
		$connectionsIds["public.prestamo"] = "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com";
		$connectionsIds["public.tema"] = "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com";
		$connectionsIds["public.usuario"] = "dcpm3cl5oquqpv_at_ec2-54-225-68-71.compute-1.amazonaws.com";
		$this->_tablesConnectionIds = $connectionsIds;
	}
	
	/**
	 * Check if It's possible to add to one table's sql query 
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];
		
		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;
			
		return true;	
	}
	
	/**
	 * Close db connections
	 * @destructor
	 */
	function __desctruct() 
	{
		foreach( $this->cache as $connection )
		{
			$connection->close();
		}
	}
}
?>