<?php

	class CViewTeam{
			
		function ViewTeam(){
			return self::ViewTeam_content();
		}
	
		function ViewTeam_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function ViewTeam_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewTeam_content(){
				$content = array
				  (
				  array("{test}", $test),
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>