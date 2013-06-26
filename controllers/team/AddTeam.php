<?php

	class CAddTeam{
			
		function AddTeam(){
			return self::AddTeam_content();
		}
	
		function AddTeam_hooks(){
			$array = array(
				array("addteam", "addnewteam")
			);
			return $array;
		}
			
		function AddTeam_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function AddTeam_content(){
				$content = array
				  (
				  array("{test}", $test),
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>