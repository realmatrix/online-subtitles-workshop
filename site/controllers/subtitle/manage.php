<?php

	class Cmanage{
			
		function manage_sections(){
			$array = array(
				array("subtitle", "ViewSubtitle", $GLOBALS['vars'], true),
				array("subtitle", "SubtitleAddTeam", $GLOBALS['vars'], TRUE),
				array("subtitle", "SubtitleListTeams", $GLOBALS['vars'], TRUE),
				array("subtitle", "SubtitleUploader", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function manage_set(){
			$GLOBALS['vars']['PageTitle'] = "Manage Subtitle";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("subtitle", ""),
				array("manage subtitle", ""),
			);
		}
			
	}

	
?>