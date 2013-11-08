<?php

	class Cadd{
			
		function add_sections(){
			$array = array(
				array("team", "AddTeam", $GLOBALS['vars'], TRUE),
				array("team", "ViewTeams", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function add_set(){
			$GLOBALS['vars']['PageTitle'] = "Add Team";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
		}
			
	}

	
?>