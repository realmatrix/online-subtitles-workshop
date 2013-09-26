<?php

	class CQueryClient{

	public static $query = "";
			
		function QueryClient(){
			return self::QueryClient_content();
		}
	
		function QueryClient_hooks(){
			$array = array(
				array("edit", "UpdateClient"),
			);
			return $array;
		}
			
		function QueryClient_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function QueryClient_content(){
				$content = array
				  (
				  array("{query}", self::$query), 
				 );
			 
		return $content;
		}
		



	
			
	}
	
	
	
?>