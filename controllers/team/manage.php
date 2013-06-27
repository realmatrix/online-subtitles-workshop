<?php

	class Cmanage{
			
		function manage_sections(){
			$array = array(
				array("team", "ViewTeam", $GLOBALS['vars'], TRUE),
				array("team", "ManageTeam", $GLOBALS['vars'], TRUE),
				array("team", "AddMember", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>