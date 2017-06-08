<?php
class GenericFunctions extends DBFunctions
{	

	/**
	 * @param String str
	 * @return String
	 */		
	public function escapeLIKEpattern( $str )
	{
		return $str;
	}
	
	
	/**
	 * @param String str
	 * @return String
	 */	
	public function addSlashesBinary( $str )
	{
		return $this->addSlashes($str);
	}
	

	/**
	 * @param String strName
	 * @return String
	 */	
	public function addTableWrappers($strName)
	{
		if( $this->strLeftWrapper != "\"")
			return $this->addFieldWrappers($strName);
		
		return DBFunctions::addTableWrappers( $strName );
	}

	/**	
	 * @param String dbval
	 * @return String	 
	 */	
	public function upper( $dbval )
	{
		return $dbval;
	}

	/**
	 * @param Mixed $val
	 * @return String
	 */
	public function addDateQuotes( $val )
	{
		return "'".$this->addSlashes($val)."'";
	}

	/**
	 * It's called for Contains and Starts with searches
	 * @param Mixed value
	 * @param Number type (optional)
	 * @return String	 
	 */
	public function field2char($value, $type = 3)
	{
		return $value;
	}
	
	/**
	 * @param Mixed value
	 * @param Number type
	 * @return String	 
	 */
	public function field2time($value, $type)
	{
		return $value;
	}	
}
?>