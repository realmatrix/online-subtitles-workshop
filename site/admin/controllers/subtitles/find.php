<?php

	class Cfind{
			
		function find_sections(){
			$array = array(
				array("subtitles", "ManageSubtitles", $GLOBALS['vars'], TRUE),
				array("subtitles", "FindSubtitles", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>