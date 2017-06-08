<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_estado = array();
	$tdatapublic_estado[".truncateText"] = true;
	$tdatapublic_estado[".NumberOfChars"] = 80;
	$tdatapublic_estado[".ShortName"] = "public_estado";
	$tdatapublic_estado[".OwnerID"] = "";
	$tdatapublic_estado[".OriginalTable"] = "public.estado";

//	field labels
$fieldLabelspublic_estado = array();
$fieldToolTipspublic_estado = array();
$pageTitlespublic_estado = array();
$placeHolderspublic_estado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_estado["Spanish"] = array();
	$fieldToolTipspublic_estado["Spanish"] = array();
	$placeHolderspublic_estado["Spanish"] = array();
	$pageTitlespublic_estado["Spanish"] = array();
	$fieldLabelspublic_estado["Spanish"]["idestado"] = "Idestado";
	$fieldToolTipspublic_estado["Spanish"]["idestado"] = "";
	$placeHolderspublic_estado["Spanish"]["idestado"] = "";
	$fieldLabelspublic_estado["Spanish"]["estado"] = "Estado";
	$fieldToolTipspublic_estado["Spanish"]["estado"] = "";
	$placeHolderspublic_estado["Spanish"]["estado"] = "";
	if (count($fieldToolTipspublic_estado["Spanish"]))
		$tdatapublic_estado[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_estado[""] = array();
	$fieldToolTipspublic_estado[""] = array();
	$placeHolderspublic_estado[""] = array();
	$pageTitlespublic_estado[""] = array();
	if (count($fieldToolTipspublic_estado[""]))
		$tdatapublic_estado[".isUseToolTips"] = true;
}


	$tdatapublic_estado[".NCSearch"] = true;



$tdatapublic_estado[".shortTableName"] = "public_estado";
$tdatapublic_estado[".nSecOptions"] = 0;
$tdatapublic_estado[".recsPerRowPrint"] = 1;
$tdatapublic_estado[".mainTableOwnerID"] = "";
$tdatapublic_estado[".moveNext"] = 1;
$tdatapublic_estado[".entityType"] = 0;

$tdatapublic_estado[".strOriginalTableName"] = "public.estado";

	



$tdatapublic_estado[".showAddInPopup"] = false;

$tdatapublic_estado[".showEditInPopup"] = false;

