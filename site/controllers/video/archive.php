<?php

	class Carchive{
			
		function archive_sections(){
			$array = array(
				array("video", "ListAllVideos", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function archive_set(){
			$GLOBALS['vars']['PageTitle'] = "video archive";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("videos", "page=video&sec=archive"),
				array("archive", "page=video&sec=archive"),
			);
		}
		
			
	}

	
?>