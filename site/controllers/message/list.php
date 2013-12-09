<?php

	class Clist{
			
		function list_sections(){
			$array = array(
				array("message", "UserPM", $GLOBALS['vars'], TRUE),
				array("message", "SendPM", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function list_set(){
			$GLOBALS['vars']['PageTitle'] = "Private Messages";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("messages", "page=message&sec=list"),
			);
		}
			
	}

	
?>