<?php

	class Ccp{
			
		function cp_sections(){
			$array = array(
				array("user", "UserCp", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function cp_set(){
			$GLOBALS['vars']['PageTitle'] = "User Control Panel";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
		}	
			
	}

	
?>