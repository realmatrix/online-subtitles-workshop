<?php

	class CEditUsersForm{
			
		function EditUsersForm(){
			return self::EditUsersForm_content();
		}
	
		function EditUsersForm_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function EditUsersForm_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditUsersForm_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_EditUsersForm_title")),
			  array("{page}", $GLOBALS['vars']['page']),
			  array("{sec}", $GLOBALS['vars']['sec']),
			  array("{tusername}", $GLOBALS['vars']['username']),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>