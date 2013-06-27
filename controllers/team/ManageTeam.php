<?php

	class CManageTeam{
			
		function ManageTeam(){
			return self::ManageTeam_content();
		}
	
		function ManageTeam_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function ManageTeam_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ManageTeam_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l('team_ManageTeam_title')),
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>