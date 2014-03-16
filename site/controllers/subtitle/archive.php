<?php

	class Carchive{
			
		function archive_sections(){
			$array = array(
				array("subtitle", "ListAllSubtitles", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function archive_set(){
			$GLOBALS['vars']['PageTitle'] = "subtitle archive";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("subtitles", "page=subtitle&sec=archive"),
				array("archive", "page=subtitle&sec=archive"),
			);
		}
		
			
	}

	
?>