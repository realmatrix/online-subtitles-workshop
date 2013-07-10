<?php

	class CReplyMessage{
			
		function ReplyMessage(){
			return self::ReplyMessage_content();
		}
	
		function ReplyMessage_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ReplyMessage_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ReplyMessage_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_ReplyMessage_title")),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>