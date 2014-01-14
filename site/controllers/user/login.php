<?php

	class Clogin{
			
		function login_sections(){
			$array = array(
				array("user", "UserLogin", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function login_set(){
			$GLOBALS['vars']['PageTitle'] = "User Control Panel";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array();
		}	
			
	}

	
?>