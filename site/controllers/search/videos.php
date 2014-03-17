<?php

	class Cvideos{
			
		function videos_sections(){
			$array = array(
				array("search", "VideoSearch", $GLOBALS['vars'], TRUE),
				array("search", "VideoSearchResults", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function videos_set(){
			$GLOBALS['vars']['PageTitle'] = "Search Videos";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("search", "page=search&sec=videos"),
				array("videos", "page=search&sec=videos"),
			);
		}
			
	}

	
?>