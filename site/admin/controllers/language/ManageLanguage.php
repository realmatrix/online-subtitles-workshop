<?php

	class CManageLanguage{
			
		function ManageLanguage(){
			return self::ManageLanguage_content();
		}
	
		function ManageLanguage_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ManageLanguage_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ManageLanguage_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_ManageLanguage_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>