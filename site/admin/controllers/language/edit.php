<?php

	class Cedit{
			
		function edit_sections(){
			$array = array(
				array("language", "ManageLanguage", $GLOBALS['vars'], TRUE),
				array("language", "EditSelectLanguage", $GLOBALS['vars'], TRUE),
				array("language", "EditLanguage", $GLOBALS['vars'], self::ShowEdit()),
			);
			return $array;
		}
		
		function ShowEdit(){
			if($GLOBALS['vars']['lang']!=""){return TRUE;}else{return FALSE;}
		}
			
	}


?>