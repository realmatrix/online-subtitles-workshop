<?php

	class CSendPM{
			
		function SendPM(){
			return self::SendPM_content();
		}
	
		function SendPM_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function SendPM_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SendPM_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_SendPM_title")),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>