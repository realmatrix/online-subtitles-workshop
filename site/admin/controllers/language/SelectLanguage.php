<?php

	class CSelectLanguage{
			
		function SelectLanguage(){
			return self::SelectLanguage_content();
		}
	
		function SelectLanguage_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function SelectLanguage_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SelectLanguage_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_SelectLanguage_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>