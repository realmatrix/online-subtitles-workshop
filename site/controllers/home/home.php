<?php

	class Chome{
			
		function home_sections(){
			$array = array(
				array("home", "test", array(), TRUE),
			);
			return $array;
		}	
		
		function home_set(){
			$GLOBALS['vars']['PageTitle'] = "Home";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
		}
			
	}

	
?>