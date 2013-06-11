<?php

	class Cview{
			
		function view_sections(){
			$array = array(
				array("video", "ViewVideo", self::view_args(), TRUE),
				array("video", "VideoSynopsis", self::view_args(), TRUE),
				array("video", "UploadThumbnail", self::view_args(), TRUE),
				array("subtitle", "AddSubtitle", self::view_args()), TRUE,
				
			);
			return $array;
		}
		
		function view_args(){
			$args = array(
				array("vid", $_GET['vid']),
			);
			return $args;
		}	
			
	}

	
?>