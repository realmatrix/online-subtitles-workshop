<?php

	class CVideoSubtitles{

		
		function VideoSubtitles(){
			return self::VideoSubtitles_content();
		}
	
		function VideoSubtitles_hooks(){
			$array = array(
			);
			return $array;
		}
			
		function VideoSubtitles_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"both",
			);
			return $options;
		}
				
		function VideoSubtitles_content(){
			if($_GET['vid']!=""){$vid=$_GET['vid'];}
			if($_POST['vid']!=""){$vid=$_POST['vid'];}
				$content = array
				  (
				  array("{vid}", $vid),
				 );
			 
		return $content;
		}
		
			
	}
	
	
	
?>