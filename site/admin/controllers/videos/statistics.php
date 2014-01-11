<?php

	class Cstatistics{
			
		function statistics_sections(){
			$array = array(
				array("videos", "ManageVideos", $GLOBALS['vars'], TRUE),
				array("videos", "VideosStatistics", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>