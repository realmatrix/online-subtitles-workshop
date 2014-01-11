<?php

	class CFindUsers{
			
		function FindUsers(){
			return self::FindUsers_content();
		}
	
		function FindUsers_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function FindUsers_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function FindUsers_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_FindUsers_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>