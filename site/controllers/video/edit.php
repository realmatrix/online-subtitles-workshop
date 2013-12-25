<?php

	class Cedit{
			
		function edit_sections(){
			$array = array(
				array("video", "EditVideo", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function edit_set(){
			$GLOBALS['vars']['PageTitle'] = "edit Video";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("video", "page=video&sec=list"),
				array("edit", "page=video&sec=edit"),
			);
		}
		
			
	}

	
?>