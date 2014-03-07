<?php

	class CUserProfile{
			
		function UserProfile(){
			return self::UserProfile_content();
		}
	
		function UserProfile_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function UserProfile_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function UserProfile_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l('team_UserProfile_title')),
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>