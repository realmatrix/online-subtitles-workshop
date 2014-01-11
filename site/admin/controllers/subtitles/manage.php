<?php

	class Cmanage{
			
		function manage_sections(){
			$array = array(
				array("subtitles", "ManageSubtitles", $GLOBALS['vars'], TRUE),
				array("subtitles", "SubtitlesStatistics", $GLOBALS['vars'], self::ViewStatistics()),
			);
			return $array;
		}
		
		function ViewStatistics(){
			if($GLOBALS['vars']['sec']=="manage"){return TRUE;}else{return FALSE;}
		}
			
	}


?>