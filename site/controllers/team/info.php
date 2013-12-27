<?php

	class Cinfo{
			
		function info_sections(){
			$array = array(
				array("team", "ListSubtitles", $GLOBALS['vars'], TRUE),
				array("team", "ListMembers", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function list_set(){
			$GLOBALS['vars']['PageTitle'] = "Team Information";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("my teams", "page=team&sec=list"),
				array("Team Information", "page=team&sec=list"),
			);
		}
			
	}

	
?>