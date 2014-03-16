<?php

	class CListAllSubtitles{
		
		function ListAllSubtitles(){
			return self::ListAllSubtitles_content();
		}
	
		function ListAllSubtitles_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
		
		function ListAllSubtitles_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function ListAllSubtitles_content(){
				$content = array
				  (
				  array("test", "test"),
				 );			 
		return $content;
		}



		

		

}