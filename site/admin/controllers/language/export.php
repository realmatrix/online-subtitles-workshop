<?php

	class Cexport{
			
		function export_sections(){
			$array = array(
				array("language", "ManageLanguage", $GLOBALS['vars'], TRUE),
				array("language", "ExportSelectLanguage", $GLOBALS['vars'], TRUE),
				array("language", "ExportLanguage", $GLOBALS['vars'], self::ShowExport()),
			);
			return $array;
		}
		
		function ShowExport(){
			if($GLOBALS['vars']['lang']!=""){return TRUE;}else{return FALSE;}
		}
			
	}


?>