<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_ejemplares = array();
	$tdatapublic_ejemplares[".truncateText"] = true;
	$tdatapublic_ejemplares[".NumberOfChars"] = 80;
	$tdatapublic_ejemplares[".ShortName"] = "public_ejemplares";
	$tdatapublic_ejemplares[".OwnerID"] = "";
	$tdatapublic_ejemplares[".OriginalTable"] = "public.ejemplares";

//	field labels
$fieldLabelspublic_ejemplares = array();
$fieldToolTipspublic_ejemplares = array();
$pageTitlespublic_ejemplares = array();
$placeHolderspublic_ejemplares = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_ejemplares["Spanish"] = array();
	$fieldToolTipspublic_ejemplares["Spanish"] = array();
	$placeHolderspublic_ejemplares["Spanish"] = array();
	$pageTitlespublic_ejemplares["Spanish"] = array();
	$fieldLabelspublic_ejemplares["Spanish"]["idejemplares"] = "Idejemplares";
	$fieldToolTipspublic_ejemplares["Spanish"]["idejemplares"] = "";
	$placeHolderspublic_ejemplares["Spanish"]["idejemplares"] = "";
	$fieldLabelspublic_ejemplares["Spanish"]["numero_ejemplar"] = "Numero Ejemplar";
	$fieldToolTipspublic_ejemplares["Spanish"]["numero_ejemplar"] = "";
	$placeHolderspublic_ejemplares["Spanish"]["numero_ejemplar"] = "";
	$fieldLabelspublic_ejemplares["Spanish"]["estado"] = "Estado";
	$fieldToolTipspublic_ejemplares["Spanish"]["estado"] = "";
	$placeHolderspublic_ejemplares["Spanish"]["estado"] = "";
	$fieldLabelspublic_ejemplares["Spanish"]["idlibro"] = "Idlibro";
	$fieldToolTipspublic_ejemplares["Spanish"]["idlibro"] = "";
	$placeHolderspublic_ejemplares["Spanish"]["idlibro"] = "";
	if (count($fieldToolTipspublic_ejemplares["Spanish"]))
		$tdatapublic_ejemplares[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_ejemplares[""] = array();
	$fieldToolTipspublic_ejemplares[""] = array();
	$placeHolderspublic_ejemplares[""] = array();
	$pageTitlespublic_ejemplares[""] = array();
	if (count($fieldToolTipspublic_ejemplares[""]))
		$tdatapublic_ejemplares[".isUseToolTips"] = true;
}


	$tdatapublic_ejemplares[".NCSearch"] = true;



$tdatapublic_ejemplares[".shortTableName"] = "public_ejemplares";
$tdatapublic_ejemplares[".nSecOptions"] = 0;
$tdatapublic_ejemplares[".recsPerRowPrint"] = 1;
$tdatapublic_ejemplares[".mainTableOwnerID"] = "";
$tdatapublic_ejemplares[".moveNext"] = 1;
$tdatapublic_ejemplares[".entityType"] = 0;

$tdatapublic_ejemplares[".strOriginalTableName"] = "public.ejemplares";

	



$tdatapublic_ejemplares[".showAddInPopup"] = false;

$tdatapublic_ejemplares[".showEditInPopup"] = false;

