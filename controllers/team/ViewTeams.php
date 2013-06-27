<?php

	class CViewTeams{
			
		function ViewTeams(){
			return self::ViewTeams_content();
		}
	
		function ViewTeams_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function ViewTeams_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewTeams_content(){
				$content = array
				  (
				  array("{test}", $test),
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>