<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_libro = array();
	$tdatapublic_libro[".truncateText"] = true;
	$tdatapublic_libro[".NumberOfChars"] = 80;
	$tdatapublic_libro[".ShortName"] = "public_libro";
	$tdatapublic_libro[".OwnerID"] = "";
	$tdatapublic_libro[".OriginalTable"] = "public.libro";

//	field labels
$fieldLabelspublic_libro = array();
$fieldToolTipspublic_libro = array();
$pageTitlespublic_libro = array();
$placeHolderspublic_libro = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_libro["Spanish"] = array();
	$fieldToolTipspublic_libro["Spanish"] = array();
	$placeHolderspublic_libro["Spanish"] = array();
	$pageTitlespublic_libro["Spanish"] = array();
	$fieldLabelspublic_libro["Spanish"]["idlibro"] = "Idlibro";
	$fieldToolTipspublic_libro["Spanish"]["idlibro"] = "";
	$placeHolderspublic_libro["Spanish"]["idlibro"] = "";
	$fieldLabelspublic_libro["Spanish"]["tituulo"] = "Tituulo";
	$fieldToolTipspublic_libro["Spanish"]["tituulo"] = "";
	$placeHolderspublic_libro["Spanish"]["tituulo"] = "";
	$fieldLabelspublic_libro["Spanish"]["subtitulo"] = "Subtitulo";
	$fieldToolTipspublic_libro["Spanish"]["subtitulo"] = "";
	$placeHolderspublic_libro["Spanish"]["subtitulo"] = "";
	$fieldLabelspublic_libro["Spanish"]["edicion"] = "Edicion";
	$fieldToolTipspublic_libro["Spanish"]["edicion"] = "";
	$placeHolderspublic_libro["Spanish"]["edicion"] = "";
	$fieldLabelspublic_libro["Spanish"]["paginas"] = "Paginas";
	$fieldToolTipspublic_libro["Spanish"]["paginas"] = "";
	$placeHolderspublic_libro["Spanish"]["paginas"] = "";
	$fieldLabelspublic_libro["Spanish"]["cod"] = "Cod";
	$fieldToolTipspublic_libro["Spanish"]["cod"] = "";
	$placeHolderspublic_libro["Spanish"]["cod"] = "";
	$fieldLabelspublic_libro["Spanish"]["ideditorial"] = "Ideditorial";
	$fieldToolTipspublic_libro["Spanish"]["ideditorial"] = "";
	$placeHolderspublic_libro["Spanish"]["ideditorial"] = "";
	$fieldLabelspublic_libro["Spanish"]["idautor"] = "Idautor";
	$fieldToolTipspublic_libro["Spanish"]["idautor"] = "";
	$placeHolderspublic_libro["Spanish"]["idautor"] = "";
	$fieldLabelspublic_libro["Spanish"]["idtema"] = "Idtema";
	$fieldToolTipspublic_libro["Spanish"]["idtema"] = "";
	$placeHolderspublic_libro["Spanish"]["idtema"] = "";
	$fieldLabelspublic_libro["Spanish"]["ididioma"] = "Ididioma";
	$fieldToolTipspublic_libro["Spanish"]["ididioma"] = "";
	$placeHolderspublic_libro["Spanish"]["ididioma"] = "";
	if (count($fieldToolTipspublic_libro["Spanish"]))
		$tdatapublic_libro[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_libro[""] = array();
	$fieldToolTipspublic_libro[""] = array();
	$placeHolderspublic_libro[""] = array();
	$pageTitlespublic_libro[""] = array();
	if (count($fieldToolTipspublic_libro[""]))
		$tdatapublic_libro[".isUseToolTips"] = true;
}


	$tdatapublic_libro[".NCSearch"] = true;



$tdatapublic_libro[".shortTableName"] = "public_libro";
$tdatapublic_libro[".nSecOptions"] = 0;
$tdatapublic_libro[".recsPerRowPrint"] = 1;
$tdatapublic_libro[".mainTableOwnerID"] = "";
$tdatapublic_libro[".moveNext"] = 1;
$tdatapublic_libro[".entityType"] = 0;

$tdatapublic_libro[".strOriginalTableName"] = "public.libro";

	



$tdatapublic_libro[".showAddInPopup"] = false;

