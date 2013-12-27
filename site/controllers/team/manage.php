<?php

	class Cmanage{
			
		function manage_sections(){
			$array = array(
				array("team", "ViewTeam", $GLOBALS['vars'], TRUE),
				array("team", "AddMember", $GLOBALS['vars'], TRUE),
				array("team", "ManageTeam", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function manage_set(){
			$GLOBALS['vars']['PageTitle'] = "Manage Team";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("manage teams", "page=team&sec=list"),
			);
		}
			
	}

	
?>