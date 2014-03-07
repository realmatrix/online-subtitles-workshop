<?php

	class CAboutUs{
			
		function AboutUs(){
			return self::AboutUs_content();
		}
	
		function AboutUs_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function AboutUs_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function AboutUs_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("info_AboutUs_title")),
				 );
			 
		return $content;
		}
		

		

	
			
	}
	
	
	
?>