<?php

	class CEditUsers{
			
		function EditUsers(){
			return self::EditUsers_content();
		}
	
		function EditUsers_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function EditUsers_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditUsers_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_EditUsers_title")),
			  array("{page}", $GLOBALS['vars']['page']),
			  array("{sec}", $GLOBALS['vars']['sec']),
			  array("{tusername}", $GLOBALS['vars']['username']),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>