<?php

	class Ccheck{
			
		function check_sections(){
			$array = array(
				array("subtitle", "ViewSubtitle", $GLOBALS['vars'], TRUE),
				array("subtitle", "CheckSubtitle", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function check_set(){
			$GLOBALS['vars']['PageTitle'] = "Check Subtitle";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("my subtitles", "page=subtitle&sec=list"),
				array("check subtitle", ""),
			);
		}	
			
	}

	
?>