<?php

	class Clist{
			
		function list_sections(){
			$array = array(
				array("video", "VideoList", $GLOBALS['vars'], TRUE),
				array("video", "AddVideo", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function list_set(){
			$GLOBALS['vars']['PageTitle'] = "My Videos";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("my videos", "page=video&sec=list")
			);
		}
			
	}

	
?>