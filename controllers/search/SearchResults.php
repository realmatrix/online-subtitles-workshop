<?php

	class CSearchResults{
//SELECT * FROM articles WHERE a_title LIKE %$input% OR a_content LIKE %$input%			
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
			"loggedin"=>"",
			);
			return $options;
		}
				
		function SearchResults_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("search_SearchResults_title")),
				 );
			 
		return $content;
		}
		
		function search(){
			
		}
		
	
			
	}
	
	
	
?>