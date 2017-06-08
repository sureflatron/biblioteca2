<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_editorial = array();
	$tdatapublic_editorial[".truncateText"] = true;
	$tdatapublic_editorial[".NumberOfChars"] = 80;
	$tdatapublic_editorial[".ShortName"] = "public_editorial";
	$tdatapublic_editorial[".OwnerID"] = "";
	$tdatapublic_editorial[".OriginalTable"] = "public.editorial";

//	field labels
$fieldLabelspublic_editorial = array();
$fieldToolTipspublic_editorial = array();
$pageTitlespublic_editorial = array();
$placeHolderspublic_editorial = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_editorial["Spanish"] = array();
	$fieldToolTipspublic_editorial["Spanish"] = array();
	$placeHolderspublic_editorial["Spanish"] = array();
	$pageTitlespublic_editorial["Spanish"] = array();
	$fieldLabelspublic_editorial["Spanish"]["ideditorial"] = "Ideditorial";
	$fieldToolTipspublic_editorial["Spanish"]["ideditorial"] = "";
	$placeHolderspublic_editorial["Spanish"]["ideditorial"] = "";
	$fieldLabelspublic_editorial["Spanish"]["editorial"] = "Editorial";
	$fieldToolTipspublic_editorial["Spanish"]["editorial"] = "";
	$placeHolderspublic_editorial["Spanish"]["editorial"] = "";
	if (count($fieldToolTipspublic_editorial["Spanish"]))
		$tdatapublic_editorial[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_editorial[""] = array();
	$fieldToolTipspublic_editorial[""] = array();
	$placeHolderspublic_editorial[""] = array();
	$pageTitlespublic_editorial[""] = array();
	if (count($fieldToolTipspublic_editorial[""]))
		$tdatapublic_editorial[".isUseToolTips"] = true;
}


	$tdatapublic_editorial[".NCSearch"] = true;



$tdatapublic_editorial[".shortTableName"] = "public_editorial";
$tdatapublic_editorial[".nSecOptions"] = 0;
$tdatapublic_editorial[".recsPerRowPrint"] = 1;
$tdatapublic_editorial[".mainTableOwnerID"] = "";
$tdatapublic_editorial[".moveNext"] = 1;
$tdatapublic_editorial[".entityType"] = 0;

$tdatapublic_editorial[".strOriginalTableName"] = "public.editorial";

	



$tdatapublic_editorial[".showAddInPopup"] = false;

$tdatapublic_editorial[".showEditInPopup"] = false;

