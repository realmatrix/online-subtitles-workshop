<?php

	class Cteam{
			
		function team_sections(){
			$array = array(
				array("query", "QueryTeam", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function team_set(){
			$GLOBALS['vars']['PageTitle'] = "Home";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array();
		}	
			
	}

	
?>