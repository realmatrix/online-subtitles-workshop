<?php

	class CViewUserForm{
			
		function ViewUserForm(){
			return self::ViewUserForm_content();
		}
	
		function ViewUserForm_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ViewUserForm_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewUserForm_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_ViewUserForm_title")),
			  array("{page}", $GLOBALS['vars']['page']),
			  array("{sec}", $GLOBALS['vars']['sec']),
			  array("{tusername}", $GLOBALS['vars']['username']),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>