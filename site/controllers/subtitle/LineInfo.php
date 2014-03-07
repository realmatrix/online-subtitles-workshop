<?php

	class CLineInfo{
			
		function LineInfo(){
			return self::LineInfo_content();
		}
	
		function LineInfo_hooks(){
			$array = array(
				array("SendMessage", "SendMessage"),
			);
			return $array;
		}
			
		function LineInfo_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function LineInfo_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("message_LineInfo_title")),
				 );
			 
		return $content;
		}
		
		function SendMessage(){
			
		}
		

	
			
	}
	
	
	
?>