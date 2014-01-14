<?php

	class CUserRegister{
			
		function UserRegister(){
			return self::UserRegister_content();
		}
	
		function UserRegister_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function UserRegister_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function UserRegister_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l('team_UserRegister_title')),
				  array("{page}", $GLOBALS['vars']['page']),
				  array("{sec}", $GLOBALS['vars']['sec']),
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>