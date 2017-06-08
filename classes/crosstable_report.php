<?php
$group_sort_y = array();
class CrossTableReport
{	
	/**
	 * the report table name
	 */
	protected $tableName;
	
	/**
	 * the current teport page type ( report, print )
	 */
	protected $pageType;
	
	/**
	 * An instance of the 'ViewControlsContainer' class 
	 * @type Object
	 */
	protected $viewControls;

	
	/**
	 * An Instance of the 'ProjectSettings' class
	 * @type Object
	 */
	protected $pSet = null;

	/**
	 * @type Connection
	 */
	protected $connection;
	

	protected $group_header = array();
	protected $col_summary = array();
	protected $rowinfo = array();
	protected $total_summary;

	protected $showXSummary;
	protected $showYSummary;
	protected $showTotalSummary;	
	protected $groupFieldsData;
	protected $fieldsTotalsData;
	
	protected $xFName;
	protected $yFName;	
		
	protected $xIntervalType;
	protected $yIntervalType;	
	
	/**
	 * The report current data field name
	 */
	protected $dataField = "";

	/**
	 * The selected data field settings packed in an array.
	 * @type Array
	 */
	protected $dataFieldSettings = null;
	
	/**
	 * The report current aggregate function
	 */
	protected $dataGroupFunction = "";
	
	
	/**
	 * @constructor
	 * @param Array params
	 * @param String strSQL
	 */
	function __construct( $params, $strSQL )
	{
		$this->pageType	= $params["pageType"];	
		$this->tableName = $params["tableName"];
		$this->setDbConnection();		
			
		$this->pSet = new ProjectSettings($this->tableName, PAGE_REPORT);
		include_once getabspath("classes/controls/ViewControlsContainer.php");
		$this->viewControls = new ViewControlsContainer( $this->pSet, PAGE_REPORT );
		
		$this->groupFieldsData = $params["groupFields"];
		$this->fieldsTotalsData = $params["totals"];
		
		$this->showXSummary = $params["xSummary"];
		$this->showYSummary = $params["ySummary"];
		$this->showTotalSummary = $params["totalSummary"];
	
		$this->xFName = $params["x"];
		$this->yFName = $params["y"];
		$this->dataField = $params["data"];
	
		$this->dataFieldSettings = $params["totals"][ $this->dataField ];	
		$this->dataGroupFunction = $this->getDataGroupFunction( $params["operation"] );
	
		$this->xIntervalType = $this->getIntervalTypeByParam( "x", $this->xFName, $params["xType"] );
		$this->yIntervalType = $this->getIntervalTypeByParam( "y", $this->yFName, $params["yType"] );

		$this->fillGridData( $strSQL, $params["headerClass"], $params["dataClass"] );
	}
	
	/**
	 * @param String tableSQL
	 * @param String headerClass
	 * @param String dataClass
	 */
	protected function fillGridData( $tableSQL, $headerClass, $dataClass )
	{
		$SQL = $this->getstrSQL( $tableSQL );
		$qResult = $this->connection->query( $SQL );
		
		$group_y = array();
		$group_x = array();
		$sort_y = array(); // sorted array of group_y indices
		
		$arrdata = array();
		$arravgsum = array();
		$arravgcount = array();
		
		$avgsumx = array();
		$avgcountx = array();
		
		// data 1 y value; //data 2 x value; //data 0 data field value // data 3 avg_sum//data 4 avg count
		while( $data = $qResult->fetchNumeric() )
		{
			if( !in_array( $data[1], $group_y ) )
			{
				$group_y[] = $data[1];
				$sort_y[] = count($sort_y);
			}
			
			if( !in_array( $data[2], $group_x ) )
			{
				$group_x[] = $data[2];
				$this->col_summary["data"][ count($group_x) - 1 ]["col_summary"] = "&nbsp;";
				$this->col_summary["data"][ count($group_x) - 1 ]["id_col_summary"] = "total_x_".( count($group_x) - 1);
			}
			
			$key_y = array_search( $data[1], $group_y );
			
			$key_x = array_search( $data[2], $group_x );
			
			$avgsumx[ $key_x ] = 0;
			$avgcountx[ $key_x ] = 0;

			$arrdata[ $key_y ][ $key_x ] = $data[0];
			$arravgsum[ $key_y ][ $key_x ] = $data[3];
			$arravgcount[ $key_y ][ $key_x ] = $data[4];
		}
		
		//	sort y groups
		global $group_sort_y;
		$group_sort_y = $group_y;
		SortForCrosstable($sort_y);
		
		$this->rowinfo = $this->getBasicRowsData( $sort_y, $group_y, $group_x, $arrdata, $dataClass );
		
		foreach( $group_x as $key_x => $value_x )
		{
			if( $value_x != "" )
				$this->group_header["data"][ $key_x ]["gr_value"] = $this->getAxisDisplayValue( $this->xFName, $this->xIntervalType, $value_x );
			else
				$this->group_header["data"][ $key_x ]["gr_value"]="&nbsp;";
				
			$this->group_header["data"][ $key_x ]["gr_x_class"] = $headerClass; 
		}
		
		$this->setSummariesData( $arravgsum, $arravgcount, $avgsumx, $avgcountx );
			
		$this->updateRecordsDisplayedFields();	
	}	
	
