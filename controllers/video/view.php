<?php

	class Cview{
			
		function view_sections(){
			$array = array(
				array("video", "ViewVideo", self::view_args(), TRUE),
				array("video", "VideoSynopsis", self::view_args(), TRUE),
				array("video", "UploadThumbnail", self::view_args(), self::CheckOwner()),
				array("subtitle", "VideoSubtitles", self::view_args(), TRUE),
				array("subtitle", "AddSubtitle", self::view_args(), TRUE),
			);
			return $array;
		}
		
		function view_args(){
			$args = array(
				array("vid", $_GET['vid']),
			);
			return $args;
		}
		
		function CheckOwner(){
			$VideoInfo = $GLOBALS['COMMON']->GetVideoInfo($_GET['vid']);
			$owner = $VideoInfo[0][uid];
			if($_SESSION['id']==$owner){return TRUE;}else{return FALSE;}
		}	
			
	}

	
?>