<?php

	class Cabout{
			
		function about_sections(){
			$array = array(
				array("info", "AboutUs", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function about_set(){
			$GLOBALS['vars']['PageTitle'] = "About US";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
		}
			
	}

	
?>