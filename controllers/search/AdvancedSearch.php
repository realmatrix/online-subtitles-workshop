<?php
//to get all alphabets in the subtitles table
//SELECT DISTINCT LEFT(title, 1) as letter FROM subtitles ORDER BY letter
	class CAdvancedSearch{
			
		function AdvancedSearch(){
			return self::AdvancedSearch_content();
		}
	
		function AdvancedSearch_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function AdvancedSearch_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"both",
			);
			return $options;
		}
				
		function AdvancedSearch_content(){
				$content = array
				  (
				  array("{test}", $test),
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>