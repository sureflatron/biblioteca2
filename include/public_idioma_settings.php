<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_idioma = array();
	$tdatapublic_idioma[".truncateText"] = true;
	$tdatapublic_idioma[".NumberOfChars"] = 80;
	$tdatapublic_idioma[".ShortName"] = "public_idioma";
	$tdatapublic_idioma[".OwnerID"] = "";
	$tdatapublic_idioma[".OriginalTable"] = "public.idioma";

//	field labels
$fieldLabelspublic_idioma = array();
$fieldToolTipspublic_idioma = array();
$pageTitlespublic_idioma = array();
$placeHolderspublic_idioma = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_idioma["Spanish"] = array();
	$fieldToolTipspublic_idioma["Spanish"] = array();
	$placeHolderspublic_idioma["Spanish"] = array();
	$pageTitlespublic_idioma["Spanish"] = array();
	$fieldLabelspublic_idioma["Spanish"]["ididioma"] = "Ididioma";
	$fieldToolTipspublic_idioma["Spanish"]["ididioma"] = "";
	$placeHolderspublic_idioma["Spanish"]["ididioma"] = "";
	$fieldLabelspublic_idioma["Spanish"]["idioma"] = "Idioma";
	$fieldToolTipspublic_idioma["Spanish"]["idioma"] = "";
	$placeHolderspublic_idioma["Spanish"]["idioma"] = "";
	$fieldLabelspublic_idioma["Spanish"]["iniciales"] = "Iniciales";
	$fieldToolTipspublic_idioma["Spanish"]["iniciales"] = "";
	$placeHolderspublic_idioma["Spanish"]["iniciales"] = "";
	if (count($fieldToolTipspublic_idioma["Spanish"]))
		$tdatapublic_idioma[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_idioma[""] = array();
	$fieldToolTipspublic_idioma[""] = array();
	$placeHolderspublic_idioma[""] = array();
	$pageTitlespublic_idioma[""] = array();
	if (count($fieldToolTipspublic_idioma[""]))
		$tdatapublic_idioma[".isUseToolTips"] = true;
}


	$tdatapublic_idioma[".NCSearch"] = true;



$tdatapublic_idioma[".shortTableName"] = "public_idioma";
$tdatapublic_idioma[".nSecOptions"] = 0;
$tdatapublic_idioma[".recsPerRowPrint"] = 1;
$tdatapublic_idioma[".mainTableOwnerID"] = "";
$tdatapublic_idioma[".moveNext"] = 1;
$tdatapublic_idioma[".entityType"] = 0;

$tdatapublic_idioma[".strOriginalTableName"] = "public.idioma";

	



$tdatapublic_idioma[".showAddInPopup"] = false;

$tdatapublic_idioma[".showEditInPopup"] = false;

