<?php

	class CViewMessage{
			
		function ViewMessage(){
			return self::ViewMessage_content();
		}
	
		function ViewMessage_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ViewMessage_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewMessage_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_ViewMessage_title")),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>