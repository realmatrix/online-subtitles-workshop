<?php

	class CADashBoard{
			
		function ADashBoard(){
			return self::ADashBoard_content();
		}
	
		function ADashBoard_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ADashBoard_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ADashBoard_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_ADashBoard_title")),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>