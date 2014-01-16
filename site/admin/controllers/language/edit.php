<?php

	class Cedit{
			
		function edit_sections(){
			$array = array(
				array("language", "ManageLanguage", $GLOBALS['vars'], TRUE),
				array("language", "SelectLanguage", $GLOBALS['vars'], TRUE),
				array("language", "EditLanguage", $GLOBALS['vars'], self::ShowEdit()),
			);
			return $array;
		}
		
		function ShowEdit(){
			if($GLOBALS['vars']['lid']!=""){return TRUE;}else{return FALSE;}
		}
			
	}


?>