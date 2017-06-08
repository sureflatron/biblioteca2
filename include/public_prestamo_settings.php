<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_prestamo = array();
	$tdatapublic_prestamo[".truncateText"] = true;
	$tdatapublic_prestamo[".NumberOfChars"] = 80;
	$tdatapublic_prestamo[".ShortName"] = "public_prestamo";
	$tdatapublic_prestamo[".OwnerID"] = "";
	$tdatapublic_prestamo[".OriginalTable"] = "public.prestamo";

//	field labels
$fieldLabelspublic_prestamo = array();
$fieldToolTipspublic_prestamo = array();
$pageTitlespublic_prestamo = array();
$placeHolderspublic_prestamo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_prestamo["Spanish"] = array();
	$fieldToolTipspublic_prestamo["Spanish"] = array();
	$placeHolderspublic_prestamo["Spanish"] = array();
	$pageTitlespublic_prestamo["Spanish"] = array();
	$fieldLabelspublic_prestamo["Spanish"]["idprestamo"] = "Idprestamo";
	$fieldToolTipspublic_prestamo["Spanish"]["idprestamo"] = "";
	$placeHolderspublic_prestamo["Spanish"]["idprestamo"] = "";
	$fieldLabelspublic_prestamo["Spanish"]["fecha_prestamo"] = "Fecha Prestamo";
	$fieldToolTipspublic_prestamo["Spanish"]["fecha_prestamo"] = "";
	$placeHolderspublic_prestamo["Spanish"]["fecha_prestamo"] = "";
	$fieldLabelspublic_prestamo["Spanish"]["fecha_devolucion"] = "Fecha Devolucion";
	$fieldToolTipspublic_prestamo["Spanish"]["fecha_devolucion"] = "";
	$placeHolderspublic_prestamo["Spanish"]["fecha_devolucion"] = "";
	$fieldLabelspublic_prestamo["Spanish"]["diasprestamo"] = "Diasprestamo";
	$fieldToolTipspublic_prestamo["Spanish"]["diasprestamo"] = "";
	$placeHolderspublic_prestamo["Spanish"]["diasprestamo"] = "";
	$fieldLabelspublic_prestamo["Spanish"]["idejemplar"] = "Idejemplar";
	$fieldToolTipspublic_prestamo["Spanish"]["idejemplar"] = "";
	$placeHolderspublic_prestamo["Spanish"]["idejemplar"] = "";
	$fieldLabelspublic_prestamo["Spanish"]["idlector"] = "Idlector";
	$fieldToolTipspublic_prestamo["Spanish"]["idlector"] = "";
	$placeHolderspublic_prestamo["Spanish"]["idlector"] = "";
	if (count($fieldToolTipspublic_prestamo["Spanish"]))
		$tdatapublic_prestamo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_prestamo[""] = array();
	$fieldToolTipspublic_prestamo[""] = array();
	$placeHolderspublic_prestamo[""] = array();
	$pageTitlespublic_prestamo[""] = array();
	if (count($fieldToolTipspublic_prestamo[""]))
		$tdatapublic_prestamo[".isUseToolTips"] = true;
}


	$tdatapublic_prestamo[".NCSearch"] = true;



$tdatapublic_prestamo[".shortTableName"] = "public_prestamo";
$tdatapublic_prestamo[".nSecOptions"] = 0;
$tdatapublic_prestamo[".recsPerRowPrint"] = 1;
$tdatapublic_prestamo[".mainTableOwnerID"] = "";
$tdatapublic_prestamo[".moveNext"] = 1;
$tdatapublic_prestamo[".entityType"] = 0;

$tdatapublic_prestamo[".strOriginalTableName"] = "public.prestamo";

	



$tdatapublic_prestamo[".showAddInPopup"] = false;

$tdatapublic_prestamo[".showEditInPopup"] = false;

$tdatapublic_prestamo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_prestamo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_prestamo[".fieldsForRegister"] = array();

