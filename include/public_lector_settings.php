<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_lector = array();
	$tdatapublic_lector[".truncateText"] = true;
	$tdatapublic_lector[".NumberOfChars"] = 80;
	$tdatapublic_lector[".ShortName"] = "public_lector";
	$tdatapublic_lector[".OwnerID"] = "";
	$tdatapublic_lector[".OriginalTable"] = "public.lector";

//	field labels
$fieldLabelspublic_lector = array();
$fieldToolTipspublic_lector = array();
$pageTitlespublic_lector = array();
$placeHolderspublic_lector = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_lector["Spanish"] = array();
	$fieldToolTipspublic_lector["Spanish"] = array();
	$placeHolderspublic_lector["Spanish"] = array();
	$pageTitlespublic_lector["Spanish"] = array();
	$fieldLabelspublic_lector["Spanish"]["idlector"] = "Idlector";
	$fieldToolTipspublic_lector["Spanish"]["idlector"] = "";
	$placeHolderspublic_lector["Spanish"]["idlector"] = "";
	$fieldLabelspublic_lector["Spanish"]["nombrelector"] = "Nombrelector";
	$fieldToolTipspublic_lector["Spanish"]["nombrelector"] = "";
	$placeHolderspublic_lector["Spanish"]["nombrelector"] = "";
	$fieldLabelspublic_lector["Spanish"]["direcciom"] = "Direcciom";
	$fieldToolTipspublic_lector["Spanish"]["direcciom"] = "";
	$placeHolderspublic_lector["Spanish"]["direcciom"] = "";
	$fieldLabelspublic_lector["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipspublic_lector["Spanish"]["telefono"] = "";
	$placeHolderspublic_lector["Spanish"]["telefono"] = "";
	$fieldLabelspublic_lector["Spanish"]["email"] = "Email";
	$fieldToolTipspublic_lector["Spanish"]["email"] = "";
	$placeHolderspublic_lector["Spanish"]["email"] = "";
	$fieldLabelspublic_lector["Spanish"]["fechaingreso"] = "Fechaingreso";
	$fieldToolTipspublic_lector["Spanish"]["fechaingreso"] = "";
	$placeHolderspublic_lector["Spanish"]["fechaingreso"] = "";
	if (count($fieldToolTipspublic_lector["Spanish"]))
		$tdatapublic_lector[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_lector[""] = array();
	$fieldToolTipspublic_lector[""] = array();
	$placeHolderspublic_lector[""] = array();
	$pageTitlespublic_lector[""] = array();
	if (count($fieldToolTipspublic_lector[""]))
		$tdatapublic_lector[".isUseToolTips"] = true;
}


	$tdatapublic_lector[".NCSearch"] = true;



$tdatapublic_lector[".shortTableName"] = "public_lector";
$tdatapublic_lector[".nSecOptions"] = 0;
$tdatapublic_lector[".recsPerRowPrint"] = 1;
$tdatapublic_lector[".mainTableOwnerID"] = "";
$tdatapublic_lector[".moveNext"] = 1;
$tdatapublic_lector[".entityType"] = 0;

$tdatapublic_lector[".strOriginalTableName"] = "public.lector";

	



$tdatapublic_lector[".showAddInPopup"] = false;

$tdatapublic_lector[".showEditInPopup"] = false;

$tdatapublic_lector[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_lector[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_lector[".fieldsForRegister"] = array();

$tdatapublic_lector[".listAjax"] = false;

	$tdatapublic_lector[".audit"] = false;

	$tdatapublic_lector[".locking"] = false;

$tdatapublic_lector[".edit"] = true;
$tdatapublic_lector[".afterEditAction"] = 1;
$tdatapublic_lector[".closePopupAfterEdit"] = 1;
$tdatapublic_lector[".afterEditActionDetTable"] = "";

$tdatapublic_lector[".add"] = true;
$tdatapublic_lector[".afterAddAction"] = 1;
$tdatapublic_lector[".closePopupAfterAdd"] = 1;
$tdatapublic_lector[".afterAddActionDetTable"] = "";

$tdatapublic_lector[".list"] = true;



$tdatapublic_lector[".reorderRecordsByHeader"] = true;



$tdatapublic_lector[".view"] = true;

$tdatapublic_lector[".import"] = true;

$tdatapublic_lector[".exportTo"] = true;

$tdatapublic_lector[".printFriendly"] = true;

$tdatapublic_lector[".delete"] = true;

$tdatapublic_lector[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_lector[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_lector[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_lector[".searchSaving"] = false;
//

$tdatapublic_lector[".showSearchPanel"] = true;
		$tdatapublic_lector[".flexibleSearch"] = true;

$tdatapublic_lector[".isUseAjaxSuggest"] = true;

$tdatapublic_lector[".rowHighlite"] = true;





$tdatapublic_lector[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_lector[".buttonsAdded"] = false;

$tdatapublic_lector[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_lector[".isUseTimeForSearch"] = false;





$tdatapublic_lector[".allSearchFields"] = array();
$tdatapublic_lector[".filterFields"] = array();
$tdatapublic_lector[".requiredSearchFields"] = array();

$tdatapublic_lector[".allSearchFields"][] = "idlector";
	$tdatapublic_lector[".allSearchFields"][] = "nombrelector";
	$tdatapublic_lector[".allSearchFields"][] = "direcciom";
	$tdatapublic_lector[".allSearchFields"][] = "telefono";
	$tdatapublic_lector[".allSearchFields"][] = "email";
	$tdatapublic_lector[".allSearchFields"][] = "fechaingreso";
	

$tdatapublic_lector[".googleLikeFields"] = array();
$tdatapublic_lector[".googleLikeFields"][] = "idlector";
$tdatapublic_lector[".googleLikeFields"][] = "nombrelector";
$tdatapublic_lector[".googleLikeFields"][] = "direcciom";
$tdatapublic_lector[".googleLikeFields"][] = "telefono";
$tdatapublic_lector[".googleLikeFields"][] = "email";
$tdatapublic_lector[".googleLikeFields"][] = "fechaingreso";


$tdatapublic_lector[".advSearchFields"] = array();
$tdatapublic_lector[".advSearchFields"][] = "idlector";
$tdatapublic_lector[".advSearchFields"][] = "nombrelector";
$tdatapublic_lector[".advSearchFields"][] = "direcciom";
$tdatapublic_lector[".advSearchFields"][] = "telefono";
$tdatapublic_lector[".advSearchFields"][] = "email";
$tdatapublic_lector[".advSearchFields"][] = "fechaingreso";

$tdatapublic_lector[".tableType"] = "list";

$tdatapublic_lector[".printerPageOrientation"] = 0;
$tdatapublic_lector[".nPrinterPageScale"] = 100;

$tdatapublic_lector[".nPrinterSplitRecords"] = 40;

$tdatapublic_lector[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_lector[".geocodingEnabled"] = false;





$tdatapublic_lector[".listGridLayout"] = 3;





// view page pdf
$tdatapublic_lector[".isViewPagePDF"] = true;
$tdatapublic_lector[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapublic_lector[".isPrinterPagePDF"] = true;
$tdatapublic_lector[".nPrinterPagePDFScale"] = 100;


$tdatapublic_lector[".pageSize"] = 20;

$tdatapublic_lector[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_lector[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_lector[".orderindexes"] = array();

$tdatapublic_lector[".sqlHead"] = "SELECT idlector,  	nombrelector,  	direcciom,  	telefono,  	email,  	fechaingreso";
$tdatapublic_lector[".sqlFrom"] = "FROM \"public\".lector";
$tdatapublic_lector[".sqlWhereExpr"] = "";
$tdatapublic_lector[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_lector[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_lector[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_lector[".highlightSearchResults"] = true;

$tableKeyspublic_lector = array();
$tableKeyspublic_lector[] = "idlector";
$tdatapublic_lector[".Keys"] = $tableKeyspublic_lector;

$tdatapublic_lector[".listFields"] = array();
$tdatapublic_lector[".listFields"][] = "idlector";
$tdatapublic_lector[".listFields"][] = "nombrelector";
$tdatapublic_lector[".listFields"][] = "direcciom";
$tdatapublic_lector[".listFields"][] = "telefono";
$tdatapublic_lector[".listFields"][] = "email";
$tdatapublic_lector[".listFields"][] = "fechaingreso";

$tdatapublic_lector[".hideMobileList"] = array();


$tdatapublic_lector[".viewFields"] = array();
$tdatapublic_lector[".viewFields"][] = "idlector";
$tdatapublic_lector[".viewFields"][] = "nombrelector";
$tdatapublic_lector[".viewFields"][] = "direcciom";
$tdatapublic_lector[".viewFields"][] = "telefono";
$tdatapublic_lector[".viewFields"][] = "email";
$tdatapublic_lector[".viewFields"][] = "fechaingreso";

$tdatapublic_lector[".addFields"] = array();
$tdatapublic_lector[".addFields"][] = "nombrelector";
$tdatapublic_lector[".addFields"][] = "direcciom";
$tdatapublic_lector[".addFields"][] = "telefono";
$tdatapublic_lector[".addFields"][] = "email";
$tdatapublic_lector[".addFields"][] = "fechaingreso";

$tdatapublic_lector[".masterListFields"] = array();
$tdatapublic_lector[".masterListFields"][] = "idlector";
$tdatapublic_lector[".masterListFields"][] = "nombrelector";
$tdatapublic_lector[".masterListFields"][] = "direcciom";
$tdatapublic_lector[".masterListFields"][] = "telefono";
$tdatapublic_lector[".masterListFields"][] = "email";
$tdatapublic_lector[".masterListFields"][] = "fechaingreso";

$tdatapublic_lector[".inlineAddFields"] = array();

$tdatapublic_lector[".editFields"] = array();
$tdatapublic_lector[".editFields"][] = "nombrelector";
$tdatapublic_lector[".editFields"][] = "direcciom";
$tdatapublic_lector[".editFields"][] = "telefono";
$tdatapublic_lector[".editFields"][] = "email";
$tdatapublic_lector[".editFields"][] = "fechaingreso";

$tdatapublic_lector[".inlineEditFields"] = array();

$tdatapublic_lector[".updateSelectedFields"] = array();
$tdatapublic_lector[".updateSelectedFields"][] = "nombrelector";
$tdatapublic_lector[".updateSelectedFields"][] = "direcciom";
$tdatapublic_lector[".updateSelectedFields"][] = "telefono";
$tdatapublic_lector[".updateSelectedFields"][] = "email";
$tdatapublic_lector[".updateSelectedFields"][] = "fechaingreso";


$tdatapublic_lector[".exportFields"] = array();
$tdatapublic_lector[".exportFields"][] = "idlector";
$tdatapublic_lector[".exportFields"][] = "nombrelector";
$tdatapublic_lector[".exportFields"][] = "direcciom";
$tdatapublic_lector[".exportFields"][] = "telefono";
$tdatapublic_lector[".exportFields"][] = "email";
$tdatapublic_lector[".exportFields"][] = "fechaingreso";

$tdatapublic_lector[".importFields"] = array();
$tdatapublic_lector[".importFields"][] = "idlector";
$tdatapublic_lector[".importFields"][] = "nombrelector";
$tdatapublic_lector[".importFields"][] = "direcciom";
$tdatapublic_lector[".importFields"][] = "telefono";
$tdatapublic_lector[".importFields"][] = "email";
$tdatapublic_lector[".importFields"][] = "fechaingreso";

$tdatapublic_lector[".printFields"] = array();
$tdatapublic_lector[".printFields"][] = "idlector";
$tdatapublic_lector[".printFields"][] = "nombrelector";
$tdatapublic_lector[".printFields"][] = "direcciom";
$tdatapublic_lector[".printFields"][] = "telefono";
$tdatapublic_lector[".printFields"][] = "email";
$tdatapublic_lector[".printFields"][] = "fechaingreso";

//	idlector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idlector";
	$fdata["GoodName"] = "idlector";
	$fdata["ownerTable"] = "public.lector";
	$fdata["Label"] = GetFieldLabel("public_lector","idlector");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idlector";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idlector";

	
	
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




	$tdatapublic_lector["idlector"] = $fdata;
//	nombrelector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombrelector";
	$fdata["GoodName"] = "nombrelector";
	$fdata["ownerTable"] = "public.lector";
	$fdata["Label"] = GetFieldLabel("public_lector","nombrelector");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nombrelector";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombrelector";

	
	
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




	$tdatapublic_lector["nombrelector"] = $fdata;
//	direcciom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "direcciom";
	$fdata["GoodName"] = "direcciom";
	$fdata["ownerTable"] = "public.lector";
	$fdata["Label"] = GetFieldLabel("public_lector","direcciom");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "direcciom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direcciom";

	
	
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




	$tdatapublic_lector["direcciom"] = $fdata;
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "public.lector";
	$fdata["Label"] = GetFieldLabel("public_lector","telefono");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "telefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";

	
	
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




	$tdatapublic_lector["telefono"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.lector";
	$fdata["Label"] = GetFieldLabel("public_lector","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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




	$tdatapublic_lector["email"] = $fdata;
//	fechaingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fechaingreso";
	$fdata["GoodName"] = "fechaingreso";
	$fdata["ownerTable"] = "public.lector";
	$fdata["Label"] = GetFieldLabel("public_lector","fechaingreso");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fechaingreso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechaingreso";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatapublic_lector["fechaingreso"] = $fdata;


$tables_data["public.lector"]=&$tdatapublic_lector;
$field_labels["public_lector"] = &$fieldLabelspublic_lector;
$fieldToolTips["public_lector"] = &$fieldToolTipspublic_lector;
$placeHolders["public_lector"] = &$placeHolderspublic_lector;
$page_titles["public_lector"] = &$pageTitlespublic_lector;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.lector"] = array();
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
		
	$detailsTablesData["public.lector"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lector"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lector"][$dIndex]["masterKeys"][]="idlector";

				$detailsTablesData["public.lector"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lector"][$dIndex]["detailKeys"][]="idlector";

// tables which are master tables for current table (detail)
$masterTablesData["public.lector"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_lector()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idlector,  	nombrelector,  	direcciom,  	telefono,  	email,  	fechaingreso";
$proto0["m_strFrom"] = "FROM \"public\".lector";
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
	"m_strName" => "idlector",
	"m_strTable" => "public.lector",
	"m_srcTableName" => "public.lector"
));

$proto6["m_sql"] = "idlector";
$proto6["m_srcTableName"] = "public.lector";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombrelector",
	"m_strTable" => "public.lector",
	"m_srcTableName" => "public.lector"
));

$proto8["m_sql"] = "nombrelector";
$proto8["m_srcTableName"] = "public.lector";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "direcciom",
	"m_strTable" => "public.lector",
	"m_srcTableName" => "public.lector"
));

$proto10["m_sql"] = "direcciom";
$proto10["m_srcTableName"] = "public.lector";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "public.lector",
	"m_srcTableName" => "public.lector"
));

$proto12["m_sql"] = "telefono";
$proto12["m_srcTableName"] = "public.lector";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.lector",
	"m_srcTableName" => "public.lector"
));

$proto14["m_sql"] = "email";
$proto14["m_srcTableName"] = "public.lector";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fechaingreso",
	"m_strTable" => "public.lector",
	"m_srcTableName" => "public.lector"
));

$proto16["m_sql"] = "fechaingreso";
$proto16["m_srcTableName"] = "public.lector";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.lector";
$proto19["m_srcTableName"] = "public.lector";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idlector";
$proto19["m_columns"][] = "nombrelector";
$proto19["m_columns"][] = "direcciom";
$proto19["m_columns"][] = "telefono";
$proto19["m_columns"][] = "email";
$proto19["m_columns"][] = "fechaingreso";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".lector";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.lector";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lector";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_lector = createSqlQuery_public_lector();


	
		;

						

$tdatapublic_lector[".sqlquery"] = $queryData_public_lector;

$tableEvents["public.lector"] = new eventsBase;
$tdatapublic_lector[".hasEvents"] = false;

?>