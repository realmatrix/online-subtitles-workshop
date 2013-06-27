<?php

	class Cadvanced{
			
		function advanced_sections(){
			$array = array(
				array("search", "AdvancedSearch", $GLOBALS['vars'], TRUE),
				array("search", "SearchResults", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>