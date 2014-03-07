<?php

	class CManageUsers{
			
		function ManageUsers(){
			return self::ManageUsers_content();
		}
	
		function ManageUsers_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ManageUsers_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ManageUsers_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_ManageUsers_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>