<?php

	class CListUsers{
			
		function ListUsers(){
			return self::ListUsers_content();
		}
	
		function ListUsers_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ListUsers_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ListUsers_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_ListUsers_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>