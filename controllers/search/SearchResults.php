<?php

	class CSearchResults{
			
		function SearchResults(){
			return self::SearchResults_content();
		}
	
		function SearchResults_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function SearchResults_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"both",
			);
			return $options;
		}
				
		function SearchResults_content(){
				$content = array
				  (
				  array("{test}", $test),
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>