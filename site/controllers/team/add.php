<?php

	class Cadd{
			
		function add_sections(){
			$array = array(
				array("team", "AddTeam", $GLOBALS['vars'], TRUE),
				array("team", "ViewTeams", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>