<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/public_libro_variables.php");

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
		$layout->customCssPageName = "public_libro_detailspreview";
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
$page_layouts["public_libro_detailspreview"] = $layout;




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

if($mastertable == "public.editorial")
{
	$where = "";
		$formattedValue = make_db_value("ideditorial",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("ideditorial") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("ideditorial") . "=" . $formattedValue;
}
if($mastertable == "public.idioma")
{
	$where = "";
		$formattedValue = make_db_value("ididioma",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("ididioma") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("ididioma") . "=" . $formattedValue;
}
if($mastertable == "public.autor")
{
	$where = "";
		$formattedValue = make_db_value("idautor",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("idautor") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("idautor") . "=" . $formattedValue;
}
if($mastertable == "public.tema")
{
	$where = "";
		$formattedValue = make_db_value("idtema",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("idtema") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("idtema") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["idlibro"]));
	
	
	//	idlibro - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("idlibro", $data, $keylink);
			$row["idlibro_value"] = $value;
			$format = $pSet->getViewFormat("idlibro");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("idlibro")))
				$class = ' rnr-field-number';
			$row["idlibro_class"] = $class;
	//	tituulo - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("tituulo", $data, $keylink);
			$row["tituulo_value"] = $value;
			$format = $pSet->getViewFormat("tituulo");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("tituulo")))
				$class = ' rnr-field-number';
			$row["tituulo_class"] = $class;
	//	subtitulo - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("subtitulo", $data, $keylink);
			$row["subtitulo_value"] = $value;
			$format = $pSet->getViewFormat("subtitulo");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("subtitulo")))
				$class = ' rnr-field-number';
			$row["subtitulo_class"] = $class;
	//	edicion - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("edicion", $data, $keylink);
			$row["edicion_value"] = $value;
			$format = $pSet->getViewFormat("edicion");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("edicion")))
				$class = ' rnr-field-number';
			$row["edicion_class"] = $class;
	//	paginas - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("paginas", $data, $keylink);
			$row["paginas_value"] = $value;
			$format = $pSet->getViewFormat("paginas");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("paginas")))
				$class = ' rnr-field-number';
			$row["paginas_class"] = $class;
	//	cod - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("cod", $data, $keylink);
			$row["cod_value"] = $value;
			$format = $pSet->getViewFormat("cod");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("cod")))
				$class = ' rnr-field-number';
			$row["cod_class"] = $class;
	//	ideditorial - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ideditorial", $data, $keylink);
			$row["ideditorial_value"] = $value;
			$format = $pSet->getViewFormat("ideditorial");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ideditorial")))
				$class = ' rnr-field-number';
			$row["ideditorial_class"] = $class;
	//	idautor - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("idautor", $data, $keylink);
			$row["idautor_value"] = $value;
			$format = $pSet->getViewFormat("idautor");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("idautor")))
				$class = ' rnr-field-number';
			$row["idautor_class"] = $class;
	//	idtema - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("idtema", $data, $keylink);
			$row["idtema_value"] = $value;
			$format = $pSet->getViewFormat("idtema");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("idtema")))
				$class = ' rnr-field-number';
			$row["idtema_class"] = $class;
	//	ididioma - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ididioma", $data, $keylink);
			$row["ididioma_value"] = $value;
			$format = $pSet->getViewFormat("ididioma");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ididioma")))
				$class = ' rnr-field-number';
			$row["ididioma_class"] = $class;
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
$xt->load_template(GetTemplateName("public_libro", "detailspreview"));
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