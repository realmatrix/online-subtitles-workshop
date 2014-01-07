<?php

	class CSubtitleOptions{
			
		function SubtitleOptions(){
			return self::SubtitleOptions_content();
		}
	
		function SubtitleOptions_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function SubtitleOptions_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SubtitleOptions_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_SubtitleOptions_title")),
				 );
			 
		return $content;
		}
		

	
			
	}
	
	
	
?>