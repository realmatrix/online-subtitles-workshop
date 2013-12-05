<?php

	class Cprofile{
			
		function profile_sections(){
			$array = array(
				array("user", "UserProfile", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function profile_set(){
			$GLOBALS['vars']['PageTitle'] = "User Profile";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("user", "page=user&sec=profile&u=".$GLOBALS['vars']['u']),
				array("profile", "page=user&sec=profile&u=".$GLOBALS['vars']['u']),
			);
		}
			
	}

	
?>