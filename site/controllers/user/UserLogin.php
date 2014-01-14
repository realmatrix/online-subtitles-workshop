<?php

	class CUserLogin{
			
		function UserLogin(){
			return self::UserLogin_content();
		}
	
		function UserLogin_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function UserLogin_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function UserLogin_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l('team_UserLogin_title')),
				  array("{page}", $GLOBALS['vars']['page']),
				  array("{sec}", $GLOBALS['vars']['sec']),
				  array("{LoginUsername}",$GLOBALS['COMMON']->l('login_username')),
				  array("{LoginPassword}",$GLOBALS['COMMON']->l('login_password')),
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>