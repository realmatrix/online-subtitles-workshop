<?php

	class CCheckSubtitle{
			
		function CheckSubtitle(){
			return self::CheckSubtitle_content();
		}
	
		function CheckSubtitle_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function CheckSubtitle_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function CheckSubtitle_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_CheckSubtitle_title")),
				 );
			 
		return $content;
		}
		

	
			
	}
	
	
	
?>