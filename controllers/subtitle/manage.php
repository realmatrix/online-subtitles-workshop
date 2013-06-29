<?php

	class Cmanage{
			
		function manage_sections(){
			$array = array(
				array("subtitle", "SubtitleListTeams", $GLOBALS['vars'], TRUE),
				array("subtitle", "SubtitleAddTeam", $GLOBALS['vars'], TRUE),
				array("subtitle", "SubtitleUploader", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>