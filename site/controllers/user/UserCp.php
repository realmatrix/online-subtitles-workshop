<?php

	class CUserCp{
			
		function UserCp(){
			return self::UserCp_content();
		}
	
		function UserCp_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function UserCp_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function UserCp_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l('team_UserCp_title')),
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>