	/**
	 * @return Array
	 */
	protected function getBasicRowsData( $sort_y, $group_y, $group_x, $arrdata, $dataClass )
	{
		$crossRowsData = array();
		$ftype = $this->pSet->getFieldType( $this->dataField );
		
		foreach( $sort_y as $key_y )
		{
			$value_y = $group_y[ $key_y ];
			
			$crossRowsData[ $key_y ]["row_summary"] = "&nbsp;";
			$crossRowsData[ $key_y ]["group_y"] = $this->getAxisDisplayValue( $this->yFName, $this->yIntervalType, $value_y );
			$crossRowsData[ $key_y ]["id_row_summary"] = "total_y_".$key_y;
			$crossRowsData[ $key_y ]["summary_class"] = $dataClass;
			//$crossRowsData[ $key_y ]["gr_y_class"] = ""; 
			
			if( !array_key_exists( $key_y, $arrdata ) )
				continue;			
			
			foreach( $group_x as $key_x => $value_x)
			{
				$rowValue = "&nbsp;";
				
				if( array_key_exists( $key_x, $arrdata[ $key_y ] ) && !is_null( $arrdata[ $key_y ][ $key_x ] ) )
				{
					$rowValue = $arrdata[ $key_y ][ $key_x ];
					if( $this->dataGroupFunction == "avg" && !IsTimeType( $ftype ) )
						$rowValue = round($rowValue, 2);
				}
				
				$crossRowsData[ $key_y ]["row_record"]["data"][ $key_x ]["row_value"] = $rowValue;	
				$crossRowsData[ $key_y ]["row_record"]["data"][ $key_x ]["row_value_class"] = $dataClass;
				$crossRowsData[ $key_y ]["row_record"]["data"][ $key_x ]["id_data"] = $key_y."_".$key_x;	
			}	
		}
		
		return $crossRowsData;
	}
	
	/**
	 * ???
	 */
	protected function setSummariesData( $arravgsum, $arravgcount, $avgsumx, $avgcountx )
	{
		$this->total_summary = "&nbsp;";
		
		$xSummaty = array();
		$ySummary = array();
		$totaxSummary = array();
		
		foreach( $this->rowinfo as $key_y => $yData )
		{
			foreach( $yData["row_record"]["data"] as $key_x => $value )
			{
				if( $value["row_value"] == "&nbsp;" )
					continue;
					
				switch( $this->dataGroupFunction )
				{
					case "sum":
						$this->rowinfo[ $key_y ]["row_summary"] += $value["row_value"];
						$this->col_summary["data"][ $key_x ]["col_summary"] += $value["row_value"];
						$this->total_summary += $value["row_value"];
					break;
					
					case "min":
						if( $this->rowinfo[ $key_y ]["row_summary"] === "&nbsp;" || $value["row_value"] < $this->rowinfo[ $key_y ]["row_summary"] )
							$this->rowinfo[ $key_y ]["row_summary"] = $value["row_value"];
							
						if( $this->col_summary["data"][ $key_x ]["col_summary"] === "&nbsp;" || $this->col_summary["data"][ $key_x ]["col_summary"] > $value["row_value"] )
							$this->col_summary["data"][ $key_x ]["col_summary"] = $value["row_value"];
							
						if( $this->total_summary === "&nbsp;" || $this->total_summary > $value["row_value"] )
							$this->total_summary = $value["row_value"];	
					break;
					
					case "max":
						if( $this->rowinfo[ $key_y ]["row_summary"] === "&nbsp;" || $value["row_value"] > $this->rowinfo[ $key_y ]["row_summary"] )
							$this->rowinfo[ $key_y ]["row_summary"] = $value["row_value"];
						
						if( $this->col_summary["data"][ $key_x ]["col_summary"] === "&nbsp;" || $this->col_summary["data"][ $key_x ]["col_summary"] < $value["row_value"] )								
							$this->col_summary["data"][ $key_x ]["col_summary"] = $value["row_value"];
						
						if( $this->total_summary === "&nbsp;" || $this->total_summary < $value["row_value"] )
							$this->total_summary = $value["row_value"];
					break;
					
					case "avg":
						$this->rowinfo[ $key_y ]["avgsumy"] += $arravgsum[ $key_y ][ $key_x ];
						$this->rowinfo[ $key_y ]["avgcounty"] += $arravgcount[ $key_y ][ $key_x ];
						$this->rowinfo[ $key_y] ["row_record"]["data"][ $key_x ]["avgsumx"] += $arravgsum[ $key_y ][ $key_x ];
						$this->rowinfo[ $key_y ]["row_record"]["data"][ $key_x ]["avgcountx"] += $arravgcount[ $key_y ][ $key_x ];
					break;
				}
				
				if( $this->showXSummary && !is_null( $this->col_summary["data"][ $key_x ]["col_summary"] ) )
				{
					if( is_numeric( $this->col_summary["data"][ $key_x ]["col_summary"] ) )
						$this->col_summary["data"][ $key_x ]["col_summary"] = round( $this->col_summary["data"][ $key_x ]["col_summary"], 2);
				}
				else
					$this->col_summary["data"][ $key_x ]["col_summary"] = "&nbsp;";
			}
			
			if( $this->showYSummary && !is_null( $this->rowinfo[ $key_y ]["row_summary"] ) )
			{
				if( is_numeric( $this->rowinfo[ $key_y ]["row_summary"] ) )
					$this->rowinfo[ $key_y ]["row_summary"] = round( $this->rowinfo[ $key_y ]["row_summary"], 2 );
			}
			else
				$this->rowinfo[ $key_y ]["row_summary"] = "&nbsp;";
		}
		
		
		if( $this->dataGroupFunction == "avg" )
		{
			$total_sum = 0;
			$total_count = 0;
			
			foreach( $this->rowinfo as $key_y => $valuey )
			{
				if( $valuey["avgcounty"] )
				{
					$this->rowinfo[ $key_y ]["row_summary"] = round( $valuey["avgsumy"] / $valuey["avgcounty"], 2 );
					$total_sum += $valuey["avgsumy"];
					$total_count += $valuey["avgcounty"];
				}
				
				foreach( $valuey["row_record"]["data"] as $key_x => $valuex )
				{
					if( $valuex["avgcountx"] )
					{
						$avgsumx[ $key_x ] += $valuex["avgsumx"];
						$avgcountx[ $key_x ] += $valuex["avgcountx"];
						$total_sum += $valuex["avgsumx"];
						$total_count += $valuex["avgcountx"];
					}
				}
			}
			
			foreach( $avgsumx as $key => $value )
			{
				if( $avgcountx[ $key ] )
					$this->col_summary["data"][ $key ]["col_summary"] = round( $value / $avgcountx[$key], 2 );
			}
			
			if( $total_count )
				$this->total_summary = $total_sum / $total_count;
		}
		
		if( !$this->showTotalSummary )
			$this->total_summary = "&nbsp;";
		elseif( is_numeric($this->total_summary) )
			$this->total_summary = round( $this->total_summary, 2 );			
	}
	
