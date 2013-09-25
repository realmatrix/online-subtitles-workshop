<?php

	class CViewThread{
	
		function ViewThread(){
			return self::ViewThread_content();
		}
	
		function ViewThread_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function ViewThread_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function ViewThread_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("forum_ViewThread_title")),
				 );
			 
		return $content;
		}
		

	
			
	}
	
	
	
?>