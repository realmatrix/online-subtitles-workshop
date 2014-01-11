<?php

	class Clist{
			
		function list_sections(){
			$array = array(
				array("videos", "ManageVideos", $GLOBALS['vars'], TRUE),
				array("videos", "ListVideos", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>