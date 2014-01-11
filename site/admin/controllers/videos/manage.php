<?php

	class Cmanage{
			
		function manage_sections(){
			$array = array(
				array("videos", "ManageVideos", $GLOBALS['vars'], TRUE),
				array("videos", "VideosStatistics", $GLOBALS['vars'], self::ViewStatistics()),
			);
			return $array;
		}
		
		function ViewStatistics(){
			if($GLOBALS['vars']['sec']=="manage"){return TRUE;}else{return FALSE;}
		}
			
	}


?>