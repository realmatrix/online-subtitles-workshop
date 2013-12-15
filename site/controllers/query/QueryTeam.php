<?php

	class CQueryTeam{

	public static $query = "";
			
		function QueryTeam(){
			return self::QueryTeam_content();
		}
	
		function QueryTeam_hooks(){
			$array = array(
				array("get", "GetChat"),
			);
			return $array;
		}
			
		function QueryTeam_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function QueryTeam_content(){
				$content = array
				  (
				  array("{query}", nl2br(self::$query)), 
				 );
			 
		return $content;
		}
		


	
			
	}
	
	
	
?>