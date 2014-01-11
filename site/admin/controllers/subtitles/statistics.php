<?php

	class Cstatistics{
			
		function statistics_sections(){
			$array = array(
				array("subtitles", "ManageSubtitles", $GLOBALS['vars'], TRUE),
				array("subtitles", "SubtitlesStatistics", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>