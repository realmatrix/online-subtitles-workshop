<?php

	class CUserSubtitles{
			
		function UserSubtitles(){
			return self::UserSubtitles_content();
		}
	
		function UserSubtitles_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function UserSubtitles_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function UserSubtitles_content(){
				$content = array
				  (
				  array("{vid}", $GLOBALS['vars']['vid']),
				 );
			 
		return $content;
		}
		

	
			
	}
	
	
	
?>