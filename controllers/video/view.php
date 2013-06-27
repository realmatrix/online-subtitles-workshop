<?php

	class Cview{
			
		function view_sections(){
			$array = array(
				array("video", "ViewVideo", $GLOBALS['vars'], TRUE),
				array("video", "VideoSynopsis", $GLOBALS['vars'], TRUE),
				array("video", "UploadThumbnail", $GLOBALS['vars'], self::CheckOwner()),
				array("subtitle", "VideoSubtitles", $GLOBALS['vars'], TRUE),
				array("subtitle", "AddSubtitle", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function CheckOwner(){
			$VideoInfo = $GLOBALS['COMMON']->GetVideoInfo($GLOBALS['vars']['vid']);
			$owner = $VideoInfo[0][uid];
			if($_SESSION['id']==$owner){return TRUE;}else{return FALSE;}
		}	
			
	}

	
?>