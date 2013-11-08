<?php

	class Clist{
			
		function list_sections(){
			$array = array(
				array("team", "AddTeam", $GLOBALS['vars'], TRUE),
				array("team", "UserTeams", $GLOBALS['vars'], TRUE),
				array("team", "ViewTeams", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function list_set(){
			$GLOBALS['vars']['PageTitle'] = "My Teams";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
		}
			
	}

	
?>