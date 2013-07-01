<?php

	class CQuerySubtitle{

	public static $query = "";
			
		function QuerySubtitle(){
			return self::QuerySubtitle_content();
		}
	
		function QuerySubtitle_hooks(){
			$array = array(
				array("edit", "UpdateSubtitle"),
			);
			return $array;
		}
			
		function QuerySubtitle_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function QuerySubtitle_content(){
				$content = array
				  (
				  array("{query}", self::$query),
				 );
			 
		return $content;
		}
		
		function UpdateSubtitle(){
			self::$query = "it works";
		}
		


		

	
			
	}
	
	
	
?>