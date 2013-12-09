<?php

	class Crun{
			
		function run_sections(){
			$array = array(
				array("cron", "cron", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function run_set(){
			$GLOBALS['vars']['PageTitle'] = "cron";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array();
		}
			
	}

	
?>