$tdatapublic_estado[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_estado[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_estado[".fieldsForRegister"] = array();

$tdatapublic_estado[".listAjax"] = false;

	$tdatapublic_estado[".audit"] = false;

	$tdatapublic_estado[".locking"] = false;

$tdatapublic_estado[".edit"] = true;
$tdatapublic_estado[".afterEditAction"] = 1;
$tdatapublic_estado[".closePopupAfterEdit"] = 1;
$tdatapublic_estado[".afterEditActionDetTable"] = "";

$tdatapublic_estado[".add"] = true;
$tdatapublic_estado[".afterAddAction"] = 1;
$tdatapublic_estado[".closePopupAfterAdd"] = 1;
$tdatapublic_estado[".afterAddActionDetTable"] = "";

$tdatapublic_estado[".list"] = true;



$tdatapublic_estado[".reorderRecordsByHeader"] = true;



$tdatapublic_estado[".view"] = true;

$tdatapublic_estado[".import"] = true;

$tdatapublic_estado[".exportTo"] = true;

$tdatapublic_estado[".printFriendly"] = true;

$tdatapublic_estado[".delete"] = true;

$tdatapublic_estado[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_estado[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_estado[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_estado[".searchSaving"] = false;
//

$tdatapublic_estado[".showSearchPanel"] = true;
		$tdatapublic_estado[".flexibleSearch"] = true;

$tdatapublic_estado[".isUseAjaxSuggest"] = true;

$tdatapublic_estado[".rowHighlite"] = true;





$tdatapublic_estado[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_estado[".buttonsAdded"] = false;

$tdatapublic_estado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_estado[".isUseTimeForSearch"] = false;





$tdatapublic_estado[".allSearchFields"] = array();
$tdatapublic_estado[".filterFields"] = array();
$tdatapublic_estado[".requiredSearchFields"] = array();

$tdatapublic_estado[".allSearchFields"][] = "idestado";
	$tdatapublic_estado[".allSearchFields"][] = "estado";
	

$tdatapublic_estado[".googleLikeFields"] = array();
$tdatapublic_estado[".googleLikeFields"][] = "idestado";
$tdatapublic_estado[".googleLikeFields"][] = "estado";


$tdatapublic_estado[".advSearchFields"] = array();
$tdatapublic_estado[".advSearchFields"][] = "idestado";
$tdatapublic_estado[".advSearchFields"][] = "estado";

$tdatapublic_estado[".tableType"] = "list";

$tdatapublic_estado[".printerPageOrientation"] = 0;
$tdatapublic_estado[".nPrinterPageScale"] = 100;

$tdatapublic_estado[".nPrinterSplitRecords"] = 40;

$tdatapublic_estado[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_estado[".geocodingEnabled"] = false;





$tdatapublic_estado[".listGridLayout"] = 3;





// view page pdf
$tdatapublic_estado[".isViewPagePDF"] = true;
$tdatapublic_estado[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapublic_estado[".isPrinterPagePDF"] = true;
$tdatapublic_estado[".nPrinterPagePDFScale"] = 100;


$tdatapublic_estado[".pageSize"] = 20;

$tdatapublic_estado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_estado[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_estado[".orderindexes"] = array();

$tdatapublic_estado[".sqlHead"] = "SELECT idestado,  	estado";
$tdatapublic_estado[".sqlFrom"] = "FROM \"public\".estado";
$tdatapublic_estado[".sqlWhereExpr"] = "";
$tdatapublic_estado[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_estado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_estado[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_estado[".highlightSearchResults"] = true;

$tableKeyspublic_estado = array();
$tableKeyspublic_estado[] = "idestado";
$tdatapublic_estado[".Keys"] = $tableKeyspublic_estado;

$tdatapublic_estado[".listFields"] = array();
$tdatapublic_estado[".listFields"][] = "idestado";
$tdatapublic_estado[".listFields"][] = "estado";

$tdatapublic_estado[".hideMobileList"] = array();


$tdatapublic_estado[".viewFields"] = array();
$tdatapublic_estado[".viewFields"][] = "idestado";
$tdatapublic_estado[".viewFields"][] = "estado";

$tdatapublic_estado[".addFields"] = array();
$tdatapublic_estado[".addFields"][] = "estado";

$tdatapublic_estado[".masterListFields"] = array();
$tdatapublic_estado[".masterListFields"][] = "idestado";
$tdatapublic_estado[".masterListFields"][] = "estado";

$tdatapublic_estado[".inlineAddFields"] = array();

$tdatapublic_estado[".editFields"] = array();
$tdatapublic_estado[".editFields"][] = "estado";

$tdatapublic_estado[".inlineEditFields"] = array();

$tdatapublic_estado[".updateSelectedFields"] = array();
$tdatapublic_estado[".updateSelectedFields"][] = "estado";


$tdatapublic_estado[".exportFields"] = array();
$tdatapublic_estado[".exportFields"][] = "idestado";
$tdatapublic_estado[".exportFields"][] = "estado";

$tdatapublic_estado[".importFields"] = array();
$tdatapublic_estado[".importFields"][] = "idestado";
$tdatapublic_estado[".importFields"][] = "estado";

$tdatapublic_estado[".printFields"] = array();
$tdatapublic_estado[".printFields"][] = "idestado";
$tdatapublic_estado[".printFields"][] = "estado";

//	idestado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idestado";
	$fdata["GoodName"] = "idestado";
	$fdata["ownerTable"] = "public.estado";
	$fdata["Label"] = GetFieldLabel("public_estado","idestado");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idestado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idestado";

	
	
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




	$tdatapublic_estado["idestado"] = $fdata;
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "public.estado";
	$fdata["Label"] = GetFieldLabel("public_estado","estado");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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




	$tdatapublic_estado["estado"] = $fdata;


$tables_data["public.estado"]=&$tdatapublic_estado;
$field_labels["public_estado"] = &$fieldLabelspublic_estado;
$fieldToolTips["public_estado"] = &$fieldToolTipspublic_estado;
$placeHolders["public_estado"] = &$placeHolderspublic_estado;
$page_titles["public_estado"] = &$pageTitlespublic_estado;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.estado"] = array();
//	public.ejemplares
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.ejemplares";
		$detailsParam["dOriginalTable"] = "public.ejemplares";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "public_ejemplares";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_ejemplares");
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
		
	$detailsTablesData["public.estado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.estado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.estado"][$dIndex]["masterKeys"][]="idestado";

				$detailsTablesData["public.estado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.estado"][$dIndex]["detailKeys"][]="estado";

// tables which are master tables for current table (detail)
$masterTablesData["public.estado"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_estado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idestado,  	estado";
$proto0["m_strFrom"] = "FROM \"public\".estado";
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
	"m_strName" => "idestado",
	"m_strTable" => "public.estado",
	"m_srcTableName" => "public.estado"
));

$proto6["m_sql"] = "idestado";
$proto6["m_srcTableName"] = "public.estado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "public.estado",
	"m_srcTableName" => "public.estado"
));

$proto8["m_sql"] = "estado";
$proto8["m_srcTableName"] = "public.estado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.estado";
$proto11["m_srcTableName"] = "public.estado";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idestado";
$proto11["m_columns"][] = "estado";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".estado";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.estado";
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
$proto0["m_srcTableName"]="public.estado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_estado = createSqlQuery_public_estado();


	
		;

		

$tdatapublic_estado[".sqlquery"] = $queryData_public_estado;

$tableEvents["public.estado"] = new eventsBase;
$tdatapublic_estado[".hasEvents"] = false;

?>