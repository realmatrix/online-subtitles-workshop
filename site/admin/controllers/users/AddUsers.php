<?php

	class CAddUsers{
			
		function AddUsers(){
			return self::AddUsers_content();
		}
	
		function AddUsers_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function AddUsers_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function AddUsers_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_AddUsers_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>