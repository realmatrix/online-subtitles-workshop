<?php

	class CAddMember{
			
		function AddMember(){
			return self::AddMember_content();
		}
	
		function AddMember_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function AddMember_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function AddMember_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l('team_AddMember_title')),
				  array("{username}", $GLOBALS['COMMON']->l('team_AddMember_username')),
				  array("{submit}", $GLOBALS['COMMON']->l('team_AddMember_submit')),
				 );
			 
		return $content;
		}
		

		
	
			
	}
	
	
	
?>