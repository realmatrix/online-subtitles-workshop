<?php

	class CUserPM{
			
		function UserPM(){
			return self::UserPM_content();
		}
	
		function UserPM_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function UserPM_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function UserPM_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_UserPM_title")),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>