	/**
	 * Get view value basing on 'view as'
	 */
	function getViewValue( $value, $useTimeFormat = true )
	{
		$strViewFormat = $this->pSet->getViewFormat( $this->dataField );
		if( $strViewFormat == FORMAT_TIME && is_numeric($value) )
		{
			$d = intval($value / 86400);
			$h = intval(($value % 86400) / 3600);
			$m = intval((($value % 86400) % 3600) / 60);
			$s = (($value % 86400) % 3600) % 60;

			$value = $d > 0 ? $d . 'd ' : '';
			if ( $useTimeFormat )
			{
				$value .= str_format_time(array(0, 0, 0, $h, $m, $s));
			}
			else
			{
				$value .= date("H:i:s", strtotime($h.":".$m.":".$s));
			}
		}
		else
		{
			$control = $this->viewControls->getControl( $this->dataField );
			$controlData = array( $this->dataField => $value );
			$value = $control->showDBValue( $controlData, "" );
		}

		return $value;
	}	

	/**
	 * Update the records and summaries data basing on 'view as' and 'total' settings 
	 */
	protected function updateRecordsDisplayedFields()
	{		
		if( !count($this->rowinfo) )
			return;
		
		foreach($this->rowinfo as $key_y => $data)
		{
			foreach($data["row_record"]["data"] as $key_x => $fieldData)
			{
				if( $fieldData["row_value"] == "&nbsp;" )
					continue;

				$this->rowinfo[ $key_y ]["row_record"]["data"][ $key_x ]["row_value"] = $this->getViewValue( $fieldData["row_value"] );
			}

			if( $data["row_summary"] != "&nbsp;" ) 
			{
				$this->rowinfo[ $key_y ]["row_summary"] = $this->getViewValue( $data["row_summary"], false);
			}
		}

		if( $this->total_summary != "&nbsp;" )
		{
			$this->total_summary = $this->getViewValue($this->total_summary, false);
		}

		foreach($this->col_summary["data"] as $key => $summaryData)
		{
			if( $summaryData["col_summary"] == "&nbsp;" )
				continue;

			$this->col_summary["data"][ $key ]["col_summary"] = $this->getViewValue( $summaryData["col_summary"], false );
		}		
	}
	
	public function getCrossTableData()
	{
		return $this->rowinfo;
	}
	
	/**
	 * @return Boolean
	 */
	public function isEmpty()
	{
		return !count( $this->rowinfo );
	}
	
	public function getCrossTableHeader()
	{
		return $this->group_header;
	}
	
	public function getCrossTableSummary()
	{
		return $this->col_summary;
	}
	
	public function getTotalSummary()
	{
		return $this->total_summary;
	}
		
	/**
	 * Assign 'connection' property 
	 */
	protected function setDbConnection()
	{
		global $cman;
		$this->connection = $cman->byTable( $this->tableName ); //#9875
	}	

