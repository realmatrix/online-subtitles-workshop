<?php

	class Creply{
	
		function reply(){
			return self::reply_content();
		}
	
		function reply_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function reply_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function reply_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("forum_reply_title")),
				 );
			 
		return $content;
		}
		

	
			
	}
	
	
	
?>