<?php

	class Cview{
			
		function view_sections(){
			$array = array(
				array("video", "ViewVideo", self::view_args()),
			);
			return $array;
		}
		
		function view_args(){
			$args = array(
				array("vid", $_GET['vid']),
			);
			return $args;
		}	
			
	}

	
?>