<?php

	class Cadd{
			
		function add_sections(){
			$array = array(
				array("videos", "ManageVideos", $GLOBALS['vars'], TRUE),
				array("videos", "AddVideos", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>