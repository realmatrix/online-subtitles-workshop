<?php

	class Cclient{
			
		function client_sections(){
			$array = array(
				array("query", "QueryClient", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function client_set(){
			$GLOBALS['vars']['PageTitle'] = "Home";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array();
		}	
			
	}

	
?>