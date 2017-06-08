<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_tema = array();
	$tdatapublic_tema[".truncateText"] = true;
	$tdatapublic_tema[".NumberOfChars"] = 80;
	$tdatapublic_tema[".ShortName"] = "public_tema";
	$tdatapublic_tema[".OwnerID"] = "";
	$tdatapublic_tema[".OriginalTable"] = "public.tema";

//	field labels
$fieldLabelspublic_tema = array();
$fieldToolTipspublic_tema = array();
$pageTitlespublic_tema = array();
$placeHolderspublic_tema = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_tema["Spanish"] = array();
	$fieldToolTipspublic_tema["Spanish"] = array();
	$placeHolderspublic_tema["Spanish"] = array();
	$pageTitlespublic_tema["Spanish"] = array();
	$fieldLabelspublic_tema["Spanish"]["idtema"] = "Idtema";
	$fieldToolTipspublic_tema["Spanish"]["idtema"] = "";
	$placeHolderspublic_tema["Spanish"]["idtema"] = "";
	$fieldLabelspublic_tema["Spanish"]["tema"] = "Tema";
	$fieldToolTipspublic_tema["Spanish"]["tema"] = "";
	$placeHolderspublic_tema["Spanish"]["tema"] = "";
	if (count($fieldToolTipspublic_tema["Spanish"]))
		$tdatapublic_tema[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_tema[""] = array();
	$fieldToolTipspublic_tema[""] = array();
	$placeHolderspublic_tema[""] = array();
	$pageTitlespublic_tema[""] = array();
	if (count($fieldToolTipspublic_tema[""]))
		$tdatapublic_tema[".isUseToolTips"] = true;
}


	$tdatapublic_tema[".NCSearch"] = true;



$tdatapublic_tema[".shortTableName"] = "public_tema";
$tdatapublic_tema[".nSecOptions"] = 0;
$tdatapublic_tema[".recsPerRowPrint"] = 1;
$tdatapublic_tema[".mainTableOwnerID"] = "";
$tdatapublic_tema[".moveNext"] = 1;
$tdatapublic_tema[".entityType"] = 0;

$tdatapublic_tema[".strOriginalTableName"] = "public.tema";

	



$tdatapublic_tema[".showAddInPopup"] = false;

$tdatapublic_tema[".showEditInPopup"] = false;

