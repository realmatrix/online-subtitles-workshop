<?php

	class Cimport{
			
		function import_sections(){
			$array = array(
				array("language", "ManageLanguage", $GLOBALS['vars'], TRUE),
				array("language", "ImportLanguageForm", $GLOBALS['vars'], TRUE),
				array("language", "ImportLanguage", $GLOBALS['vars'], self::ShowImport()),
			);
			return $array;
		}
		
		function ShowImport(){
			if($GLOBALS['vars']['lang']!=""){return TRUE;}else{return FALSE;}
		}
			
	}


?>