<?php

	class Cregister{
			
		function register_sections(){
			$array = array(
				array("user", "UserRegister", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function register_set(){
			$GLOBALS['vars']['PageTitle'] = "Register";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array();
		}	
			
	}

	
?>