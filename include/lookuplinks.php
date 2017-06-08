<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["public.estado"]["public_ejemplares.estado"]["edit"] = array("table" => "public.ejemplares", "field" => "estado", "page" => "edit");
	$lookupTableLinks["public.libro"]["public_ejemplares.idlibro"]["edit"] = array("table" => "public.ejemplares", "field" => "idlibro", "page" => "edit");
	$lookupTableLinks["public.editorial"]["public_libro.ideditorial"]["edit"] = array("table" => "public.libro", "field" => "ideditorial", "page" => "edit");
	$lookupTableLinks["public.autor"]["public_libro.idautor"]["edit"] = array("table" => "public.libro", "field" => "idautor", "page" => "edit");
	$lookupTableLinks["public.tema"]["public_libro.idtema"]["edit"] = array("table" => "public.libro", "field" => "idtema", "page" => "edit");
	$lookupTableLinks["public.idioma"]["public_libro.ididioma"]["edit"] = array("table" => "public.libro", "field" => "ididioma", "page" => "edit");
	$lookupTableLinks["public.ejemplares"]["public_prestamo.idejemplar"]["edit"] = array("table" => "public.prestamo", "field" => "idejemplar", "page" => "edit");
	$lookupTableLinks["public.lector"]["public_prestamo.idlector"]["edit"] = array("table" => "public.prestamo", "field" => "idlector", "page" => "edit");
}

?>