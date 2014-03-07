<?php

	class CContactUs{
			
		function ContactUs(){
			return self::ContactUs_content();
		}
	
		function ContactUs_hooks(){
			$array = array(
				array("SendMessage", "SendMessage"),
			);
			return $array;
		}
			
		function ContactUs_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ContactUs_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("message_ContactUs_title")),
				 );
			 
		return $content;
		}
		
		function SendMessage(){
			
		}
		

	
			
	}
	
	
	
?>