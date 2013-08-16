<?php

	class Cinfo{
			
		function info_sections(){
			$array = array(
				array("team", "ListSubtitles", $GLOBALS['vars'], TRUE),
				array("team", "ListMembers", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>