$tdatapublic_libro[".showEditInPopup"] = false;

$tdatapublic_libro[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_libro[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_libro[".fieldsForRegister"] = array();

$tdatapublic_libro[".listAjax"] = false;

	$tdatapublic_libro[".audit"] = false;

	$tdatapublic_libro[".locking"] = false;

$tdatapublic_libro[".edit"] = true;
$tdatapublic_libro[".afterEditAction"] = 1;
$tdatapublic_libro[".closePopupAfterEdit"] = 1;
$tdatapublic_libro[".afterEditActionDetTable"] = "";

$tdatapublic_libro[".add"] = true;
$tdatapublic_libro[".afterAddAction"] = 1;
$tdatapublic_libro[".closePopupAfterAdd"] = 1;
$tdatapublic_libro[".afterAddActionDetTable"] = "";

$tdatapublic_libro[".list"] = true;



$tdatapublic_libro[".reorderRecordsByHeader"] = true;



$tdatapublic_libro[".view"] = true;

$tdatapublic_libro[".import"] = true;

$tdatapublic_libro[".exportTo"] = true;

$tdatapublic_libro[".printFriendly"] = true;

$tdatapublic_libro[".delete"] = true;

$tdatapublic_libro[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_libro[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_libro[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_libro[".searchSaving"] = false;
//

$tdatapublic_libro[".showSearchPanel"] = true;
		$tdatapublic_libro[".flexibleSearch"] = true;

$tdatapublic_libro[".isUseAjaxSuggest"] = true;

$tdatapublic_libro[".rowHighlite"] = true;





$tdatapublic_libro[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_libro[".buttonsAdded"] = false;

$tdatapublic_libro[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_libro[".isUseTimeForSearch"] = false;





$tdatapublic_libro[".allSearchFields"] = array();
$tdatapublic_libro[".filterFields"] = array();
$tdatapublic_libro[".requiredSearchFields"] = array();

$tdatapublic_libro[".allSearchFields"][] = "idlibro";
	$tdatapublic_libro[".allSearchFields"][] = "tituulo";
	$tdatapublic_libro[".allSearchFields"][] = "subtitulo";
	$tdatapublic_libro[".allSearchFields"][] = "edicion";
	$tdatapublic_libro[".allSearchFields"][] = "paginas";
	$tdatapublic_libro[".allSearchFields"][] = "cod";
	$tdatapublic_libro[".allSearchFields"][] = "ideditorial";
	$tdatapublic_libro[".allSearchFields"][] = "idautor";
	$tdatapublic_libro[".allSearchFields"][] = "idtema";
	$tdatapublic_libro[".allSearchFields"][] = "ididioma";
	

$tdatapublic_libro[".googleLikeFields"] = array();
$tdatapublic_libro[".googleLikeFields"][] = "idlibro";
$tdatapublic_libro[".googleLikeFields"][] = "tituulo";
$tdatapublic_libro[".googleLikeFields"][] = "subtitulo";
$tdatapublic_libro[".googleLikeFields"][] = "edicion";
$tdatapublic_libro[".googleLikeFields"][] = "paginas";
$tdatapublic_libro[".googleLikeFields"][] = "cod";
$tdatapublic_libro[".googleLikeFields"][] = "ideditorial";
$tdatapublic_libro[".googleLikeFields"][] = "idautor";
$tdatapublic_libro[".googleLikeFields"][] = "idtema";
$tdatapublic_libro[".googleLikeFields"][] = "ididioma";


$tdatapublic_libro[".advSearchFields"] = array();
$tdatapublic_libro[".advSearchFields"][] = "idlibro";
$tdatapublic_libro[".advSearchFields"][] = "tituulo";
$tdatapublic_libro[".advSearchFields"][] = "subtitulo";
$tdatapublic_libro[".advSearchFields"][] = "edicion";
$tdatapublic_libro[".advSearchFields"][] = "paginas";
$tdatapublic_libro[".advSearchFields"][] = "cod";
$tdatapublic_libro[".advSearchFields"][] = "ideditorial";
$tdatapublic_libro[".advSearchFields"][] = "idautor";
$tdatapublic_libro[".advSearchFields"][] = "idtema";
$tdatapublic_libro[".advSearchFields"][] = "ididioma";

$tdatapublic_libro[".tableType"] = "list";

$tdatapublic_libro[".printerPageOrientation"] = 0;
$tdatapublic_libro[".nPrinterPageScale"] = 100;

$tdatapublic_libro[".nPrinterSplitRecords"] = 40;

$tdatapublic_libro[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_libro[".geocodingEnabled"] = false;





$tdatapublic_libro[".listGridLayout"] = 3;





// view page pdf
$tdatapublic_libro[".isViewPagePDF"] = true;
$tdatapublic_libro[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapublic_libro[".isPrinterPagePDF"] = true;
$tdatapublic_libro[".nPrinterPagePDFScale"] = 100;


$tdatapublic_libro[".pageSize"] = 20;

$tdatapublic_libro[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_libro[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_libro[".orderindexes"] = array();

$tdatapublic_libro[".sqlHead"] = "SELECT idlibro,  	tituulo,  	subtitulo,  	edicion,  	paginas,  	cod,  	ideditorial,  	idautor,  	idtema,  	ididioma";
$tdatapublic_libro[".sqlFrom"] = "FROM \"public\".libro";
$tdatapublic_libro[".sqlWhereExpr"] = "";
$tdatapublic_libro[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_libro[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_libro[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_libro[".highlightSearchResults"] = true;

$tableKeyspublic_libro = array();
$tableKeyspublic_libro[] = "idlibro";
$tdatapublic_libro[".Keys"] = $tableKeyspublic_libro;

$tdatapublic_libro[".listFields"] = array();
$tdatapublic_libro[".listFields"][] = "idlibro";
$tdatapublic_libro[".listFields"][] = "tituulo";
$tdatapublic_libro[".listFields"][] = "subtitulo";
$tdatapublic_libro[".listFields"][] = "edicion";
$tdatapublic_libro[".listFields"][] = "paginas";
$tdatapublic_libro[".listFields"][] = "cod";
$tdatapublic_libro[".listFields"][] = "ideditorial";
$tdatapublic_libro[".listFields"][] = "idautor";
$tdatapublic_libro[".listFields"][] = "idtema";
$tdatapublic_libro[".listFields"][] = "ididioma";

$tdatapublic_libro[".hideMobileList"] = array();


$tdatapublic_libro[".viewFields"] = array();
$tdatapublic_libro[".viewFields"][] = "idlibro";
$tdatapublic_libro[".viewFields"][] = "tituulo";
$tdatapublic_libro[".viewFields"][] = "subtitulo";
$tdatapublic_libro[".viewFields"][] = "edicion";
$tdatapublic_libro[".viewFields"][] = "paginas";
$tdatapublic_libro[".viewFields"][] = "cod";
$tdatapublic_libro[".viewFields"][] = "ideditorial";
$tdatapublic_libro[".viewFields"][] = "idautor";
$tdatapublic_libro[".viewFields"][] = "idtema";
$tdatapublic_libro[".viewFields"][] = "ididioma";

$tdatapublic_libro[".addFields"] = array();
$tdatapublic_libro[".addFields"][] = "tituulo";
$tdatapublic_libro[".addFields"][] = "subtitulo";
$tdatapublic_libro[".addFields"][] = "edicion";
$tdatapublic_libro[".addFields"][] = "paginas";
$tdatapublic_libro[".addFields"][] = "cod";
$tdatapublic_libro[".addFields"][] = "ideditorial";
$tdatapublic_libro[".addFields"][] = "idautor";
$tdatapublic_libro[".addFields"][] = "idtema";
$tdatapublic_libro[".addFields"][] = "ididioma";

$tdatapublic_libro[".masterListFields"] = array();
$tdatapublic_libro[".masterListFields"][] = "idlibro";
$tdatapublic_libro[".masterListFields"][] = "tituulo";
$tdatapublic_libro[".masterListFields"][] = "subtitulo";
$tdatapublic_libro[".masterListFields"][] = "edicion";
$tdatapublic_libro[".masterListFields"][] = "paginas";
$tdatapublic_libro[".masterListFields"][] = "cod";
$tdatapublic_libro[".masterListFields"][] = "ideditorial";
$tdatapublic_libro[".masterListFields"][] = "idautor";
$tdatapublic_libro[".masterListFields"][] = "idtema";
$tdatapublic_libro[".masterListFields"][] = "ididioma";

$tdatapublic_libro[".inlineAddFields"] = array();

$tdatapublic_libro[".editFields"] = array();
$tdatapublic_libro[".editFields"][] = "tituulo";
$tdatapublic_libro[".editFields"][] = "subtitulo";
$tdatapublic_libro[".editFields"][] = "edicion";
$tdatapublic_libro[".editFields"][] = "paginas";
$tdatapublic_libro[".editFields"][] = "cod";
$tdatapublic_libro[".editFields"][] = "ideditorial";
$tdatapublic_libro[".editFields"][] = "idautor";
$tdatapublic_libro[".editFields"][] = "idtema";
$tdatapublic_libro[".editFields"][] = "ididioma";

$tdatapublic_libro[".inlineEditFields"] = array();

$tdatapublic_libro[".updateSelectedFields"] = array();
$tdatapublic_libro[".updateSelectedFields"][] = "tituulo";
$tdatapublic_libro[".updateSelectedFields"][] = "subtitulo";
$tdatapublic_libro[".updateSelectedFields"][] = "edicion";
$tdatapublic_libro[".updateSelectedFields"][] = "paginas";
$tdatapublic_libro[".updateSelectedFields"][] = "cod";
$tdatapublic_libro[".updateSelectedFields"][] = "ideditorial";
$tdatapublic_libro[".updateSelectedFields"][] = "idautor";
$tdatapublic_libro[".updateSelectedFields"][] = "idtema";
$tdatapublic_libro[".updateSelectedFields"][] = "ididioma";


$tdatapublic_libro[".exportFields"] = array();
$tdatapublic_libro[".exportFields"][] = "idlibro";
$tdatapublic_libro[".exportFields"][] = "tituulo";
$tdatapublic_libro[".exportFields"][] = "subtitulo";
$tdatapublic_libro[".exportFields"][] = "edicion";
$tdatapublic_libro[".exportFields"][] = "paginas";
$tdatapublic_libro[".exportFields"][] = "cod";
$tdatapublic_libro[".exportFields"][] = "ideditorial";
$tdatapublic_libro[".exportFields"][] = "idautor";
$tdatapublic_libro[".exportFields"][] = "idtema";
$tdatapublic_libro[".exportFields"][] = "ididioma";

$tdatapublic_libro[".importFields"] = array();
$tdatapublic_libro[".importFields"][] = "idlibro";
$tdatapublic_libro[".importFields"][] = "tituulo";
$tdatapublic_libro[".importFields"][] = "subtitulo";
$tdatapublic_libro[".importFields"][] = "edicion";
$tdatapublic_libro[".importFields"][] = "paginas";
$tdatapublic_libro[".importFields"][] = "cod";
$tdatapublic_libro[".importFields"][] = "ideditorial";
$tdatapublic_libro[".importFields"][] = "idautor";
$tdatapublic_libro[".importFields"][] = "idtema";
$tdatapublic_libro[".importFields"][] = "ididioma";

$tdatapublic_libro[".printFields"] = array();
$tdatapublic_libro[".printFields"][] = "idlibro";
$tdatapublic_libro[".printFields"][] = "tituulo";
$tdatapublic_libro[".printFields"][] = "subtitulo";
$tdatapublic_libro[".printFields"][] = "edicion";
$tdatapublic_libro[".printFields"][] = "paginas";
$tdatapublic_libro[".printFields"][] = "cod";
$tdatapublic_libro[".printFields"][] = "ideditorial";
$tdatapublic_libro[".printFields"][] = "idautor";
$tdatapublic_libro[".printFields"][] = "idtema";
$tdatapublic_libro[".printFields"][] = "ididioma";

//	idlibro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idlibro";
	$fdata["GoodName"] = "idlibro";
	$fdata["ownerTable"] = "public.libro";
	$fdata["Label"] = GetFieldLabel("public_libro","idlibro");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapublic_libro["idlibro"] = $fdata;
//	tituulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tituulo";
	$fdata["GoodName"] = "tituulo";
	$fdata["ownerTable"] = "public.libro";
	$fdata["Label"] = GetFieldLabel("public_libro","tituulo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tituulo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tituulo";

	
	
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




	$tdatapublic_libro["tituulo"] = $fdata;
//	subtitulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "subtitulo";
	$fdata["GoodName"] = "subtitulo";
	$fdata["ownerTable"] = "public.libro";
	$fdata["Label"] = GetFieldLabel("public_libro","subtitulo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "subtitulo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subtitulo";

	
	
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




	$tdatapublic_libro["subtitulo"] = $fdata;
//	edicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "edicion";
	$fdata["GoodName"] = "edicion";
	$fdata["ownerTable"] = "public.libro";
	$fdata["Label"] = GetFieldLabel("public_libro","edicion");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "edicion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edicion";

	
	
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




	$tdatapublic_libro["edicion"] = $fdata;
//	paginas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "paginas";
	$fdata["GoodName"] = "paginas";
	$fdata["ownerTable"] = "public.libro";
	$fdata["Label"] = GetFieldLabel("public_libro","paginas");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "paginas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paginas";

	
	
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




	$tdatapublic_libro["paginas"] = $fdata;
//	cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cod";
	$fdata["GoodName"] = "cod";
	$fdata["ownerTable"] = "public.libro";
	$fdata["Label"] = GetFieldLabel("public_libro","cod");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod";

	
	
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




	$tdatapublic_libro["cod"] = $fdata;
//	ideditorial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ideditorial";
	$fdata["GoodName"] = "ideditorial";
	$fdata["ownerTable"] = "public.libro";
	$fdata["Label"] = GetFieldLabel("public_libro","ideditorial");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.editorial";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ideditorial";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "editorial";

	
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




	$tdatapublic_libro["ideditorial"] = $fdata;
//	idautor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idautor";
	$fdata["GoodName"] = "idautor";
	$fdata["ownerTable"] = "public.libro";
	$fdata["Label"] = GetFieldLabel("public_libro","idautor");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.autor";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idautor";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "autor";

	
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




	$tdatapublic_libro["idautor"] = $fdata;
//	idtema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "idtema";
	$fdata["GoodName"] = "idtema";
	$fdata["ownerTable"] = "public.libro";
	$fdata["Label"] = GetFieldLabel("public_libro","idtema");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.tema";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idtema";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "tema";

	
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




	$tdatapublic_libro["idtema"] = $fdata;
//	ididioma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ididioma";
	$fdata["GoodName"] = "ididioma";
	$fdata["ownerTable"] = "public.libro";
	$fdata["Label"] = GetFieldLabel("public_libro","ididioma");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.idioma";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ididioma";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "idioma";

	
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




	$tdatapublic_libro["ididioma"] = $fdata;


$tables_data["public.libro"]=&$tdatapublic_libro;
$field_labels["public_libro"] = &$fieldLabelspublic_libro;
$fieldToolTips["public_libro"] = &$fieldToolTipspublic_libro;
$placeHolders["public_libro"] = &$placeHolderspublic_libro;
$page_titles["public_libro"] = &$pageTitlespublic_libro;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.libro"] = array();
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
		
	$detailsTablesData["public.libro"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.libro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.libro"][$dIndex]["masterKeys"][]="idlibro";

				$detailsTablesData["public.libro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.libro"][$dIndex]["detailKeys"][]="idlibro";

// tables which are master tables for current table (detail)
$masterTablesData["public.libro"] = array();


	
				$strOriginalDetailsTable="public.editorial";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.editorial";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "public_editorial";
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
					$masterTablesData["public.libro"][0] = $masterParams;
				$masterTablesData["public.libro"][0]["masterKeys"] = array();
	$masterTablesData["public.libro"][0]["masterKeys"][]="ideditorial";
				$masterTablesData["public.libro"][0]["detailKeys"] = array();
	$masterTablesData["public.libro"][0]["detailKeys"][]="ideditorial";
		
	
				$strOriginalDetailsTable="public.idioma";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.idioma";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "public_idioma";
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
					$masterTablesData["public.libro"][1] = $masterParams;
				$masterTablesData["public.libro"][1]["masterKeys"] = array();
	$masterTablesData["public.libro"][1]["masterKeys"][]="ididioma";
				$masterTablesData["public.libro"][1]["detailKeys"] = array();
	$masterTablesData["public.libro"][1]["detailKeys"][]="ididioma";
		
	
				$strOriginalDetailsTable="public.autor";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.autor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "public_autor";
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
					$masterTablesData["public.libro"][2] = $masterParams;
				$masterTablesData["public.libro"][2]["masterKeys"] = array();
	$masterTablesData["public.libro"][2]["masterKeys"][]="idautor";
				$masterTablesData["public.libro"][2]["detailKeys"] = array();
	$masterTablesData["public.libro"][2]["detailKeys"][]="idautor";
		
	
				$strOriginalDetailsTable="public.tema";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.tema";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "public_tema";
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
					$masterTablesData["public.libro"][3] = $masterParams;
				$masterTablesData["public.libro"][3]["masterKeys"] = array();
	$masterTablesData["public.libro"][3]["masterKeys"][]="idtema";
				$masterTablesData["public.libro"][3]["detailKeys"] = array();
	$masterTablesData["public.libro"][3]["detailKeys"][]="idtema";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_libro()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idlibro,  	tituulo,  	subtitulo,  	edicion,  	paginas,  	cod,  	ideditorial,  	idautor,  	idtema,  	ididioma";
$proto0["m_strFrom"] = "FROM \"public\".libro";
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
	"m_strName" => "idlibro",
	"m_strTable" => "public.libro",
	"m_srcTableName" => "public.libro"
));

$proto6["m_sql"] = "idlibro";
$proto6["m_srcTableName"] = "public.libro";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tituulo",
	"m_strTable" => "public.libro",
	"m_srcTableName" => "public.libro"
));

$proto8["m_sql"] = "tituulo";
$proto8["m_srcTableName"] = "public.libro";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "subtitulo",
	"m_strTable" => "public.libro",
	"m_srcTableName" => "public.libro"
));

$proto10["m_sql"] = "subtitulo";
$proto10["m_srcTableName"] = "public.libro";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "edicion",
	"m_strTable" => "public.libro",
	"m_srcTableName" => "public.libro"
));

$proto12["m_sql"] = "edicion";
$proto12["m_srcTableName"] = "public.libro";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "paginas",
	"m_strTable" => "public.libro",
	"m_srcTableName" => "public.libro"
));

$proto14["m_sql"] = "paginas";
$proto14["m_srcTableName"] = "public.libro";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cod",
	"m_strTable" => "public.libro",
	"m_srcTableName" => "public.libro"
));

$proto16["m_sql"] = "cod";
$proto16["m_srcTableName"] = "public.libro";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ideditorial",
	"m_strTable" => "public.libro",
	"m_srcTableName" => "public.libro"
));

$proto18["m_sql"] = "ideditorial";
$proto18["m_srcTableName"] = "public.libro";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "idautor",
	"m_strTable" => "public.libro",
	"m_srcTableName" => "public.libro"
));

$proto20["m_sql"] = "idautor";
$proto20["m_srcTableName"] = "public.libro";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "idtema",
	"m_strTable" => "public.libro",
	"m_srcTableName" => "public.libro"
));

$proto22["m_sql"] = "idtema";
$proto22["m_srcTableName"] = "public.libro";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ididioma",
	"m_strTable" => "public.libro",
	"m_srcTableName" => "public.libro"
));

$proto24["m_sql"] = "ididioma";
$proto24["m_srcTableName"] = "public.libro";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "public.libro";
$proto27["m_srcTableName"] = "public.libro";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "idlibro";
$proto27["m_columns"][] = "tituulo";
$proto27["m_columns"][] = "subtitulo";
$proto27["m_columns"][] = "edicion";
$proto27["m_columns"][] = "paginas";
$proto27["m_columns"][] = "cod";
$proto27["m_columns"][] = "ideditorial";
$proto27["m_columns"][] = "idautor";
$proto27["m_columns"][] = "idtema";
$proto27["m_columns"][] = "ididioma";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "\"public\".libro";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "public.libro";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.libro";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_libro = createSqlQuery_public_libro();


	
		;

										

$tdatapublic_libro[".sqlquery"] = $queryData_public_libro;

$tableEvents["public.libro"] = new eventsBase;
$tdatapublic_libro[".hasEvents"] = false;

?>