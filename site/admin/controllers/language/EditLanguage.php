<?php

	class CEditLanguage{
			
		function EditLanguage(){
			return self::EditLanguage_content();
		}
	
		function EditLanguage_hooks(){
			$array = array(
				array("edit", "Edit"),
			);
			return $array;
		}
			
		function EditLanguage_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditLanguage_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_EditLanguage_title")),
			 );
		return $content;
		}
		
		function Edit(){
			
		}
					
			
	}
	
	
	
?>