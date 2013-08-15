<?php

	class CUserInvitations{
			
		function UserInvitations(){
			return self::UserInvitations_content();
		}
	
		function UserInvitations_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function UserInvitations_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function UserInvitations_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_UserInvitations_title")),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>