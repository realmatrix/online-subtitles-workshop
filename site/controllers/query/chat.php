<?php

	class Cchat{
			
		function chat_sections(){
			$array = array(
				array("query", "Querychat", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function chat_set(){
			$GLOBALS['vars']['PageTitle'] = "Home";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array();
		}	
			
	}

	
?>