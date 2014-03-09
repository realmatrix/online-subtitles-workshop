<?php

	class Clist{
			
		function list_sections(){
			$array = array(
				array("subtitle", "UserSubtitles", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function list_set(){
			$GLOBALS['vars']['PageTitle'] = "My Subtitles";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("My Subtitles", "page=subtitle&sec=list"),
			);
		}	
			
	}

	
?>