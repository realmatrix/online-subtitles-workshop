<?php

	class Cview{
			
		function view_sections(){
			$array = array(
				array("subtitle", "ViewSubtitle", $GLOBALS['vars'], TRUE),
				array("subtitle", "SubtitleDownload", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>