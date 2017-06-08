<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_autor = array();
	$tdatapublic_autor[".truncateText"] = true;
	$tdatapublic_autor[".NumberOfChars"] = 80;
	$tdatapublic_autor[".ShortName"] = "public_autor";
	$tdatapublic_autor[".OwnerID"] = "";
	$tdatapublic_autor[".OriginalTable"] = "public.autor";

//	field labels
$fieldLabelspublic_autor = array();
$fieldToolTipspublic_autor = array();
$pageTitlespublic_autor = array();
$placeHolderspublic_autor = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_autor["Spanish"] = array();
	$fieldToolTipspublic_autor["Spanish"] = array();
	$placeHolderspublic_autor["Spanish"] = array();
	$pageTitlespublic_autor["Spanish"] = array();
	$fieldLabelspublic_autor["Spanish"]["idautor"] = "Idautor";
	$fieldToolTipspublic_autor["Spanish"]["idautor"] = "";
	$placeHolderspublic_autor["Spanish"]["idautor"] = "";
	$fieldLabelspublic_autor["Spanish"]["autor"] = "Autor";
	$fieldToolTipspublic_autor["Spanish"]["autor"] = "";
	$placeHolderspublic_autor["Spanish"]["autor"] = "";
	if (count($fieldToolTipspublic_autor["Spanish"]))
		$tdatapublic_autor[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_autor[""] = array();
	$fieldToolTipspublic_autor[""] = array();
	$placeHolderspublic_autor[""] = array();
	$pageTitlespublic_autor[""] = array();
	if (count($fieldToolTipspublic_autor[""]))
		$tdatapublic_autor[".isUseToolTips"] = true;
}


	$tdatapublic_autor[".NCSearch"] = true;



$tdatapublic_autor[".shortTableName"] = "public_autor";
$tdatapublic_autor[".nSecOptions"] = 0;
$tdatapublic_autor[".recsPerRowPrint"] = 1;
$tdatapublic_autor[".mainTableOwnerID"] = "";
$tdatapublic_autor[".moveNext"] = 1;
$tdatapublic_autor[".entityType"] = 0;

$tdatapublic_autor[".strOriginalTableName"] = "public.autor";

	



$tdatapublic_autor[".showAddInPopup"] = false;

$tdatapublic_autor[".showEditInPopup"] = false;