	/**
	 * @param String axis
	 * @param String crossName
	 * @param String userIntType
	 * @return Number
	 */
	protected function getIntervalTypeByParam( $axis, $crossName, $userIntType )
	{
		$iType = $this->getRefineIntervalType( $userIntType, $crossName );
	
		$int_type = -1;
		$intTypes = array();
		foreach( $this->groupFieldsData as $fData )
		{
			if( $fData["name"] == $crossName && ( $fData["group_type"] == "all" || $fData["group_type"] == $axis ) )
			{
				if( !strlen( $userIntType ) || $iType == $fData["int_type"] )
				{
					$int_type = $fData["int_type"];
					break;
				}
				
				$intTypes[] = $fData["int_type"];
			}			
		}

		if( $int_type != -1 )
			return $int_type;
			
		if( count( $intTypes ) > 0 )
			return $intTypes[0];
		
		// something went wrong
		return -1;
	}
	
	
	/**
	 * Get a report's SQL query string
	 * @param String tableSQL		The report table's SQL query
	 * @return String	
	 */
	protected function getstrSQL( $tableSQL )
	{		
		$group_x = $this->_getIntervalTypeData( $this->xFName, $this->xIntervalType );
		$group_y = $this->_getIntervalTypeData( $this->yFName, $this->yIntervalType );	
	
		$ftype = $this->pSet->getFieldType( $this->dataField );
		$isTime = $this->pSet->getViewFormat( $this->dataField ) == FORMAT_TIME || IsTimeType($ftype);
		
		if ( $isTime )
			$select_field = $this->dataGroupFunction."(".$this->connection->timeToSecWrapper( $this->dataField )."), ";
		else
			$select_field = $this->dataGroupFunction."(".$this->connection->addFieldWrappers( $this->dataField )."), ";

		if( $this->dataGroupFunction == "avg" && !IsDateFieldType($ftype) )
		{
			$sum_for_avg = !$isTime ? "sum(".$this->connection->addFieldWrappers( $this->dataField ).")" : "sum(".$this->connection->timeToSecWrapper( $this->dataField ).")";
			$avg_func = ", " . $sum_for_avg . " as ".$this->connection->addFieldWrappers("avg_sum")
				.", count(".$this->connection->addFieldWrappers( $this->dataField ).") as ".$this->connection->addFieldWrappers("avg_count");
		}
		else
			$avg_func = ", 1 as ".$this->connection->addFieldWrappers("avg_sum").", 1 as ".$this->connection->addFieldWrappers("avg_count");	
		
		
		$whereClause = "";

		if( $this->pageType == PAGE_REPORT ) 
		{
			if( tableEventExists("BeforeQueryReport", $this->tableName) ) 
			{
				$eventObj = getEventObject($this->tableName);
				$eventObj->BeforeQueryReport($whereClause);
				if( $whereClause )
					$whereClause = " where ".$whereClause;
			}
		}
		else {
			if( tableEventExists("BeforeQueryReportPrint", $this->tableName) ) 
			{
				$eventObj = getEventObject($this->tableName);
				$eventObj->BeforeQueryReportPrint($whereClause);
				if( $whereClause )
					$whereClause = " where ".$whereClause;
			}
			
		}
		
		$gx0 = $group_x[0];
		$gx1 = $group_x[1];
		$gy0 = $group_y[0];
		$gy1 = $group_y[1];
		 
		$selectClause = "select ".$select_field.$gy0.", ".$gx0. $avg_func;
		$groupByClause = "group by ".$gx1.", ".$gy1;
		$orderByClause = "order by ".$gx1.",".$gy1;
		
		if( $this->connection->dbType == nDATABASE_Oracle )
			return $selectClause." from (".$tableSQL.")".$whereClause." ".$groupByClause." ".$orderByClause;
		
		if( $this->connection->dbType == nDATABASE_MSSQLServer )
		{
			$pos = strrpos(strtoupper($tableSQL), "ORDER BY");
			if( $pos )
				$tableSQL = substr($tableSQL, 0, $pos);
		}
		return $selectClause." from (".$tableSQL.") as cross_table".$whereClause." ".$groupByClause." ".$orderByClause;
	}
	
	/**
	 * FIx the name
	 * @param Number index
	 * @return Array
	 */
	protected function _getIntervalTypeData( $fName, $int_type )
	{
		// no $int_type case ??
		//if( $int_type == -1 )
		//	return array("", "");

		if( $int_type == 0 ) 
		{
			$wrappedGoodFieldName = $this->connection->addFieldWrappers( $fName );
			return array( $wrappedGoodFieldName, $wrappedGoodFieldName );
		}

		$ftype = $this->pSet->getFieldType( $fName );
		
		if( IsNumberType($ftype) )
			return $this->getNumberTypeInterval($fName, $int_type);
		
		if( IsCharType( $ftype ) )
			return $this->getCharTypeInterval($fName, $int_type);
		
		if( IsDateFieldType( $ftype ) )
			return $this->getDateTypeInterval($fName, $int_type);
	}
	
