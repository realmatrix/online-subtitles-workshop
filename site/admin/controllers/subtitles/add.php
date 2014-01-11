<?php

	class Cadd{
			
		function add_sections(){
			$array = array(
				array("subtitles", "ManageSubtitles", $GLOBALS['vars'], TRUE),
				array("subtitles", "AddSubtitles", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>