$tdatapublic_autor[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_autor[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_autor[".fieldsForRegister"] = array();

$tdatapublic_autor[".listAjax"] = false;

	$tdatapublic_autor[".audit"] = false;

	$tdatapublic_autor[".locking"] = false;

$tdatapublic_autor[".edit"] = true;
$tdatapublic_autor[".afterEditAction"] = 1;
$tdatapublic_autor[".closePopupAfterEdit"] = 1;
$tdatapublic_autor[".afterEditActionDetTable"] = "";

$tdatapublic_autor[".add"] = true;
$tdatapublic_autor[".afterAddAction"] = 1;
$tdatapublic_autor[".closePopupAfterAdd"] = 1;
$tdatapublic_autor[".afterAddActionDetTable"] = "";

$tdatapublic_autor[".list"] = true;



$tdatapublic_autor[".reorderRecordsByHeader"] = true;



$tdatapublic_autor[".view"] = true;

$tdatapublic_autor[".import"] = true;

$tdatapublic_autor[".exportTo"] = true;

$tdatapublic_autor[".printFriendly"] = true;

$tdatapublic_autor[".delete"] = true;

$tdatapublic_autor[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_autor[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_autor[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_autor[".searchSaving"] = false;
//

$tdatapublic_autor[".showSearchPanel"] = true;
		$tdatapublic_autor[".flexibleSearch"] = true;

$tdatapublic_autor[".isUseAjaxSuggest"] = true;

$tdatapublic_autor[".rowHighlite"] = true;





$tdatapublic_autor[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_autor[".buttonsAdded"] = false;

$tdatapublic_autor[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_autor[".isUseTimeForSearch"] = false;



$tdatapublic_autor[".badgeColor"] = "DB7093";


$tdatapublic_autor[".allSearchFields"] = array();
$tdatapublic_autor[".filterFields"] = array();
$tdatapublic_autor[".requiredSearchFields"] = array();

$tdatapublic_autor[".allSearchFields"][] = "idautor";
	$tdatapublic_autor[".allSearchFields"][] = "autor";
	

$tdatapublic_autor[".googleLikeFields"] = array();
$tdatapublic_autor[".googleLikeFields"][] = "idautor";
$tdatapublic_autor[".googleLikeFields"][] = "autor";


$tdatapublic_autor[".advSearchFields"] = array();
$tdatapublic_autor[".advSearchFields"][] = "idautor";
$tdatapublic_autor[".advSearchFields"][] = "autor";

$tdatapublic_autor[".tableType"] = "list";

$tdatapublic_autor[".printerPageOrientation"] = 0;
$tdatapublic_autor[".nPrinterPageScale"] = 100;

$tdatapublic_autor[".nPrinterSplitRecords"] = 40;

$tdatapublic_autor[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_autor[".geocodingEnabled"] = false;





$tdatapublic_autor[".listGridLayout"] = 3;





// view page pdf
$tdatapublic_autor[".isViewPagePDF"] = true;
$tdatapublic_autor[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapublic_autor[".isPrinterPagePDF"] = true;
$tdatapublic_autor[".nPrinterPagePDFScale"] = 100;


$tdatapublic_autor[".pageSize"] = 20;

$tdatapublic_autor[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_autor[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_autor[".orderindexes"] = array();

$tdatapublic_autor[".sqlHead"] = "SELECT idautor,  	autor";
$tdatapublic_autor[".sqlFrom"] = "FROM \"public\".autor";
$tdatapublic_autor[".sqlWhereExpr"] = "";
$tdatapublic_autor[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_autor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_autor[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_autor[".highlightSearchResults"] = true;

$tableKeyspublic_autor = array();
$tableKeyspublic_autor[] = "idautor";
$tdatapublic_autor[".Keys"] = $tableKeyspublic_autor;

$tdatapublic_autor[".listFields"] = array();
$tdatapublic_autor[".listFields"][] = "idautor";
$tdatapublic_autor[".listFields"][] = "autor";

$tdatapublic_autor[".hideMobileList"] = array();


$tdatapublic_autor[".viewFields"] = array();
$tdatapublic_autor[".viewFields"][] = "idautor";
$tdatapublic_autor[".viewFields"][] = "autor";

$tdatapublic_autor[".addFields"] = array();
$tdatapublic_autor[".addFields"][] = "autor";

$tdatapublic_autor[".masterListFields"] = array();
$tdatapublic_autor[".masterListFields"][] = "idautor";
$tdatapublic_autor[".masterListFields"][] = "autor";

$tdatapublic_autor[".inlineAddFields"] = array();

$tdatapublic_autor[".editFields"] = array();
$tdatapublic_autor[".editFields"][] = "autor";

$tdatapublic_autor[".inlineEditFields"] = array();

$tdatapublic_autor[".updateSelectedFields"] = array();
$tdatapublic_autor[".updateSelectedFields"][] = "autor";


$tdatapublic_autor[".exportFields"] = array();
$tdatapublic_autor[".exportFields"][] = "idautor";
$tdatapublic_autor[".exportFields"][] = "autor";

$tdatapublic_autor[".importFields"] = array();
$tdatapublic_autor[".importFields"][] = "idautor";
$tdatapublic_autor[".importFields"][] = "autor";

$tdatapublic_autor[".printFields"] = array();
$tdatapublic_autor[".printFields"][] = "idautor";
$tdatapublic_autor[".printFields"][] = "autor";

//	idautor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idautor";
	$fdata["GoodName"] = "idautor";
	$fdata["ownerTable"] = "public.autor";
	$fdata["Label"] = GetFieldLabel("public_autor","idautor");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idautor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idautor";

	
	
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




	$tdatapublic_autor["idautor"] = $fdata;
//	autor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "autor";
	$fdata["GoodName"] = "autor";
	$fdata["ownerTable"] = "public.autor";
	$fdata["Label"] = GetFieldLabel("public_autor","autor");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "autor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "autor";

	
	
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




	$tdatapublic_autor["autor"] = $fdata;


$tables_data["public.autor"]=&$tdatapublic_autor;
$field_labels["public_autor"] = &$fieldLabelspublic_autor;
$fieldToolTips["public_autor"] = &$fieldToolTipspublic_autor;
$placeHolders["public_autor"] = &$placeHolderspublic_autor;
$page_titles["public_autor"] = &$pageTitlespublic_autor;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.autor"] = array();
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
		
	$detailsTablesData["public.autor"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.autor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.autor"][$dIndex]["masterKeys"][]="idautor";

				$detailsTablesData["public.autor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.autor"][$dIndex]["detailKeys"][]="idautor";

// tables which are master tables for current table (detail)
$masterTablesData["public.autor"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_autor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idautor,  	autor";
$proto0["m_strFrom"] = "FROM \"public\".autor";
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
	"m_strName" => "idautor",
	"m_strTable" => "public.autor",
	"m_srcTableName" => "public.autor"
));

$proto6["m_sql"] = "idautor";
$proto6["m_srcTableName"] = "public.autor";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "autor",
	"m_strTable" => "public.autor",
	"m_srcTableName" => "public.autor"
));

$proto8["m_sql"] = "autor";
$proto8["m_srcTableName"] = "public.autor";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.autor";
$proto11["m_srcTableName"] = "public.autor";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idautor";
$proto11["m_columns"][] = "autor";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".autor";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.autor";
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
$proto0["m_srcTableName"]="public.autor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_autor = createSqlQuery_public_autor();


	
		;

		

$tdatapublic_autor[".sqlquery"] = $queryData_public_autor;

$tableEvents["public.autor"] = new eventsBase;
$tdatapublic_autor[".hasEvents"] = false;

?>