$tdatapublic_ejemplares[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_ejemplares[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_ejemplares[".fieldsForRegister"] = array();

$tdatapublic_ejemplares[".listAjax"] = false;

	$tdatapublic_ejemplares[".audit"] = false;

	$tdatapublic_ejemplares[".locking"] = false;

$tdatapublic_ejemplares[".edit"] = true;
$tdatapublic_ejemplares[".afterEditAction"] = 1;
$tdatapublic_ejemplares[".closePopupAfterEdit"] = 1;
$tdatapublic_ejemplares[".afterEditActionDetTable"] = "";

$tdatapublic_ejemplares[".add"] = true;
$tdatapublic_ejemplares[".afterAddAction"] = 1;
$tdatapublic_ejemplares[".closePopupAfterAdd"] = 1;
$tdatapublic_ejemplares[".afterAddActionDetTable"] = "";

$tdatapublic_ejemplares[".list"] = true;



$tdatapublic_ejemplares[".reorderRecordsByHeader"] = true;



$tdatapublic_ejemplares[".view"] = true;

$tdatapublic_ejemplares[".import"] = true;

$tdatapublic_ejemplares[".exportTo"] = true;

$tdatapublic_ejemplares[".printFriendly"] = true;

$tdatapublic_ejemplares[".delete"] = true;

$tdatapublic_ejemplares[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_ejemplares[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_ejemplares[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_ejemplares[".searchSaving"] = false;
//

$tdatapublic_ejemplares[".showSearchPanel"] = true;
		$tdatapublic_ejemplares[".flexibleSearch"] = true;

$tdatapublic_ejemplares[".isUseAjaxSuggest"] = true;

$tdatapublic_ejemplares[".rowHighlite"] = true;





$tdatapublic_ejemplares[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_ejemplares[".buttonsAdded"] = false;

$tdatapublic_ejemplares[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_ejemplares[".isUseTimeForSearch"] = false;



$tdatapublic_ejemplares[".badgeColor"] = "00C2C5";


$tdatapublic_ejemplares[".allSearchFields"] = array();
$tdatapublic_ejemplares[".filterFields"] = array();
$tdatapublic_ejemplares[".requiredSearchFields"] = array();

$tdatapublic_ejemplares[".allSearchFields"][] = "idejemplares";
	$tdatapublic_ejemplares[".allSearchFields"][] = "numero_ejemplar";
	$tdatapublic_ejemplares[".allSearchFields"][] = "estado";
	$tdatapublic_ejemplares[".allSearchFields"][] = "idlibro";
	

$tdatapublic_ejemplares[".googleLikeFields"] = array();
$tdatapublic_ejemplares[".googleLikeFields"][] = "idejemplares";
$tdatapublic_ejemplares[".googleLikeFields"][] = "numero_ejemplar";
$tdatapublic_ejemplares[".googleLikeFields"][] = "estado";
$tdatapublic_ejemplares[".googleLikeFields"][] = "idlibro";


$tdatapublic_ejemplares[".advSearchFields"] = array();
$tdatapublic_ejemplares[".advSearchFields"][] = "idejemplares";
$tdatapublic_ejemplares[".advSearchFields"][] = "numero_ejemplar";
$tdatapublic_ejemplares[".advSearchFields"][] = "estado";
$tdatapublic_ejemplares[".advSearchFields"][] = "idlibro";

$tdatapublic_ejemplares[".tableType"] = "list";

$tdatapublic_ejemplares[".printerPageOrientation"] = 0;
$tdatapublic_ejemplares[".nPrinterPageScale"] = 100;

$tdatapublic_ejemplares[".nPrinterSplitRecords"] = 40;

$tdatapublic_ejemplares[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_ejemplares[".geocodingEnabled"] = false;





$tdatapublic_ejemplares[".listGridLayout"] = 3;





// view page pdf
$tdatapublic_ejemplares[".isViewPagePDF"] = true;
$tdatapublic_ejemplares[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapublic_ejemplares[".isPrinterPagePDF"] = true;
$tdatapublic_ejemplares[".nPrinterPagePDFScale"] = 100;


$tdatapublic_ejemplares[".pageSize"] = 20;

$tdatapublic_ejemplares[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_ejemplares[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_ejemplares[".orderindexes"] = array();

$tdatapublic_ejemplares[".sqlHead"] = "SELECT idejemplares,  	numero_ejemplar,  	estado,  	idlibro";
$tdatapublic_ejemplares[".sqlFrom"] = "FROM \"public\".ejemplares";
$tdatapublic_ejemplares[".sqlWhereExpr"] = "";
$tdatapublic_ejemplares[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_ejemplares[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_ejemplares[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_ejemplares[".highlightSearchResults"] = true;

$tableKeyspublic_ejemplares = array();
$tableKeyspublic_ejemplares[] = "idejemplares";
$tdatapublic_ejemplares[".Keys"] = $tableKeyspublic_ejemplares;

$tdatapublic_ejemplares[".listFields"] = array();
$tdatapublic_ejemplares[".listFields"][] = "idejemplares";
$tdatapublic_ejemplares[".listFields"][] = "numero_ejemplar";
$tdatapublic_ejemplares[".listFields"][] = "estado";
$tdatapublic_ejemplares[".listFields"][] = "idlibro";

$tdatapublic_ejemplares[".hideMobileList"] = array();


$tdatapublic_ejemplares[".viewFields"] = array();
$tdatapublic_ejemplares[".viewFields"][] = "idejemplares";
$tdatapublic_ejemplares[".viewFields"][] = "numero_ejemplar";
$tdatapublic_ejemplares[".viewFields"][] = "estado";
$tdatapublic_ejemplares[".viewFields"][] = "idlibro";

$tdatapublic_ejemplares[".addFields"] = array();
$tdatapublic_ejemplares[".addFields"][] = "numero_ejemplar";
$tdatapublic_ejemplares[".addFields"][] = "estado";
$tdatapublic_ejemplares[".addFields"][] = "idlibro";

$tdatapublic_ejemplares[".masterListFields"] = array();
$tdatapublic_ejemplares[".masterListFields"][] = "idejemplares";
$tdatapublic_ejemplares[".masterListFields"][] = "numero_ejemplar";
$tdatapublic_ejemplares[".masterListFields"][] = "estado";
$tdatapublic_ejemplares[".masterListFields"][] = "idlibro";

$tdatapublic_ejemplares[".inlineAddFields"] = array();

$tdatapublic_ejemplares[".editFields"] = array();
$tdatapublic_ejemplares[".editFields"][] = "numero_ejemplar";
$tdatapublic_ejemplares[".editFields"][] = "estado";
$tdatapublic_ejemplares[".editFields"][] = "idlibro";

$tdatapublic_ejemplares[".inlineEditFields"] = array();

$tdatapublic_ejemplares[".updateSelectedFields"] = array();
$tdatapublic_ejemplares[".updateSelectedFields"][] = "numero_ejemplar";
$tdatapublic_ejemplares[".updateSelectedFields"][] = "estado";
$tdatapublic_ejemplares[".updateSelectedFields"][] = "idlibro";


$tdatapublic_ejemplares[".exportFields"] = array();
$tdatapublic_ejemplares[".exportFields"][] = "idejemplares";
$tdatapublic_ejemplares[".exportFields"][] = "numero_ejemplar";
$tdatapublic_ejemplares[".exportFields"][] = "estado";
$tdatapublic_ejemplares[".exportFields"][] = "idlibro";

$tdatapublic_ejemplares[".importFields"] = array();
$tdatapublic_ejemplares[".importFields"][] = "idejemplares";
$tdatapublic_ejemplares[".importFields"][] = "numero_ejemplar";
$tdatapublic_ejemplares[".importFields"][] = "estado";
$tdatapublic_ejemplares[".importFields"][] = "idlibro";

$tdatapublic_ejemplares[".printFields"] = array();
$tdatapublic_ejemplares[".printFields"][] = "idejemplares";
$tdatapublic_ejemplares[".printFields"][] = "numero_ejemplar";
$tdatapublic_ejemplares[".printFields"][] = "estado";
$tdatapublic_ejemplares[".printFields"][] = "idlibro";

//	idejemplares
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idejemplares";
	$fdata["GoodName"] = "idejemplares";
	$fdata["ownerTable"] = "public.ejemplares";
	$fdata["Label"] = GetFieldLabel("public_ejemplares","idejemplares");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idejemplares";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idejemplares";

	
	
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




	$tdatapublic_ejemplares["idejemplares"] = $fdata;
//	numero_ejemplar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "numero_ejemplar";
	$fdata["GoodName"] = "numero_ejemplar";
	$fdata["ownerTable"] = "public.ejemplares";
	$fdata["Label"] = GetFieldLabel("public_ejemplares","numero_ejemplar");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "numero_ejemplar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero_ejemplar";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapublic_ejemplares["numero_ejemplar"] = $fdata;
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "public.ejemplares";
	$fdata["Label"] = GetFieldLabel("public_ejemplares","estado");
	$fdata["FieldType"] = 3;

	
	
	
			
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.estado";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idestado";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idestado";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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




	$tdatapublic_ejemplares["estado"] = $fdata;
//	idlibro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idlibro";
	$fdata["GoodName"] = "idlibro";
	$fdata["ownerTable"] = "public.ejemplares";
	$fdata["Label"] = GetFieldLabel("public_ejemplares","idlibro");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idlibro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idlibro";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.libro";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idlibro";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "tituulo";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapublic_ejemplares["idlibro"] = $fdata;


$tables_data["public.ejemplares"]=&$tdatapublic_ejemplares;
$field_labels["public_ejemplares"] = &$fieldLabelspublic_ejemplares;
$fieldToolTips["public_ejemplares"] = &$fieldToolTipspublic_ejemplares;
$placeHolders["public_ejemplares"] = &$placeHolderspublic_ejemplares;
$page_titles["public_ejemplares"] = &$pageTitlespublic_ejemplares;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.ejemplares"] = array();
//	public.prestamo
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.prestamo";
		$detailsParam["dOriginalTable"] = "public.prestamo";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "public_prestamo";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_prestamo");
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
		
	$detailsTablesData["public.ejemplares"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.ejemplares"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.ejemplares"][$dIndex]["masterKeys"][]="idejemplares";

				$detailsTablesData["public.ejemplares"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.ejemplares"][$dIndex]["detailKeys"][]="idejemplar";

// tables which are master tables for current table (detail)
$masterTablesData["public.ejemplares"] = array();


	
				$strOriginalDetailsTable="public.estado";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.estado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "public_estado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.ejemplares"][0] = $masterParams;
				$masterTablesData["public.ejemplares"][0]["masterKeys"] = array();
	$masterTablesData["public.ejemplares"][0]["masterKeys"][]="idestado";
				$masterTablesData["public.ejemplares"][0]["detailKeys"] = array();
	$masterTablesData["public.ejemplares"][0]["detailKeys"][]="estado";
		
	
				$strOriginalDetailsTable="public.libro";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.libro";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "public_libro";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.ejemplares"][1] = $masterParams;
				$masterTablesData["public.ejemplares"][1]["masterKeys"] = array();
	$masterTablesData["public.ejemplares"][1]["masterKeys"][]="idlibro";
				$masterTablesData["public.ejemplares"][1]["detailKeys"] = array();
	$masterTablesData["public.ejemplares"][1]["detailKeys"][]="idlibro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_ejemplares()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idejemplares,  	numero_ejemplar,  	estado,  	idlibro";
$proto0["m_strFrom"] = "FROM \"public\".ejemplares";
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
	"m_strName" => "idejemplares",
	"m_strTable" => "public.ejemplares",
	"m_srcTableName" => "public.ejemplares"
));

$proto6["m_sql"] = "idejemplares";
$proto6["m_srcTableName"] = "public.ejemplares";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_ejemplar",
	"m_strTable" => "public.ejemplares",
	"m_srcTableName" => "public.ejemplares"
));

$proto8["m_sql"] = "numero_ejemplar";
$proto8["m_srcTableName"] = "public.ejemplares";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "public.ejemplares",
	"m_srcTableName" => "public.ejemplares"
));

$proto10["m_sql"] = "estado";
$proto10["m_srcTableName"] = "public.ejemplares";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idlibro",
	"m_strTable" => "public.ejemplares",
	"m_srcTableName" => "public.ejemplares"
));

$proto12["m_sql"] = "idlibro";
$proto12["m_srcTableName"] = "public.ejemplares";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.ejemplares";
$proto15["m_srcTableName"] = "public.ejemplares";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "idejemplares";
$proto15["m_columns"][] = "numero_ejemplar";
$proto15["m_columns"][] = "estado";
$proto15["m_columns"][] = "idlibro";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".ejemplares";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.ejemplares";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.ejemplares";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_ejemplares = createSqlQuery_public_ejemplares();


	
		;

				

$tdatapublic_ejemplares[".sqlquery"] = $queryData_public_ejemplares;

$tableEvents["public.ejemplares"] = new eventsBase;
$tdatapublic_ejemplares[".hasEvents"] = false;

?>