<?php

	class Cadd{
			
		function add_sections(){
			$array = array(
				array("video", "AddVideo", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function add_set(){
			$GLOBALS['vars']['PageTitle'] = "Add Video";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
		}
		
			
	}

	
?>