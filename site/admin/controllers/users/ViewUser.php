<?php

	class CViewUser{
			
		function ViewUser(){
			return self::ViewUser_content();
		}
	
		function ViewUser_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ViewUser_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewUser_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_ViewUser_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>