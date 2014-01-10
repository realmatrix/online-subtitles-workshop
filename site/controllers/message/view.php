<?php

	class Cview{
			
		function view_sections(){
			$array = array(
				array("message", "ViewMessage", $GLOBALS['vars'], TRUE),
				array("message", "ReplyMessage", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function view_set(){
			$GLOBALS['vars']['PageTitle'] = "Private Messages";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("messages", "page=message&sec=list"),
			);
		}
			
	}

	
?>