$tdatapublic_prestamo[".listAjax"] = false;

	$tdatapublic_prestamo[".audit"] = false;

	$tdatapublic_prestamo[".locking"] = false;

$tdatapublic_prestamo[".edit"] = true;
$tdatapublic_prestamo[".afterEditAction"] = 1;
$tdatapublic_prestamo[".closePopupAfterEdit"] = 1;
$tdatapublic_prestamo[".afterEditActionDetTable"] = "";

$tdatapublic_prestamo[".add"] = true;
$tdatapublic_prestamo[".afterAddAction"] = 1;
$tdatapublic_prestamo[".closePopupAfterAdd"] = 1;
$tdatapublic_prestamo[".afterAddActionDetTable"] = "";

$tdatapublic_prestamo[".list"] = true;



$tdatapublic_prestamo[".reorderRecordsByHeader"] = true;



$tdatapublic_prestamo[".view"] = true;

$tdatapublic_prestamo[".import"] = true;

$tdatapublic_prestamo[".exportTo"] = true;

$tdatapublic_prestamo[".printFriendly"] = true;

$tdatapublic_prestamo[".delete"] = true;

$tdatapublic_prestamo[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_prestamo[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_prestamo[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_prestamo[".searchSaving"] = false;
//

$tdatapublic_prestamo[".showSearchPanel"] = true;
		$tdatapublic_prestamo[".flexibleSearch"] = true;

$tdatapublic_prestamo[".isUseAjaxSuggest"] = true;

$tdatapublic_prestamo[".rowHighlite"] = true;





$tdatapublic_prestamo[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_prestamo[".buttonsAdded"] = false;

$tdatapublic_prestamo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_prestamo[".isUseTimeForSearch"] = false;





$tdatapublic_prestamo[".allSearchFields"] = array();
$tdatapublic_prestamo[".filterFields"] = array();
$tdatapublic_prestamo[".requiredSearchFields"] = array();

$tdatapublic_prestamo[".allSearchFields"][] = "idprestamo";
	$tdatapublic_prestamo[".allSearchFields"][] = "fecha_prestamo";
	$tdatapublic_prestamo[".allSearchFields"][] = "fecha_devolucion";
	$tdatapublic_prestamo[".allSearchFields"][] = "diasprestamo";
	$tdatapublic_prestamo[".allSearchFields"][] = "idejemplar";
	$tdatapublic_prestamo[".allSearchFields"][] = "idlector";
	

$tdatapublic_prestamo[".googleLikeFields"] = array();
$tdatapublic_prestamo[".googleLikeFields"][] = "idprestamo";
$tdatapublic_prestamo[".googleLikeFields"][] = "fecha_prestamo";
$tdatapublic_prestamo[".googleLikeFields"][] = "fecha_devolucion";
$tdatapublic_prestamo[".googleLikeFields"][] = "diasprestamo";
$tdatapublic_prestamo[".googleLikeFields"][] = "idejemplar";
$tdatapublic_prestamo[".googleLikeFields"][] = "idlector";


$tdatapublic_prestamo[".advSearchFields"] = array();
$tdatapublic_prestamo[".advSearchFields"][] = "idprestamo";
$tdatapublic_prestamo[".advSearchFields"][] = "fecha_prestamo";
$tdatapublic_prestamo[".advSearchFields"][] = "fecha_devolucion";
$tdatapublic_prestamo[".advSearchFields"][] = "diasprestamo";
$tdatapublic_prestamo[".advSearchFields"][] = "idejemplar";
$tdatapublic_prestamo[".advSearchFields"][] = "idlector";

$tdatapublic_prestamo[".tableType"] = "list";

$tdatapublic_prestamo[".printerPageOrientation"] = 0;
$tdatapublic_prestamo[".nPrinterPageScale"] = 100;

$tdatapublic_prestamo[".nPrinterSplitRecords"] = 40;

$tdatapublic_prestamo[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_prestamo[".geocodingEnabled"] = false;





$tdatapublic_prestamo[".listGridLayout"] = 3;





// view page pdf
$tdatapublic_prestamo[".isViewPagePDF"] = true;
$tdatapublic_prestamo[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapublic_prestamo[".isPrinterPagePDF"] = true;
$tdatapublic_prestamo[".nPrinterPagePDFScale"] = 100;


$tdatapublic_prestamo[".pageSize"] = 20;

$tdatapublic_prestamo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_prestamo[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_prestamo[".orderindexes"] = array();

$tdatapublic_prestamo[".sqlHead"] = "SELECT idprestamo,  	fecha_prestamo,  	fecha_devolucion,  	diasprestamo,  	idejemplar,  	idlector";
$tdatapublic_prestamo[".sqlFrom"] = "FROM \"public\".prestamo";
$tdatapublic_prestamo[".sqlWhereExpr"] = "";
$tdatapublic_prestamo[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_prestamo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_prestamo[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_prestamo[".highlightSearchResults"] = true;

$tableKeyspublic_prestamo = array();
$tableKeyspublic_prestamo[] = "idprestamo";
$tdatapublic_prestamo[".Keys"] = $tableKeyspublic_prestamo;

$tdatapublic_prestamo[".listFields"] = array();
$tdatapublic_prestamo[".listFields"][] = "idprestamo";
$tdatapublic_prestamo[".listFields"][] = "fecha_prestamo";
$tdatapublic_prestamo[".listFields"][] = "fecha_devolucion";
$tdatapublic_prestamo[".listFields"][] = "diasprestamo";
$tdatapublic_prestamo[".listFields"][] = "idejemplar";
$tdatapublic_prestamo[".listFields"][] = "idlector";

$tdatapublic_prestamo[".hideMobileList"] = array();


$tdatapublic_prestamo[".viewFields"] = array();
$tdatapublic_prestamo[".viewFields"][] = "idprestamo";
$tdatapublic_prestamo[".viewFields"][] = "fecha_prestamo";
$tdatapublic_prestamo[".viewFields"][] = "fecha_devolucion";
$tdatapublic_prestamo[".viewFields"][] = "diasprestamo";
$tdatapublic_prestamo[".viewFields"][] = "idejemplar";
$tdatapublic_prestamo[".viewFields"][] = "idlector";

$tdatapublic_prestamo[".addFields"] = array();
$tdatapublic_prestamo[".addFields"][] = "fecha_prestamo";
$tdatapublic_prestamo[".addFields"][] = "fecha_devolucion";
$tdatapublic_prestamo[".addFields"][] = "diasprestamo";
$tdatapublic_prestamo[".addFields"][] = "idejemplar";
$tdatapublic_prestamo[".addFields"][] = "idlector";

$tdatapublic_prestamo[".masterListFields"] = array();
$tdatapublic_prestamo[".masterListFields"][] = "idprestamo";
$tdatapublic_prestamo[".masterListFields"][] = "fecha_prestamo";
$tdatapublic_prestamo[".masterListFields"][] = "fecha_devolucion";
$tdatapublic_prestamo[".masterListFields"][] = "diasprestamo";
$tdatapublic_prestamo[".masterListFields"][] = "idejemplar";
$tdatapublic_prestamo[".masterListFields"][] = "idlector";

$tdatapublic_prestamo[".inlineAddFields"] = array();

$tdatapublic_prestamo[".editFields"] = array();
$tdatapublic_prestamo[".editFields"][] = "fecha_prestamo";
$tdatapublic_prestamo[".editFields"][] = "fecha_devolucion";
$tdatapublic_prestamo[".editFields"][] = "diasprestamo";
$tdatapublic_prestamo[".editFields"][] = "idejemplar";
$tdatapublic_prestamo[".editFields"][] = "idlector";

$tdatapublic_prestamo[".inlineEditFields"] = array();

$tdatapublic_prestamo[".updateSelectedFields"] = array();
$tdatapublic_prestamo[".updateSelectedFields"][] = "fecha_prestamo";
$tdatapublic_prestamo[".updateSelectedFields"][] = "fecha_devolucion";
$tdatapublic_prestamo[".updateSelectedFields"][] = "diasprestamo";
$tdatapublic_prestamo[".updateSelectedFields"][] = "idejemplar";
$tdatapublic_prestamo[".updateSelectedFields"][] = "idlector";


$tdatapublic_prestamo[".exportFields"] = array();
$tdatapublic_prestamo[".exportFields"][] = "idprestamo";
$tdatapublic_prestamo[".exportFields"][] = "fecha_prestamo";
$tdatapublic_prestamo[".exportFields"][] = "fecha_devolucion";
$tdatapublic_prestamo[".exportFields"][] = "diasprestamo";
$tdatapublic_prestamo[".exportFields"][] = "idejemplar";
$tdatapublic_prestamo[".exportFields"][] = "idlector";

$tdatapublic_prestamo[".importFields"] = array();
$tdatapublic_prestamo[".importFields"][] = "idprestamo";
$tdatapublic_prestamo[".importFields"][] = "fecha_prestamo";
$tdatapublic_prestamo[".importFields"][] = "fecha_devolucion";
$tdatapublic_prestamo[".importFields"][] = "diasprestamo";
$tdatapublic_prestamo[".importFields"][] = "idejemplar";
$tdatapublic_prestamo[".importFields"][] = "idlector";

$tdatapublic_prestamo[".printFields"] = array();
$tdatapublic_prestamo[".printFields"][] = "idprestamo";
$tdatapublic_prestamo[".printFields"][] = "fecha_prestamo";
$tdatapublic_prestamo[".printFields"][] = "fecha_devolucion";
$tdatapublic_prestamo[".printFields"][] = "diasprestamo";
$tdatapublic_prestamo[".printFields"][] = "idejemplar";
$tdatapublic_prestamo[".printFields"][] = "idlector";

//	idprestamo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idprestamo";
	$fdata["GoodName"] = "idprestamo";
	$fdata["ownerTable"] = "public.prestamo";
	$fdata["Label"] = GetFieldLabel("public_prestamo","idprestamo");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idprestamo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idprestamo";

	
	
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




	$tdatapublic_prestamo["idprestamo"] = $fdata;
//	fecha_prestamo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_prestamo";
	$fdata["GoodName"] = "fecha_prestamo";
	$fdata["ownerTable"] = "public.prestamo";
	$fdata["Label"] = GetFieldLabel("public_prestamo","fecha_prestamo");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fecha_prestamo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_prestamo";

	
	
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




	$tdatapublic_prestamo["fecha_prestamo"] = $fdata;
//	fecha_devolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_devolucion";
	$fdata["GoodName"] = "fecha_devolucion";
	$fdata["ownerTable"] = "public.prestamo";
	$fdata["Label"] = GetFieldLabel("public_prestamo","fecha_devolucion");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fecha_devolucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_devolucion";

	
	
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




	$tdatapublic_prestamo["fecha_devolucion"] = $fdata;
//	diasprestamo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "diasprestamo";
	$fdata["GoodName"] = "diasprestamo";
	$fdata["ownerTable"] = "public.prestamo";
	$fdata["Label"] = GetFieldLabel("public_prestamo","diasprestamo");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "diasprestamo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diasprestamo";

	
	
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




	$tdatapublic_prestamo["diasprestamo"] = $fdata;
//	idejemplar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idejemplar";
	$fdata["GoodName"] = "idejemplar";
	$fdata["ownerTable"] = "public.prestamo";
	$fdata["Label"] = GetFieldLabel("public_prestamo","idejemplar");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idejemplar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idejemplar";

	
	
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
	$edata["LookupTable"] = "public.ejemplares";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idejemplares";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "numero_ejemplar";

	
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




	$tdatapublic_prestamo["idejemplar"] = $fdata;
//	idlector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "idlector";
	$fdata["GoodName"] = "idlector";
	$fdata["ownerTable"] = "public.prestamo";
	$fdata["Label"] = GetFieldLabel("public_prestamo","idlector");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.lector";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idlector";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombrelector";

	
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




	$tdatapublic_prestamo["idlector"] = $fdata;


$tables_data["public.prestamo"]=&$tdatapublic_prestamo;
$field_labels["public_prestamo"] = &$fieldLabelspublic_prestamo;
$fieldToolTips["public_prestamo"] = &$fieldToolTipspublic_prestamo;
$placeHolders["public_prestamo"] = &$placeHolderspublic_prestamo;
$page_titles["public_prestamo"] = &$pageTitlespublic_prestamo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.prestamo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.prestamo"] = array();


	
				$strOriginalDetailsTable="public.lector";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lector";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "public_lector";
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
					$masterTablesData["public.prestamo"][0] = $masterParams;
				$masterTablesData["public.prestamo"][0]["masterKeys"] = array();
	$masterTablesData["public.prestamo"][0]["masterKeys"][]="idlector";
				$masterTablesData["public.prestamo"][0]["detailKeys"] = array();
	$masterTablesData["public.prestamo"][0]["detailKeys"][]="idlector";
		
	
				$strOriginalDetailsTable="public.ejemplares";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.ejemplares";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "public_ejemplares";
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
					$masterTablesData["public.prestamo"][1] = $masterParams;
				$masterTablesData["public.prestamo"][1]["masterKeys"] = array();
	$masterTablesData["public.prestamo"][1]["masterKeys"][]="idejemplares";
				$masterTablesData["public.prestamo"][1]["detailKeys"] = array();
	$masterTablesData["public.prestamo"][1]["detailKeys"][]="idejemplar";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_prestamo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idprestamo,  	fecha_prestamo,  	fecha_devolucion,  	diasprestamo,  	idejemplar,  	idlector";
$proto0["m_strFrom"] = "FROM \"public\".prestamo";
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
	"m_strName" => "idprestamo",
	"m_strTable" => "public.prestamo",
	"m_srcTableName" => "public.prestamo"
));

$proto6["m_sql"] = "idprestamo";
$proto6["m_srcTableName"] = "public.prestamo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_prestamo",
	"m_strTable" => "public.prestamo",
	"m_srcTableName" => "public.prestamo"
));

$proto8["m_sql"] = "fecha_prestamo";
$proto8["m_srcTableName"] = "public.prestamo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_devolucion",
	"m_strTable" => "public.prestamo",
	"m_srcTableName" => "public.prestamo"
));

$proto10["m_sql"] = "fecha_devolucion";
$proto10["m_srcTableName"] = "public.prestamo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "diasprestamo",
	"m_strTable" => "public.prestamo",
	"m_srcTableName" => "public.prestamo"
));

$proto12["m_sql"] = "diasprestamo";
$proto12["m_srcTableName"] = "public.prestamo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "idejemplar",
	"m_strTable" => "public.prestamo",
	"m_srcTableName" => "public.prestamo"
));

$proto14["m_sql"] = "idejemplar";
$proto14["m_srcTableName"] = "public.prestamo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "idlector",
	"m_strTable" => "public.prestamo",
	"m_srcTableName" => "public.prestamo"
));

$proto16["m_sql"] = "idlector";
$proto16["m_srcTableName"] = "public.prestamo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.prestamo";
$proto19["m_srcTableName"] = "public.prestamo";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idprestamo";
$proto19["m_columns"][] = "fecha_prestamo";
$proto19["m_columns"][] = "fecha_devolucion";
$proto19["m_columns"][] = "diasprestamo";
$proto19["m_columns"][] = "idejemplar";
$proto19["m_columns"][] = "idlector";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".prestamo";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.prestamo";
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
$proto0["m_srcTableName"]="public.prestamo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_prestamo = createSqlQuery_public_prestamo();


	
		;

						

$tdatapublic_prestamo[".sqlquery"] = $queryData_public_prestamo;

$tableEvents["public.prestamo"] = new eventsBase;
$tdatapublic_prestamo[".hasEvents"] = false;

?>