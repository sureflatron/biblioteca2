<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/public_prestamo_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview_bootstrap", "ExtravaganzaOrange", "MobileOrange");
$layout->version = 3;
	$layout->bootstrapTheme = "cyborg";
		$layout->customCssPageName = "public_prestamo_detailspreview";
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"bsdetailspreviewcount",
	"block"=>"", "substyle"=>1  );

$layout->skins["dcount"] = "";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields",
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["public_prestamo_detailspreview"] = $layout;




$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

if($mastertable == "public.lector")
{
	$where = "";
		$formattedValue = make_db_value("idlector",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("idlector") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("idlector") . "=" . $formattedValue;
}
if($mastertable == "public.ejemplares")
{
	$where = "";
		$formattedValue = make_db_value("idejemplar",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("idejemplar") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("idejemplar") . "=" . $formattedValue;
}

$str = SecuritySQL("Search", $strTableName);
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where, $pageObject->connection);
$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["idprestamo"]));
	
	
	//	idprestamo - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("idprestamo", $data, $keylink);
			$row["idprestamo_value"] = $value;
			$format = $pSet->getViewFormat("idprestamo");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("idprestamo")))
				$class = ' rnr-field-number';
			$row["idprestamo_class"] = $class;
	//	fecha_prestamo - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("fecha_prestamo", $data, $keylink);
			$row["fecha_prestamo_value"] = $value;
			$format = $pSet->getViewFormat("fecha_prestamo");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("fecha_prestamo")))
				$class = ' rnr-field-number';
			$row["fecha_prestamo_class"] = $class;
	//	fecha_devolucion - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("fecha_devolucion", $data, $keylink);
			$row["fecha_devolucion_value"] = $value;
			$format = $pSet->getViewFormat("fecha_devolucion");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("fecha_devolucion")))
				$class = ' rnr-field-number';
			$row["fecha_devolucion_class"] = $class;
	//	diasprestamo - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("diasprestamo", $data, $keylink);
			$row["diasprestamo_value"] = $value;
			$format = $pSet->getViewFormat("diasprestamo");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("diasprestamo")))
				$class = ' rnr-field-number';
			$row["diasprestamo_class"] = $class;
	//	idejemplar - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("idejemplar", $data, $keylink);
			$row["idejemplar_value"] = $value;
			$format = $pSet->getViewFormat("idejemplar");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("idejemplar")))
				$class = ' rnr-field-number';
			$row["idejemplar_class"] = $class;
	//	idlector - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("idlector", $data, $keylink);
			$row["idlector_value"] = $value;
			$format = $pSet->getViewFormat("idlector");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("idlector")))
				$class = ' rnr-field-number';
			$row["idlector_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("public_prestamo", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), mobileDeviceDetected() && $layout->version != BOOTSTRAP_LAYOUT) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>