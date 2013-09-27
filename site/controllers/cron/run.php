<?php

	class Crun{
			
		function run_sections(){
			$array = array(
				array("cron", "cron", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>