	/**
	 * @param String fName
	 * @param Number int_type
	 * @return array
	 */
	protected function getDateTypeInterval( $fName, $int_type )
	{
		$field = $this->connection->addFieldWrappers( $fName );
		
		switch( $this->connection->dbType )
		{
			case nDATABASE_MySQL:
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("year(".$field.")*10000+0101","YEAR(".$field.")");
				if($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("year(".$field.")*10000+QUARTER(".$field.")*100+1","year(".$field."),QUARTER(".$field.")");
				if($int_type == 3) // DATE_INTERVAL_MONTH
					return array("year(".$field.")*10000+month(".$field.")*100+1","year(".$field."),month(".$field.")");
				if($int_type == 4) // DATE_INTERVAL_WEEK
					return array("year(".$field.")*10000+week(".$field.")*100+01","year(".$field."),WEEK(".$field.")");
				if($int_type == 5) // DATE_INTERVAL_DAY
					return array("year(".$field.")*10000+month(".$field.")*100+day(".$field.")","year(".$field."),month(".$field."),day(".$field.")");
				if($int_type == 6) // DATE_INTERVAL_HOUR
					return array("year(".$field.")*1000000+month(".$field.")*10000+day(".$field.")*100+HOUR(".$field.")","year(".$field."),month(".$field."),day(".$field."),hour(".$field.")");
				if($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("year(".$field.")*1000000+month(".$field.")*1000000+day(".$field.")*10000+HOUR(".$field.")*100+minute(".$field.")","year(".$field."),month(".$field."),day(".$field."),hour(".$field."),minute(".$field.")");
			break;

			case nDATABASE_Oracle:
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("TO_CHAR(".$field.", 'YYYY')*10000+0101","TO_CHAR(".$field.", 'YYYY')");
				if($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("TO_CHAR(".$field.", 'YYYY')*10000+TO_CHAR(".$field.",'Q')*100+1","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'Q')");
				if($int_type == 3) // DATE_INTERVAL_MONTH
					return array("TO_CHAR(".$field.", 'YYYY')*10000+TO_CHAR(".$field.".'MM')*100+1","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.".'MM')");
				if($int_type == 4) // DATE_INTERVAL_WEEK
					return array("TO_CHAR(".$field.", 'YYYY')*10000+TO_CHAR(".$field.",'W')*100+01","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'W')");
				if($int_type == 5) // DATE_INTERVAL_DAY
					return array("TO_CHAR(".$field.", 'YYYY')*10000+TO_CHAR(".$field.",'MM')*100+TO_CHAR(".$field.",'DD')","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'MM'),TO_CHAR(".$field.",'DD')");
				if($int_type == 6) // DATE_INTERVAL_HOUR
					return array("TO_CHAR(".$field.", 'YYYY')*1000000+TO_CHAR(".$field.",'MM')*10000+TO_CHAR(".$field.",'DD')*100+TO_CHAR(".$field.",'HH')","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'MM'),TO_CHAR(".$field.",'DD'),TO_CHAR(".$field.",'HH')");
				if($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("TO_CHAR(".$field.", 'YYYY')*1000000+TO_CHAR(".$field.",'MM')*1000000+TO_CHAR(".$field.",'DD')*10000+TO_CHAR(".$field.",'HH')*100+TO_CHAR(".$field.",'MI')","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'MM'),TO_CHAR(".$field.",'DD'),TO_CHAR(".$field.",'HH'),TO_CHAR(".$field.",'MI')");
			break;

			case nDATABASE_MSSQLServer:
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("datepart(yyyy,".$field.")*10000+0101","datepart(yyyy,".$field.")");
				if($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("datepart(yyyy,".$field.")*10000+datepart(qq,".$field.")*100+1","datepart(yyyy,".$field."),datepart(qq,".$field.")");
				if($int_type == 3) // DATE_INTERVAL_MONTH
					return array("datepart(yyyy,".$field.")*10000+datepart(mm,".$field.")*100+1","datepart(yyyy,".$field."),datepart(mm,".$field.")");
				if($int_type == 4) // DATE_INTERVAL_WEEK
					return array("datepart(yyyy,".$field.")*10000+(datepart(ww,".$field.")-1)*100+01","datepart(yyyy,".$field."),datepart(ww,".$field.")");
				if($int_type == 5) // DATE_INTERVAL_DAY
					return array("datepart(yyyy,".$field.")*10000+datepart(mm,".$field.")*100+datepart(dd,".$field.")","datepart(yyyy,".$field."),datepart(mm,".$field."),datepart(dd,".$field.")");
				if($int_type == 6) // DATE_INTERVAL_HOUR
					return array("datepart(yyyy,".$field.")*1000000+datepart(mm,".$field.")*10000+datepart(dd,".$field.")*100+datepart(hh,".$field.")","datepart(yyyy,".$field."),datepart(mm,".$field."),datepart(dd,".$field."),datepart(hh,".$field.")");
				if($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("datepart(yyyy,".$field.")*1000000+datepart(mm,".$field.")*1000000+datepart(dd,".$field.")*10000+datepart(hh,".$field.")*100+datepart(mi,".$field.")","datepart(yyyy,".$field."),datepart(mm,".$field."),datepart(dd,".$field."),datepart(hh,".$field."),datepart(mi,".$field.")");
			break;

			case nDATABASE_Access:
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("datepart('yyyy',".$field.")*10000+0101","datepart('yyyy',".$field.")");
				if($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("datepart('yyyy',".$field.")*10000+datepart('q',".$field.")*100+1","datepart('yyyy',".$field."),datepart('q',".$field.")");
				if($int_type == 3) // DATE_INTERVAL_MONTH
					return array("datepart('yyyy',".$field.")*10000+datepart('m',".$field.")*100+1","datepart('yyyy',".$field."),datepart('m',".$field.")");
				if($int_type == 4) // DATE_INTERVAL_WEEK
					return array("datepart('yyyy',".$field.")*10000+(datepart('ww',".$field.")-1)*100+01","datepart('yyyy',".$field."),datepart('ww',".$field.")");
				if($int_type == 5) // DATE_INTERVAL_DAY
					return array("datepart('yyyy',".$field.")*10000+datepart('m',".$field.")*100+datepart('d',".$field.")","datepart('yyyy',".$field."),datepart('m',".$field."),datepart('d',".$field.")");
				if($int_type == 6) // DATE_INTERVAL_HOUR
					return array("datepart('yyyy',".$field.")*1000000+datepart('m',".$field.")*10000+datepart('d',".$field.")*100+datepart('h',".$field.")","datepart('yyyy',".$field."),datepart('m',".$field."),datepart('d',".$field."),datepart('h',".$field.")");
				if($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("datepart('yyyy',".$field.")*1000000+datepart('m',".$field.")*1000000+datepart('d',".$field.")*10000+datepart('h',".$field.")*100+datepart('n',".$field.")","datepart('yyyy',".$field."),datepart('m',".$field."),datepart('d',".$field."),datepart('h',".$field."),datepart('n',".$field.")");
			break;

			case nDATABASE_postgresQL: 
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("date_part('year',".$field.")*10000+0101","date_part('year',".$field.")");
				if($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("date_part('year',".$field.")*10000+date_part('quarter',".$field.")*100+1","date_part('year',".$field."),date_part('quarter',".$field.")");
				if($int_type == 3) // DATE_INTERVAL_MONTH
					return array("date_part('year',".$field.")*10000+date_part('month',".$field.")*100+1","date_part('year',".$field."),date_part('month',".$field.")");
				if($int_type == 4) // DATE_INTERVAL_WEEK
					return array("date_part('year',".$field.")*10000+(date_part('week',".$field.")-1)*100+01","date_part('year',".$field."),date_part('week',".$field.")");
				if($int_type == 5) // DATE_INTERVAL_DAY
					return array("date_part('year',".$field.")*10000+date_part('month',".$field.")*100+date_part('days',".$field.")","date_part('year',".$field."),date_part('month',".$field."),date_part('days',".$field.")");
				if($int_type == 6) // DATE_INTERVAL_HOUR
					return array("date_part('year',".$field.")*1000000+date_part('month',".$field.")*10000+date_part('days',".$field.")*100+date_part('hour',".$field.")","date_part('year',".$field."),date_part('month',".$field."),date_part('days',".$field."),date_part('hour',".$field.")");
				if($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("date_part('year',".$field.")*1000000+date_part('month',".$field.")*1000000+date_part('days',".$field.")*10000+date_part('hour',".$field.")*100+date_part('minute',".$field.")","date_part('year',".$field."),date_part('month',".$field."),date_part('days',".$field."),date_part('hour',".$field."),date_part('minute',".$field.")");
			break;

			case nDATABASE_Informix:
				return "substring(".$field." from 1 for ".$int_type.")";

			case nDATABASE_SQLite3:
				return array($field, $field);
				
			case nDATABASE_DB2: 
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("year(".$field.")*10000+0101","YEAR(".$field.")");
				if($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("year(".$field.")*10000+QUARTER(".$field.")*100+1","year(".$field."),QUARTER(".$field.")");
				if($int_type == 3) // DATE_INTERVAL_MONTH
					return array("year(".$field.")*10000+month(".$field.")*100+1","year(".$field."),month(".$field.")");
				if($int_type == 4) // DATE_INTERVAL_WEEK
					return array("year(".$field.")*10000+week(".$field.")*100+01","year(".$field."),WEEK(".$field.")");
				if($int_type == 5) // DATE_INTERVAL_DAY
					return array("year(".$field.")*10000+month(".$field.")*100+day(".$field.")","year(".$field."),month(".$field."),day(".$field.")");
				if($int_type == 6) // DATE_INTERVAL_HOUR
					return array("year(".$field.")*1000000+month(".$field.")*10000+day(".$field.")*100+HOUR(".$field.")","year(".$field."),month(".$field."),day(".$field."),hour(".$field.")");
				if($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("year(".$field.")*1000000+month(".$field.")*1000000+day(".$field.")*10000+HOUR(".$field.")*100+minute(".$field.")","year(".$field."),month(".$field."),day(".$field."),hour(".$field."),minute(".$field.")");
			break;
		}
		
		return array("", "");
	}
	
	/**
	 * @param String fName
	 * @param Number int_type
	 * @return array
	 */
	protected function getNumberTypeInterval( $fName, $int_type )
	{
		$field = $this->connection->addFieldWrappers( $fName );
		return array( "floor(".$field."/".$int_type.")*".$int_type, "floor(".$field."/".$int_type.")*".$int_type );
	}
	
	/**
	 * @param String field
	 * @param Number int_type
	 * @return Array
	 */
	protected function getCharTypeInterval($field, $int_type)
	{
		$field = $this->connection->addFieldWrappers( $field );
		switch( $this->connection->dbType )
		{
			case nDATABASE_MySQL:
			case nDATABASE_MSSQLServer:
			case nDATABASE_Access:
				return array("left(".$field.",".$int_type.")","left(".$field.",".$int_type.")");

			case nDATABASE_postgresQL:
			case nDATABASE_Informix:
				return array("substring(".$field." from 1 for ".$int_type.")","substring(".$field." from 1 for ".$int_type.")");

			case nDATABASE_Oracle:
			case nDATABASE_SQLite3:
			case nDATABASE_DB2:
				return array("substr(".$field.",1,".$int_type.")","substr(".$field.",1,".$int_type.")");
		}
	}
	
	/**
	 * @return Array
	 */
	public function getSelectedValue()
	{
		$arr = array();
		$firstarr = array();
		foreach( $this->fieldsTotalsData as $key => $value )
		{
			if(count($firstarr) == 0)
				$firstarr[] = $value["name"];
				
			if($value["min"] == true || $value["max"] == true || $value["sum"] == true || $value["avg"] == true)
			{
				$arr[] = $value["name"];
			}
		}
		if(count($arr) == 0)
			$arr = $firstarr;
		return $arr;
	}
	
	/**
	 * @return Array
	 */
	public function getCurrentOperationList()
	{
		$names = array();
		$names["sum"] = "Sum";
		$names["min"] = "Min";
		$names["max"] = "Max";
		$names["avg"] = "Media";
		
		$opData = array();
		
		foreach( $names as $o => $n )
		{
			if( !$this->dataFieldSettings[$o] )
				continue;
			
			$opData[] = array( "value" => $o, "selected" => ( $this->dataGroupFunction == $o ? "selected" : "" ), "label" => $n );
		}
		
		return $opData;
	}
	
	/**
	 * @param String $axis
	 * @return Array
	 */
	public function getCrossFieldsData( $axis )
	{
		$dataList = array();

		foreach( $this->groupFieldsData as $data )
		{
			if( ( $axis != "x" || $data["group_type"] != "x" ) && ( $axis != "y" || $data["group_type"] != "y" ) && $data["group_type"] != "all" )
				continue;
				

			$selected = "";
			if( $axis == "x" && $data["name"] == $this->xFName && $data["int_type"] == $this->xIntervalType 
			 || $axis == "y" && $data["name"] == $this->yFName && $data["int_type"] == $this->yIntervalType )
				$selected =  "selected";
			
			$intervalType =	$data["uniqueName"]	? "" : $this->getIntervalParam( $data["int_type"], $data["name"] );	
			
			$dataList[] = array("value" => $data["name"], "selected" => $selected, "label" => $data["label"], "intervalType" => $intervalType );	
		}
		
		return $dataList;
	}
	
	/**
	 *
	 */
	protected function getRefineIntervalType( $intType, $fName )
	{
		if( $intType === 0 )
			return "normal";
	
		$ftype = $this->pSet->getFieldType( $fName );
		
		if( IsNumberType( $ftype ) )
			return substr( $intType, 1 );
			
		if( IsCharType( $ftype ) )
			return substr( $intType, strlen("first") );			
		
		if( IsDateFieldType( $ftype ) )
		{
			switch( $intType )
			{
				case "year":
					return 1;
				case "quarter":
					return 2;
				case "month":
					return 3;
				case "week":
					return 4;
				case "day":
					return 5;
				case "hour":
					return 6;
				case "minute":
					return 7;		
			}		
		}
		
		return -1;
	}
	
	/**
	 * @param Number intType
	 * @return String
	 */
	protected function getIntervalParam( $intType, $fName ) 
	{
		if( $intType == 0 )
			return "normal";
		
		$ftype = $this->pSet->getFieldType( $fName );
		
		if( IsNumberType( $ftype ) )
			return "n".$intType;
		
		if( IsCharType( $ftype ) )
			return "first".$intType;
		
		if( IsDateFieldType( $ftype ) )
		{
			switch( $intType )
			{
				case 1:
					return "year";
				case 2:
					return "quarter";
				case 3:
					return "month";
				case 4:
					return "week";
				case 5:
					return "day";
				case 6:
					return "hour";
				case 7:
					return "minute";
				default: 
					return "";			
			}	
		}

		return "";
	}
	
	/**
	 * Get axes displyed values
	 * @param String fName
	 * @param Number intervalType
	 * @param String value
	 * @return String
	 */
	protected function getAxisDisplayValue( $fName, $intervalType, $value)
	{
		global $locale_info;
		
		if( $value == "" || is_null( $value ) )
			return "";

		$control = $this->viewControls->getControl( $fName );
	
		if( $intervalType == 0 ) 
		{	
			// The 'Normal' interval is set
			$data = array( $fName => $value );
			return $control->showDBValue( $data, "" );		
		}
		
		$ftype = $this->pSet->getFieldType( $fName );		
		
		if( IsNumberType( $ftype ) ) 
		{
			$start = $value - ($value % $intervalType);
			$end = $start + $intervalType;

			$dataStart = array( $fName => $start );
			$dataEnd = array( $fName => $end );
			return $control->showDBValue( $dataStart, "" )." - ".$control->showDBValue( $dataEnd, "");
		} 
		
		if( IsCharType( $ftype ) ) 
			return xmlencode( substr( $value, 0, $intervalType ) );
		
		if( IsDateFieldType( $ftype ) ) 
		{
			$dvalue = substr($value, 0, 4).'-'.substr($value, 4, 2).'-'.substr($value, 6, 2);
			
			if( strlen( $value ) == 10 )
				$dvalue.= " ".substr($value, 8, 2)."00:00";
			elseif( strlen( $value ) == 12 )
				$dvalue.= " ".substr($value, 8, 2).":".substr($value, 10, 2).":00";
			
			$tm = db2time( $dvalue );
			if( !count( $tm ) )
				return "";
		
			switch( $intervalType )
			{
				case 1: // DATE_INTERVAL_YEAR
					return $tm[0];
				case 2: // DATE_INTERVAL_QUARTER
					return $tm[0]."/Q".$tm[1];
				case 3: // DATE_INTERVAL_MONTH
					return @$locale_info[ "LOCALE_SABBREVMONTHNAME".$tm[1] ]." ".$tm[0];
				case 4: // DATE_INTERVAL_WEEK
					$dates = $this->getDatesByWeek( $tm[1] + 1, $tm[0] );
					return format_shortdate( db2time( $dates[0] ) ) . ' - ' . format_shortdate( db2time( $dates[1] ) );				
				case 5: // DATE_INTERVAL_DAY
					return format_shortdate( $tm );
				case 6: // DATE_INTERVAL_HOUR
					$tm[4] = 0;
					$tm[5] = 0;
					return str_format_datetime( $tm );
				case 7: // DATE_INTERVAL_MINUTE
					$tm[5] = 0;
					return str_format_datetime( $tm );
				default:
					return str_format_datetime( $tm );
			}
		}
		
		return "";
	}
	
	/**
	 *
	 */
	protected function getDatesByWeek( $week, $year ) 
	{
		global $locale_info;
		$startweekday = 0;
		if($locale_info["LOCALE_IFIRSTDAYOFWEEK"]>0)
			$startweekday = 7 - $locale_info["LOCALE_IFIRSTDAYOFWEEK"];	

		$L = isleapyear($year) ? 1 : 0;
		$months = array(31, 28 + $L, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
		$total_days = ($week - 1) * 7; 
		$i = 0;
		$sum = 0;
		while($sum <= $total_days)
		{
			$sum += $months[$i++];
		}
		$sum -= $months[$i-1];
		$month = $i;
		$day = $total_days - $sum;
		$day_of_week = getdayofweek(array($year, $month, $day));
		if ($day_of_week == 0) 
			$day_of_week = 7;
		
		$day = $day - ($day_of_week - 1) - $startweekday;
		$dates = array();
		$dates[0] = getYMDdate(mktime(0,0,0, $month, $day, $year));
		$dates[1] = getYMDdate(mktime(1,1,1, $month, $day+6, $year));
		
		return $dates;
	}
	
	/**
	 * @return Array
	 */
	public function getDataFieldsList()
	{
		$listData = array();
	
		foreach( $this->fieldsTotalsData as $key => $value )
		{		
			if($value["min"] == true || $value["max"] == true || $value["sum"] == true || $value["avg"] == true)
			{
				$selected = $value["name"] == $this->dataField ? "selected" : "";
				$listData[] = array( "value" => $value["name"], "selected" => $selected, "label" => $value["label"] );
			}
		}
		
		return $listData;
	}
	
	/**
	 * Get the report print header html-markup
	 * @return String
	 */
	public function getPrintCrossHeader()
	{				
		return "Grupo en el eje X"
			.":<b>".$this->fieldsTotalsData[ $this->xFName ]["label"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Grupo en el eje Y"
			.":<b>".$this->fieldsTotalsData[ $this->yFName ]["label"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Campo"
			.":<b>".$this->fieldsTotalsData[ $this->dataField ]["label"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Función para agrupar"
			.":<b>".$this->dataGroupFunction."</b>";
	}
	
	/**
	 * @param String operation
	 * @return String
	 */
	public function getTotalsName()
	{
		switch( $this->dataGroupFunction )
		{
			case "sum":
				return "Sum";
			break;
			case "min":
				return "Min";
			break;
			case "max":
				return "Max";
			break;
			case "avg":
				return "Promedio";
			break;
			default:
				return "";
		}
	}
	
	/**
	 * Checks whether passed function name is valid
	 * @param String operation
	 * @return String
	 */
	protected function getDataGroupFunction( $operation )
	{
		//	good
		if( $this->dataFieldSettings[ $operation ] == true )
			return $operation;

		//	bad, set first possible
		$gfuncs = array("sum", "max", "min", "avg");
		foreach($gfuncs as $gf)
		{
			if( $this->dataFieldSettings[ $gf ] == true )
				return $gf;
		}
		
		// default
		return "sum";
	}
	
	/**
	 * Get the current group function name
	 * @return String
	 */
	public function getCurrentGroupFunction()
	{
		return $this->dataGroupFunction;
	}
	
	/**
	 *
	 */
	public static function getCrossIntervalName( $ftype, $int_type )
	{
		if( IsDateFieldType( $ftype ) )
		{
			if($int_type == 1) // DATE_INTERVAL_YEAR
				return "year";
			if($int_type == 2) // DATE_INTERVAL_QUARTER
				return "quarter";
			if($int_type == 3) // DATE_INTERVAL_MONTH
				return "month";
			if($int_type == 4) // DATE_INTERVAL_WEEK
				return "week";
			if($int_type == 5) // DATE_INTERVAL_DAY
				return "day";
			if($int_type == 6) // DATE_INTERVAL_HOUR
				return "hour";
			if($int_type == 7) // DATE_INTERVAL_MINUTE
				return "minute";
		}
		return $int_type;
	}

}
?>