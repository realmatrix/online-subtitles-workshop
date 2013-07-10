<?php

	class Clist{
			
		function list_sections(){
			$array = array(
				array("video", "VideoList", $GLOBALS['vars'], TRUE),
				array("video", "AddVideo", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>