<?php

	class Cjoined{
			
		function joined_sections(){
			$array = array(
				array("team", "UserInvitations", $GLOBALS['vars'], TRUE),
				array("team", "JoinedTeams", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function joined_set(){
			$GLOBALS['vars']['PageTitle'] = "Joined Teams";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
		}
			
	}

	
?>