$tdatapublic_idioma[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_idioma[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_idioma[".fieldsForRegister"] = array();

$tdatapublic_idioma[".listAjax"] = false;

	$tdatapublic_idioma[".audit"] = false;

	$tdatapublic_idioma[".locking"] = false;

$tdatapublic_idioma[".edit"] = true;
$tdatapublic_idioma[".afterEditAction"] = 1;
$tdatapublic_idioma[".closePopupAfterEdit"] = 1;
$tdatapublic_idioma[".afterEditActionDetTable"] = "";

$tdatapublic_idioma[".add"] = true;
$tdatapublic_idioma[".afterAddAction"] = 1;
$tdatapublic_idioma[".closePopupAfterAdd"] = 1;
$tdatapublic_idioma[".afterAddActionDetTable"] = "";

$tdatapublic_idioma[".list"] = true;



$tdatapublic_idioma[".reorderRecordsByHeader"] = true;



$tdatapublic_idioma[".view"] = true;

$tdatapublic_idioma[".import"] = true;

$tdatapublic_idioma[".exportTo"] = true;

$tdatapublic_idioma[".printFriendly"] = true;

$tdatapublic_idioma[".delete"] = true;

$tdatapublic_idioma[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_idioma[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_idioma[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_idioma[".searchSaving"] = false;
//

$tdatapublic_idioma[".showSearchPanel"] = true;
		$tdatapublic_idioma[".flexibleSearch"] = true;

$tdatapublic_idioma[".isUseAjaxSuggest"] = true;

$tdatapublic_idioma[".rowHighlite"] = true;





$tdatapublic_idioma[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_idioma[".buttonsAdded"] = false;

$tdatapublic_idioma[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_idioma[".isUseTimeForSearch"] = false;





$tdatapublic_idioma[".allSearchFields"] = array();
$tdatapublic_idioma[".filterFields"] = array();
$tdatapublic_idioma[".requiredSearchFields"] = array();

$tdatapublic_idioma[".allSearchFields"][] = "ididioma";
	$tdatapublic_idioma[".allSearchFields"][] = "idioma";
	$tdatapublic_idioma[".allSearchFields"][] = "iniciales";
	

$tdatapublic_idioma[".googleLikeFields"] = array();
$tdatapublic_idioma[".googleLikeFields"][] = "ididioma";
$tdatapublic_idioma[".googleLikeFields"][] = "idioma";
$tdatapublic_idioma[".googleLikeFields"][] = "iniciales";


$tdatapublic_idioma[".advSearchFields"] = array();
$tdatapublic_idioma[".advSearchFields"][] = "ididioma";
$tdatapublic_idioma[".advSearchFields"][] = "idioma";
$tdatapublic_idioma[".advSearchFields"][] = "iniciales";

$tdatapublic_idioma[".tableType"] = "list";

$tdatapublic_idioma[".printerPageOrientation"] = 0;
$tdatapublic_idioma[".nPrinterPageScale"] = 100;

$tdatapublic_idioma[".nPrinterSplitRecords"] = 40;

$tdatapublic_idioma[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_idioma[".geocodingEnabled"] = false;





$tdatapublic_idioma[".listGridLayout"] = 3;





// view page pdf
$tdatapublic_idioma[".isViewPagePDF"] = true;
$tdatapublic_idioma[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapublic_idioma[".isPrinterPagePDF"] = true;
$tdatapublic_idioma[".nPrinterPagePDFScale"] = 100;


$tdatapublic_idioma[".pageSize"] = 20;

$tdatapublic_idioma[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_idioma[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_idioma[".orderindexes"] = array();

$tdatapublic_idioma[".sqlHead"] = "SELECT ididioma,  	idioma,  	iniciales";
$tdatapublic_idioma[".sqlFrom"] = "FROM \"public\".idioma";
$tdatapublic_idioma[".sqlWhereExpr"] = "";
$tdatapublic_idioma[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_idioma[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_idioma[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_idioma[".highlightSearchResults"] = true;

$tableKeyspublic_idioma = array();
$tableKeyspublic_idioma[] = "ididioma";
$tdatapublic_idioma[".Keys"] = $tableKeyspublic_idioma;

$tdatapublic_idioma[".listFields"] = array();
$tdatapublic_idioma[".listFields"][] = "ididioma";
$tdatapublic_idioma[".listFields"][] = "idioma";
$tdatapublic_idioma[".listFields"][] = "iniciales";

$tdatapublic_idioma[".hideMobileList"] = array();


$tdatapublic_idioma[".viewFields"] = array();
$tdatapublic_idioma[".viewFields"][] = "ididioma";
$tdatapublic_idioma[".viewFields"][] = "idioma";
$tdatapublic_idioma[".viewFields"][] = "iniciales";

$tdatapublic_idioma[".addFields"] = array();
$tdatapublic_idioma[".addFields"][] = "idioma";
$tdatapublic_idioma[".addFields"][] = "iniciales";

$tdatapublic_idioma[".masterListFields"] = array();
$tdatapublic_idioma[".masterListFields"][] = "ididioma";
$tdatapublic_idioma[".masterListFields"][] = "idioma";
$tdatapublic_idioma[".masterListFields"][] = "iniciales";

$tdatapublic_idioma[".inlineAddFields"] = array();

$tdatapublic_idioma[".editFields"] = array();
$tdatapublic_idioma[".editFields"][] = "idioma";
$tdatapublic_idioma[".editFields"][] = "iniciales";

$tdatapublic_idioma[".inlineEditFields"] = array();

$tdatapublic_idioma[".updateSelectedFields"] = array();
$tdatapublic_idioma[".updateSelectedFields"][] = "idioma";
$tdatapublic_idioma[".updateSelectedFields"][] = "iniciales";


$tdatapublic_idioma[".exportFields"] = array();
$tdatapublic_idioma[".exportFields"][] = "ididioma";
$tdatapublic_idioma[".exportFields"][] = "idioma";
$tdatapublic_idioma[".exportFields"][] = "iniciales";

$tdatapublic_idioma[".importFields"] = array();
$tdatapublic_idioma[".importFields"][] = "ididioma";
$tdatapublic_idioma[".importFields"][] = "idioma";
$tdatapublic_idioma[".importFields"][] = "iniciales";

$tdatapublic_idioma[".printFields"] = array();
$tdatapublic_idioma[".printFields"][] = "ididioma";
$tdatapublic_idioma[".printFields"][] = "idioma";
$tdatapublic_idioma[".printFields"][] = "iniciales";

//	ididioma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ididioma";
	$fdata["GoodName"] = "ididioma";
	$fdata["ownerTable"] = "public.idioma";
	$fdata["Label"] = GetFieldLabel("public_idioma","ididioma");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ididioma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ididioma";

	
	
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




	$tdatapublic_idioma["ididioma"] = $fdata;
//	idioma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idioma";
	$fdata["GoodName"] = "idioma";
	$fdata["ownerTable"] = "public.idioma";
	$fdata["Label"] = GetFieldLabel("public_idioma","idioma");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idioma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idioma";

	
	
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




	$tdatapublic_idioma["idioma"] = $fdata;
//	iniciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "iniciales";
	$fdata["GoodName"] = "iniciales";
	$fdata["ownerTable"] = "public.idioma";
	$fdata["Label"] = GetFieldLabel("public_idioma","iniciales");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iniciales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "iniciales";

	
	
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




	$tdatapublic_idioma["iniciales"] = $fdata;


$tables_data["public.idioma"]=&$tdatapublic_idioma;
$field_labels["public_idioma"] = &$fieldLabelspublic_idioma;
$fieldToolTips["public_idioma"] = &$fieldToolTipspublic_idioma;
$placeHolders["public_idioma"] = &$placeHolderspublic_idioma;
$page_titles["public_idioma"] = &$pageTitlespublic_idioma;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.idioma"] = array();
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
		
	$detailsTablesData["public.idioma"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.idioma"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.idioma"][$dIndex]["masterKeys"][]="ididioma";

				$detailsTablesData["public.idioma"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.idioma"][$dIndex]["detailKeys"][]="ididioma";

// tables which are master tables for current table (detail)
$masterTablesData["public.idioma"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_idioma()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ididioma,  	idioma,  	iniciales";
$proto0["m_strFrom"] = "FROM \"public\".idioma";
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
	"m_strName" => "ididioma",
	"m_strTable" => "public.idioma",
	"m_srcTableName" => "public.idioma"
));

$proto6["m_sql"] = "ididioma";
$proto6["m_srcTableName"] = "public.idioma";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idioma",
	"m_strTable" => "public.idioma",
	"m_srcTableName" => "public.idioma"
));

$proto8["m_sql"] = "idioma";
$proto8["m_srcTableName"] = "public.idioma";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "iniciales",
	"m_strTable" => "public.idioma",
	"m_srcTableName" => "public.idioma"
));

$proto10["m_sql"] = "iniciales";
$proto10["m_srcTableName"] = "public.idioma";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.idioma";
$proto13["m_srcTableName"] = "public.idioma";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ididioma";
$proto13["m_columns"][] = "idioma";
$proto13["m_columns"][] = "iniciales";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".idioma";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.idioma";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.idioma";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_idioma = createSqlQuery_public_idioma();


	
		;

			

$tdatapublic_idioma[".sqlquery"] = $queryData_public_idioma;

$tableEvents["public.idioma"] = new eventsBase;
$tdatapublic_idioma[".hasEvents"] = false;

?>