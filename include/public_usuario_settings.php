<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_usuario = array();
	$tdatapublic_usuario[".truncateText"] = true;
	$tdatapublic_usuario[".NumberOfChars"] = 80;
	$tdatapublic_usuario[".ShortName"] = "public_usuario";
	$tdatapublic_usuario[".OwnerID"] = "";
	$tdatapublic_usuario[".OriginalTable"] = "public.usuario";

//	field labels
$fieldLabelspublic_usuario = array();
$fieldToolTipspublic_usuario = array();
$pageTitlespublic_usuario = array();
$placeHolderspublic_usuario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_usuario["Spanish"] = array();
	$fieldToolTipspublic_usuario["Spanish"] = array();
	$placeHolderspublic_usuario["Spanish"] = array();
	$pageTitlespublic_usuario["Spanish"] = array();
	$fieldLabelspublic_usuario["Spanish"]["idusuario"] = "Idusuario";
	$fieldToolTipspublic_usuario["Spanish"]["idusuario"] = "";
	$placeHolderspublic_usuario["Spanish"]["idusuario"] = "";
	$fieldLabelspublic_usuario["Spanish"]["usuario"] = "Usuario";
	$fieldToolTipspublic_usuario["Spanish"]["usuario"] = "";
	$placeHolderspublic_usuario["Spanish"]["usuario"] = "";
	$fieldLabelspublic_usuario["Spanish"]["pass"] = "Pass";
	$fieldToolTipspublic_usuario["Spanish"]["pass"] = "";
	$placeHolderspublic_usuario["Spanish"]["pass"] = "";
	$fieldLabelspublic_usuario["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipspublic_usuario["Spanish"]["nombre"] = "";
	$placeHolderspublic_usuario["Spanish"]["nombre"] = "";
	$fieldLabelspublic_usuario["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipspublic_usuario["Spanish"]["telefono"] = "";
	$placeHolderspublic_usuario["Spanish"]["telefono"] = "";
	$fieldLabelspublic_usuario["Spanish"]["mail"] = "Mail";
	$fieldToolTipspublic_usuario["Spanish"]["mail"] = "";
	$placeHolderspublic_usuario["Spanish"]["mail"] = "";
	if (count($fieldToolTipspublic_usuario["Spanish"]))
		$tdatapublic_usuario[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_usuario[""] = array();
	$fieldToolTipspublic_usuario[""] = array();
	$placeHolderspublic_usuario[""] = array();
	$pageTitlespublic_usuario[""] = array();
	if (count($fieldToolTipspublic_usuario[""]))
		$tdatapublic_usuario[".isUseToolTips"] = true;
}


	$tdatapublic_usuario[".NCSearch"] = true;



$tdatapublic_usuario[".shortTableName"] = "public_usuario";
$tdatapublic_usuario[".nSecOptions"] = 0;
$tdatapublic_usuario[".recsPerRowPrint"] = 1;
$tdatapublic_usuario[".mainTableOwnerID"] = "";
$tdatapublic_usuario[".moveNext"] = 1;
$tdatapublic_usuario[".entityType"] = 0;

$tdatapublic_usuario[".strOriginalTableName"] = "public.usuario";

	



$tdatapublic_usuario[".showAddInPopup"] = false;

$tdatapublic_usuario[".showEditInPopup"] = false;

$tdatapublic_usuario[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_usuario[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_usuario[".fieldsForRegister"] = array();

$tdatapublic_usuario[".listAjax"] = false;

	$tdatapublic_usuario[".audit"] = false;

	$tdatapublic_usuario[".locking"] = false;

$tdatapublic_usuario[".edit"] = true;
$tdatapublic_usuario[".afterEditAction"] = 1;
$tdatapublic_usuario[".closePopupAfterEdit"] = 1;
$tdatapublic_usuario[".afterEditActionDetTable"] = "";

$tdatapublic_usuario[".add"] = true;
$tdatapublic_usuario[".afterAddAction"] = 1;
$tdatapublic_usuario[".closePopupAfterAdd"] = 1;
$tdatapublic_usuario[".afterAddActionDetTable"] = "";

$tdatapublic_usuario[".list"] = true;



$tdatapublic_usuario[".reorderRecordsByHeader"] = true;



$tdatapublic_usuario[".view"] = true;

$tdatapublic_usuario[".import"] = true;

$tdatapublic_usuario[".exportTo"] = true;

$tdatapublic_usuario[".printFriendly"] = true;

$tdatapublic_usuario[".delete"] = true;

$tdatapublic_usuario[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_usuario[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_usuario[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_usuario[".searchSaving"] = false;
//

$tdatapublic_usuario[".showSearchPanel"] = true;
		$tdatapublic_usuario[".flexibleSearch"] = true;

$tdatapublic_usuario[".isUseAjaxSuggest"] = true;

$tdatapublic_usuario[".rowHighlite"] = true;





$tdatapublic_usuario[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_usuario[".buttonsAdded"] = false;

$tdatapublic_usuario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_usuario[".isUseTimeForSearch"] = false;





$tdatapublic_usuario[".allSearchFields"] = array();
$tdatapublic_usuario[".filterFields"] = array();
$tdatapublic_usuario[".requiredSearchFields"] = array();

$tdatapublic_usuario[".allSearchFields"][] = "idusuario";
	$tdatapublic_usuario[".allSearchFields"][] = "usuario";
	$tdatapublic_usuario[".allSearchFields"][] = "pass";
	$tdatapublic_usuario[".allSearchFields"][] = "nombre";
	$tdatapublic_usuario[".allSearchFields"][] = "telefono";
	$tdatapublic_usuario[".allSearchFields"][] = "mail";
	

$tdatapublic_usuario[".googleLikeFields"] = array();
$tdatapublic_usuario[".googleLikeFields"][] = "idusuario";
$tdatapublic_usuario[".googleLikeFields"][] = "usuario";
$tdatapublic_usuario[".googleLikeFields"][] = "pass";
$tdatapublic_usuario[".googleLikeFields"][] = "nombre";
$tdatapublic_usuario[".googleLikeFields"][] = "telefono";
$tdatapublic_usuario[".googleLikeFields"][] = "mail";


$tdatapublic_usuario[".advSearchFields"] = array();
$tdatapublic_usuario[".advSearchFields"][] = "idusuario";
$tdatapublic_usuario[".advSearchFields"][] = "usuario";
$tdatapublic_usuario[".advSearchFields"][] = "pass";
$tdatapublic_usuario[".advSearchFields"][] = "nombre";
$tdatapublic_usuario[".advSearchFields"][] = "telefono";
$tdatapublic_usuario[".advSearchFields"][] = "mail";

$tdatapublic_usuario[".tableType"] = "list";

$tdatapublic_usuario[".printerPageOrientation"] = 0;
$tdatapublic_usuario[".nPrinterPageScale"] = 100;

$tdatapublic_usuario[".nPrinterSplitRecords"] = 40;

$tdatapublic_usuario[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_usuario[".geocodingEnabled"] = false;





$tdatapublic_usuario[".listGridLayout"] = 3;





// view page pdf
$tdatapublic_usuario[".isViewPagePDF"] = true;
$tdatapublic_usuario[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapublic_usuario[".isPrinterPagePDF"] = true;
$tdatapublic_usuario[".nPrinterPagePDFScale"] = 100;


$tdatapublic_usuario[".pageSize"] = 20;

$tdatapublic_usuario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_usuario[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_usuario[".orderindexes"] = array();

$tdatapublic_usuario[".sqlHead"] = "SELECT idusuario,  	usuario,  	pass,  	nombre,  	telefono,  	mail";
$tdatapublic_usuario[".sqlFrom"] = "FROM \"public\".usuario";
$tdatapublic_usuario[".sqlWhereExpr"] = "";
$tdatapublic_usuario[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_usuario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_usuario[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_usuario[".highlightSearchResults"] = true;

$tableKeyspublic_usuario = array();
$tableKeyspublic_usuario[] = "idusuario";
$tdatapublic_usuario[".Keys"] = $tableKeyspublic_usuario;

$tdatapublic_usuario[".listFields"] = array();
$tdatapublic_usuario[".listFields"][] = "idusuario";
$tdatapublic_usuario[".listFields"][] = "usuario";
$tdatapublic_usuario[".listFields"][] = "pass";
$tdatapublic_usuario[".listFields"][] = "nombre";
$tdatapublic_usuario[".listFields"][] = "telefono";
$tdatapublic_usuario[".listFields"][] = "mail";

$tdatapublic_usuario[".hideMobileList"] = array();


$tdatapublic_usuario[".viewFields"] = array();
$tdatapublic_usuario[".viewFields"][] = "idusuario";
$tdatapublic_usuario[".viewFields"][] = "usuario";
$tdatapublic_usuario[".viewFields"][] = "pass";
$tdatapublic_usuario[".viewFields"][] = "nombre";
$tdatapublic_usuario[".viewFields"][] = "telefono";
$tdatapublic_usuario[".viewFields"][] = "mail";

$tdatapublic_usuario[".addFields"] = array();
$tdatapublic_usuario[".addFields"][] = "usuario";
$tdatapublic_usuario[".addFields"][] = "pass";
$tdatapublic_usuario[".addFields"][] = "nombre";
$tdatapublic_usuario[".addFields"][] = "telefono";
$tdatapublic_usuario[".addFields"][] = "mail";

$tdatapublic_usuario[".masterListFields"] = array();
$tdatapublic_usuario[".masterListFields"][] = "idusuario";
$tdatapublic_usuario[".masterListFields"][] = "usuario";
$tdatapublic_usuario[".masterListFields"][] = "pass";
$tdatapublic_usuario[".masterListFields"][] = "nombre";
$tdatapublic_usuario[".masterListFields"][] = "telefono";
$tdatapublic_usuario[".masterListFields"][] = "mail";

$tdatapublic_usuario[".inlineAddFields"] = array();

$tdatapublic_usuario[".editFields"] = array();
$tdatapublic_usuario[".editFields"][] = "usuario";
$tdatapublic_usuario[".editFields"][] = "pass";
$tdatapublic_usuario[".editFields"][] = "nombre";
$tdatapublic_usuario[".editFields"][] = "telefono";
$tdatapublic_usuario[".editFields"][] = "mail";

$tdatapublic_usuario[".inlineEditFields"] = array();

$tdatapublic_usuario[".updateSelectedFields"] = array();
$tdatapublic_usuario[".updateSelectedFields"][] = "usuario";
$tdatapublic_usuario[".updateSelectedFields"][] = "pass";
$tdatapublic_usuario[".updateSelectedFields"][] = "nombre";
$tdatapublic_usuario[".updateSelectedFields"][] = "telefono";
$tdatapublic_usuario[".updateSelectedFields"][] = "mail";


$tdatapublic_usuario[".exportFields"] = array();
$tdatapublic_usuario[".exportFields"][] = "idusuario";
$tdatapublic_usuario[".exportFields"][] = "usuario";
$tdatapublic_usuario[".exportFields"][] = "pass";
$tdatapublic_usuario[".exportFields"][] = "nombre";
$tdatapublic_usuario[".exportFields"][] = "telefono";
$tdatapublic_usuario[".exportFields"][] = "mail";

$tdatapublic_usuario[".importFields"] = array();
$tdatapublic_usuario[".importFields"][] = "idusuario";
$tdatapublic_usuario[".importFields"][] = "usuario";
$tdatapublic_usuario[".importFields"][] = "pass";
$tdatapublic_usuario[".importFields"][] = "nombre";
$tdatapublic_usuario[".importFields"][] = "telefono";
$tdatapublic_usuario[".importFields"][] = "mail";

$tdatapublic_usuario[".printFields"] = array();
$tdatapublic_usuario[".printFields"][] = "idusuario";
$tdatapublic_usuario[".printFields"][] = "usuario";
$tdatapublic_usuario[".printFields"][] = "pass";
$tdatapublic_usuario[".printFields"][] = "nombre";
$tdatapublic_usuario[".printFields"][] = "telefono";
$tdatapublic_usuario[".printFields"][] = "mail";

//	idusuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idusuario";
	$fdata["GoodName"] = "idusuario";
	$fdata["ownerTable"] = "public.usuario";
	$fdata["Label"] = GetFieldLabel("public_usuario","idusuario");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idusuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusuario";

	
	
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




	$tdatapublic_usuario["idusuario"] = $fdata;
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "public.usuario";
	$fdata["Label"] = GetFieldLabel("public_usuario","usuario");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "usuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario";

	
	
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




	$tdatapublic_usuario["usuario"] = $fdata;
//	pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pass";
	$fdata["GoodName"] = "pass";
	$fdata["ownerTable"] = "public.usuario";
	$fdata["Label"] = GetFieldLabel("public_usuario","pass");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pass";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pass";

	
	
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




	$tdatapublic_usuario["pass"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "public.usuario";
	$fdata["Label"] = GetFieldLabel("public_usuario","nombre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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




	$tdatapublic_usuario["nombre"] = $fdata;
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "public.usuario";
	$fdata["Label"] = GetFieldLabel("public_usuario","telefono");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdatapublic_usuario["telefono"] = $fdata;
//	mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mail";
	$fdata["GoodName"] = "mail";
	$fdata["ownerTable"] = "public.usuario";
	$fdata["Label"] = GetFieldLabel("public_usuario","mail");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mail";

	
	
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




	$tdatapublic_usuario["mail"] = $fdata;


$tables_data["public.usuario"]=&$tdatapublic_usuario;
$field_labels["public_usuario"] = &$fieldLabelspublic_usuario;
$fieldToolTips["public_usuario"] = &$fieldToolTipspublic_usuario;
$placeHolders["public_usuario"] = &$placeHolderspublic_usuario;
$page_titles["public_usuario"] = &$pageTitlespublic_usuario;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.usuario"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.usuario"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_usuario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idusuario,  	usuario,  	pass,  	nombre,  	telefono,  	mail";
$proto0["m_strFrom"] = "FROM \"public\".usuario";
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
	"m_strName" => "idusuario",
	"m_strTable" => "public.usuario",
	"m_srcTableName" => "public.usuario"
));

$proto6["m_sql"] = "idusuario";
$proto6["m_srcTableName"] = "public.usuario";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "public.usuario",
	"m_srcTableName" => "public.usuario"
));

$proto8["m_sql"] = "usuario";
$proto8["m_srcTableName"] = "public.usuario";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pass",
	"m_strTable" => "public.usuario",
	"m_srcTableName" => "public.usuario"
));

$proto10["m_sql"] = "pass";
$proto10["m_srcTableName"] = "public.usuario";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "public.usuario",
	"m_srcTableName" => "public.usuario"
));

$proto12["m_sql"] = "nombre";
$proto12["m_srcTableName"] = "public.usuario";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "public.usuario",
	"m_srcTableName" => "public.usuario"
));

$proto14["m_sql"] = "telefono";
$proto14["m_srcTableName"] = "public.usuario";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mail",
	"m_strTable" => "public.usuario",
	"m_srcTableName" => "public.usuario"
));

$proto16["m_sql"] = "mail";
$proto16["m_srcTableName"] = "public.usuario";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.usuario";
$proto19["m_srcTableName"] = "public.usuario";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idusuario";
$proto19["m_columns"][] = "usuario";
$proto19["m_columns"][] = "pass";
$proto19["m_columns"][] = "nombre";
$proto19["m_columns"][] = "telefono";
$proto19["m_columns"][] = "mail";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".usuario";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.usuario";
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
$proto0["m_srcTableName"]="public.usuario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_usuario = createSqlQuery_public_usuario();


	
		;

						

$tdatapublic_usuario[".sqlquery"] = $queryData_public_usuario;

$tableEvents["public.usuario"] = new eventsBase;
$tdatapublic_usuario[".hasEvents"] = false;

?>