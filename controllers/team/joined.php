<?php

	class Cjoined{
			
		function joined_sections(){
			$array = array(
				array("team", "UserInvitations", $GLOBALS['vars'], TRUE),
				array("team", "JoinedTeams", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>