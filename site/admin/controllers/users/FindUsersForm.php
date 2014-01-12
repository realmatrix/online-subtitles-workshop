<?php

	class CFindUsersForm{
			
		function FindUsersForm(){
			return self::FindUsersForm_content();
		}
	
		function FindUsersForm_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function FindUsersForm_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function FindUsersForm_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_FindUsersForm_title")),
			  array("{page}", $GLOBALS['vars']['page']),
			  array("{sec}", $GLOBALS['vars']['sec']),
			  array("{tusername}", $GLOBALS['vars']['username']),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>