$tdatapublic_editorial[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_editorial[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_editorial[".fieldsForRegister"] = array();

$tdatapublic_editorial[".listAjax"] = false;

	$tdatapublic_editorial[".audit"] = false;

	$tdatapublic_editorial[".locking"] = false;

$tdatapublic_editorial[".edit"] = true;
$tdatapublic_editorial[".afterEditAction"] = 1;
$tdatapublic_editorial[".closePopupAfterEdit"] = 1;
$tdatapublic_editorial[".afterEditActionDetTable"] = "";

$tdatapublic_editorial[".add"] = true;
$tdatapublic_editorial[".afterAddAction"] = 1;
$tdatapublic_editorial[".closePopupAfterAdd"] = 1;
$tdatapublic_editorial[".afterAddActionDetTable"] = "";

$tdatapublic_editorial[".list"] = true;



$tdatapublic_editorial[".reorderRecordsByHeader"] = true;



$tdatapublic_editorial[".view"] = true;

$tdatapublic_editorial[".import"] = true;

$tdatapublic_editorial[".exportTo"] = true;

$tdatapublic_editorial[".printFriendly"] = true;

$tdatapublic_editorial[".delete"] = true;

$tdatapublic_editorial[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_editorial[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_editorial[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_editorial[".searchSaving"] = false;
//

$tdatapublic_editorial[".showSearchPanel"] = true;
		$tdatapublic_editorial[".flexibleSearch"] = true;

$tdatapublic_editorial[".isUseAjaxSuggest"] = true;

$tdatapublic_editorial[".rowHighlite"] = true;





$tdatapublic_editorial[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_editorial[".buttonsAdded"] = false;

$tdatapublic_editorial[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_editorial[".isUseTimeForSearch"] = false;



$tdatapublic_editorial[".badgeColor"] = "E67349";


$tdatapublic_editorial[".allSearchFields"] = array();
$tdatapublic_editorial[".filterFields"] = array();
$tdatapublic_editorial[".requiredSearchFields"] = array();

$tdatapublic_editorial[".allSearchFields"][] = "ideditorial";
	$tdatapublic_editorial[".allSearchFields"][] = "editorial";
	

$tdatapublic_editorial[".googleLikeFields"] = array();
$tdatapublic_editorial[".googleLikeFields"][] = "ideditorial";
$tdatapublic_editorial[".googleLikeFields"][] = "editorial";


$tdatapublic_editorial[".advSearchFields"] = array();
$tdatapublic_editorial[".advSearchFields"][] = "ideditorial";
$tdatapublic_editorial[".advSearchFields"][] = "editorial";

$tdatapublic_editorial[".tableType"] = "list";

$tdatapublic_editorial[".printerPageOrientation"] = 0;
$tdatapublic_editorial[".nPrinterPageScale"] = 100;

$tdatapublic_editorial[".nPrinterSplitRecords"] = 40;

$tdatapublic_editorial[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_editorial[".geocodingEnabled"] = false;





$tdatapublic_editorial[".listGridLayout"] = 3;





// view page pdf
$tdatapublic_editorial[".isViewPagePDF"] = true;
$tdatapublic_editorial[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapublic_editorial[".isPrinterPagePDF"] = true;
$tdatapublic_editorial[".nPrinterPagePDFScale"] = 100;


$tdatapublic_editorial[".pageSize"] = 20;

$tdatapublic_editorial[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_editorial[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_editorial[".orderindexes"] = array();

$tdatapublic_editorial[".sqlHead"] = "SELECT ideditorial,  	editorial";
$tdatapublic_editorial[".sqlFrom"] = "FROM \"public\".editorial";
$tdatapublic_editorial[".sqlWhereExpr"] = "";
$tdatapublic_editorial[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_editorial[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_editorial[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_editorial[".highlightSearchResults"] = true;

$tableKeyspublic_editorial = array();
$tableKeyspublic_editorial[] = "ideditorial";
$tdatapublic_editorial[".Keys"] = $tableKeyspublic_editorial;

$tdatapublic_editorial[".listFields"] = array();
$tdatapublic_editorial[".listFields"][] = "ideditorial";
$tdatapublic_editorial[".listFields"][] = "editorial";

$tdatapublic_editorial[".hideMobileList"] = array();


$tdatapublic_editorial[".viewFields"] = array();
$tdatapublic_editorial[".viewFields"][] = "ideditorial";
$tdatapublic_editorial[".viewFields"][] = "editorial";

$tdatapublic_editorial[".addFields"] = array();
$tdatapublic_editorial[".addFields"][] = "editorial";

$tdatapublic_editorial[".masterListFields"] = array();
$tdatapublic_editorial[".masterListFields"][] = "ideditorial";
$tdatapublic_editorial[".masterListFields"][] = "editorial";

$tdatapublic_editorial[".inlineAddFields"] = array();

$tdatapublic_editorial[".editFields"] = array();
$tdatapublic_editorial[".editFields"][] = "editorial";

$tdatapublic_editorial[".inlineEditFields"] = array();

$tdatapublic_editorial[".updateSelectedFields"] = array();
$tdatapublic_editorial[".updateSelectedFields"][] = "editorial";


$tdatapublic_editorial[".exportFields"] = array();
$tdatapublic_editorial[".exportFields"][] = "ideditorial";
$tdatapublic_editorial[".exportFields"][] = "editorial";

$tdatapublic_editorial[".importFields"] = array();
$tdatapublic_editorial[".importFields"][] = "ideditorial";
$tdatapublic_editorial[".importFields"][] = "editorial";

$tdatapublic_editorial[".printFields"] = array();
$tdatapublic_editorial[".printFields"][] = "ideditorial";
$tdatapublic_editorial[".printFields"][] = "editorial";

//	ideditorial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ideditorial";
	$fdata["GoodName"] = "ideditorial";
	$fdata["ownerTable"] = "public.editorial";
	$fdata["Label"] = GetFieldLabel("public_editorial","ideditorial");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ideditorial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ideditorial";

	
	
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




	$tdatapublic_editorial["ideditorial"] = $fdata;
//	editorial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "editorial";
	$fdata["GoodName"] = "editorial";
	$fdata["ownerTable"] = "public.editorial";
	$fdata["Label"] = GetFieldLabel("public_editorial","editorial");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "editorial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "editorial";

	
	
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




	$tdatapublic_editorial["editorial"] = $fdata;


$tables_data["public.editorial"]=&$tdatapublic_editorial;
$field_labels["public_editorial"] = &$fieldLabelspublic_editorial;
$fieldToolTips["public_editorial"] = &$fieldToolTipspublic_editorial;
$placeHolders["public_editorial"] = &$placeHolderspublic_editorial;
$page_titles["public_editorial"] = &$pageTitlespublic_editorial;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.editorial"] = array();
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
		
	$detailsTablesData["public.editorial"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.editorial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.editorial"][$dIndex]["masterKeys"][]="ideditorial";

				$detailsTablesData["public.editorial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.editorial"][$dIndex]["detailKeys"][]="ideditorial";

// tables which are master tables for current table (detail)
$masterTablesData["public.editorial"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_editorial()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ideditorial,  	editorial";
$proto0["m_strFrom"] = "FROM \"public\".editorial";
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
	"m_strName" => "ideditorial",
	"m_strTable" => "public.editorial",
	"m_srcTableName" => "public.editorial"
));

$proto6["m_sql"] = "ideditorial";
$proto6["m_srcTableName"] = "public.editorial";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "editorial",
	"m_strTable" => "public.editorial",
	"m_srcTableName" => "public.editorial"
));

$proto8["m_sql"] = "editorial";
$proto8["m_srcTableName"] = "public.editorial";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.editorial";
$proto11["m_srcTableName"] = "public.editorial";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ideditorial";
$proto11["m_columns"][] = "editorial";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".editorial";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.editorial";
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
$proto0["m_srcTableName"]="public.editorial";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_editorial = createSqlQuery_public_editorial();


	
		;

		

$tdatapublic_editorial[".sqlquery"] = $queryData_public_editorial;

$tableEvents["public.editorial"] = new eventsBase;
$tdatapublic_editorial[".hasEvents"] = false;

?>