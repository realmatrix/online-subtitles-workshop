<?php
//to get all alphabets in the subtitles table
//SELECT DISTINCT LEFT(title, 1) as letter FROM subtitles ORDER BY letter
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
			"loggedin"=>"both",
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