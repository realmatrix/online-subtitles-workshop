<?php

	class Cfind{
			
		function find_sections(){
			$array = array(
				array("videos", "ManageVideos", $GLOBALS['vars'], TRUE),
				array("videos", "FindVideos", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>