$tdatapublic_tema[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_tema[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_tema[".fieldsForRegister"] = array();

$tdatapublic_tema[".listAjax"] = false;

	$tdatapublic_tema[".audit"] = false;

	$tdatapublic_tema[".locking"] = false;

$tdatapublic_tema[".edit"] = true;
$tdatapublic_tema[".afterEditAction"] = 1;
$tdatapublic_tema[".closePopupAfterEdit"] = 1;
$tdatapublic_tema[".afterEditActionDetTable"] = "";

$tdatapublic_tema[".add"] = true;
$tdatapublic_tema[".afterAddAction"] = 1;
$tdatapublic_tema[".closePopupAfterAdd"] = 1;
$tdatapublic_tema[".afterAddActionDetTable"] = "";

$tdatapublic_tema[".list"] = true;



$tdatapublic_tema[".reorderRecordsByHeader"] = true;



$tdatapublic_tema[".view"] = true;

$tdatapublic_tema[".import"] = true;

$tdatapublic_tema[".exportTo"] = true;

$tdatapublic_tema[".printFriendly"] = true;

$tdatapublic_tema[".delete"] = true;

$tdatapublic_tema[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_tema[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_tema[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_tema[".searchSaving"] = false;
//

$tdatapublic_tema[".showSearchPanel"] = true;
		$tdatapublic_tema[".flexibleSearch"] = true;

$tdatapublic_tema[".isUseAjaxSuggest"] = true;

$tdatapublic_tema[".rowHighlite"] = true;





$tdatapublic_tema[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_tema[".buttonsAdded"] = false;

$tdatapublic_tema[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_tema[".isUseTimeForSearch"] = false;





$tdatapublic_tema[".allSearchFields"] = array();
$tdatapublic_tema[".filterFields"] = array();
$tdatapublic_tema[".requiredSearchFields"] = array();

$tdatapublic_tema[".allSearchFields"][] = "idtema";
	$tdatapublic_tema[".allSearchFields"][] = "tema";
	

$tdatapublic_tema[".googleLikeFields"] = array();
$tdatapublic_tema[".googleLikeFields"][] = "idtema";
$tdatapublic_tema[".googleLikeFields"][] = "tema";


$tdatapublic_tema[".advSearchFields"] = array();
$tdatapublic_tema[".advSearchFields"][] = "idtema";
$tdatapublic_tema[".advSearchFields"][] = "tema";

$tdatapublic_tema[".tableType"] = "list";

$tdatapublic_tema[".printerPageOrientation"] = 0;
$tdatapublic_tema[".nPrinterPageScale"] = 100;

$tdatapublic_tema[".nPrinterSplitRecords"] = 40;

$tdatapublic_tema[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_tema[".geocodingEnabled"] = false;





$tdatapublic_tema[".listGridLayout"] = 3;





// view page pdf
$tdatapublic_tema[".isViewPagePDF"] = true;
$tdatapublic_tema[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapublic_tema[".isPrinterPagePDF"] = true;
$tdatapublic_tema[".nPrinterPagePDFScale"] = 100;


$tdatapublic_tema[".pageSize"] = 20;

$tdatapublic_tema[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_tema[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_tema[".orderindexes"] = array();

$tdatapublic_tema[".sqlHead"] = "SELECT idtema,  	tema";
$tdatapublic_tema[".sqlFrom"] = "FROM \"public\".tema";
$tdatapublic_tema[".sqlWhereExpr"] = "";
$tdatapublic_tema[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_tema[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_tema[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_tema[".highlightSearchResults"] = true;

$tableKeyspublic_tema = array();
$tableKeyspublic_tema[] = "idtema";
$tdatapublic_tema[".Keys"] = $tableKeyspublic_tema;

$tdatapublic_tema[".listFields"] = array();
$tdatapublic_tema[".listFields"][] = "idtema";
$tdatapublic_tema[".listFields"][] = "tema";

$tdatapublic_tema[".hideMobileList"] = array();


$tdatapublic_tema[".viewFields"] = array();
$tdatapublic_tema[".viewFields"][] = "idtema";
$tdatapublic_tema[".viewFields"][] = "tema";

$tdatapublic_tema[".addFields"] = array();
$tdatapublic_tema[".addFields"][] = "tema";

$tdatapublic_tema[".masterListFields"] = array();
$tdatapublic_tema[".masterListFields"][] = "idtema";
$tdatapublic_tema[".masterListFields"][] = "tema";

$tdatapublic_tema[".inlineAddFields"] = array();

$tdatapublic_tema[".editFields"] = array();
$tdatapublic_tema[".editFields"][] = "tema";

$tdatapublic_tema[".inlineEditFields"] = array();

$tdatapublic_tema[".updateSelectedFields"] = array();
$tdatapublic_tema[".updateSelectedFields"][] = "tema";


$tdatapublic_tema[".exportFields"] = array();
$tdatapublic_tema[".exportFields"][] = "idtema";
$tdatapublic_tema[".exportFields"][] = "tema";

$tdatapublic_tema[".importFields"] = array();
$tdatapublic_tema[".importFields"][] = "idtema";
$tdatapublic_tema[".importFields"][] = "tema";

$tdatapublic_tema[".printFields"] = array();
$tdatapublic_tema[".printFields"][] = "idtema";
$tdatapublic_tema[".printFields"][] = "tema";

//	idtema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idtema";
	$fdata["GoodName"] = "idtema";
	$fdata["ownerTable"] = "public.tema";
	$fdata["Label"] = GetFieldLabel("public_tema","idtema");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idtema";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idtema";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapublic_tema["idtema"] = $fdata;
//	tema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tema";
	$fdata["GoodName"] = "tema";
	$fdata["ownerTable"] = "public.tema";
	$fdata["Label"] = GetFieldLabel("public_tema","tema");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tema";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tema";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapublic_tema["tema"] = $fdata;


$tables_data["public.tema"]=&$tdatapublic_tema;
$field_labels["public_tema"] = &$fieldLabelspublic_tema;
$fieldToolTips["public_tema"] = &$fieldToolTipspublic_tema;
$placeHolders["public_tema"] = &$placeHolderspublic_tema;
$page_titles["public_tema"] = &$pageTitlespublic_tema;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.tema"] = array();
//	public.libro
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.libro";
		$detailsParam["dOriginalTable"] = "public.libro";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "public_libro";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_libro");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["public.tema"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.tema"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.tema"][$dIndex]["masterKeys"][]="idtema";

				$detailsTablesData["public.tema"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.tema"][$dIndex]["detailKeys"][]="idtema";

// tables which are master tables for current table (detail)
$masterTablesData["public.tema"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_tema()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idtema,  	tema";
$proto0["m_strFrom"] = "FROM \"public\".tema";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "idtema",
	"m_strTable" => "public.tema",
	"m_srcTableName" => "public.tema"
));

$proto6["m_sql"] = "idtema";
$proto6["m_srcTableName"] = "public.tema";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tema",
	"m_strTable" => "public.tema",
	"m_srcTableName" => "public.tema"
));

$proto8["m_sql"] = "tema";
$proto8["m_srcTableName"] = "public.tema";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.tema";
$proto11["m_srcTableName"] = "public.tema";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idtema";
$proto11["m_columns"][] = "tema";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".tema";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.tema";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.tema";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_tema = createSqlQuery_public_tema();


	
		;

		

$tdatapublic_tema[".sqlquery"] = $queryData_public_tema;

$tableEvents["public.tema"] = new eventsBase;
$tdatapublic_tema[".hasEvents"] = false;

?>