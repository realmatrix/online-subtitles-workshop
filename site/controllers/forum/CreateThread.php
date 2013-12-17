<?php

	class CCreateThread{
	
		function CreateThread(){
			return self::CreateThread_content();
		}
	
		function CreateThread_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function CreateThread_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function CreateThread_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("forum_CreateThread_title")),
				 );
			 
		return $content;
		}
		

	
			
	}
	
	
	
?>