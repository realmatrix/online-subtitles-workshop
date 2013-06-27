<?php

	class Cadd{
			
		function add_sections(){
			$array = array(
				array("team", "ViewTeams", $GLOBALS['vars'], TRUE),
				array("team", "AddTeam", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>