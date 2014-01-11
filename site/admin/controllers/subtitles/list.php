<?php

	class Clist{
			
		function list_sections(){
			$array = array(
				array("subtitles", "ManageSubtitles", $GLOBALS['vars'], TRUE),
				array("subtitles", "ListSubtitles", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>