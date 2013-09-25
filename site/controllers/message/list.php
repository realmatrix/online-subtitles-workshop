<?php

	class Clist{
			
		function list_sections(){
			$array = array(
				array("message", "UserPM", $GLOBALS['vars'], TRUE),
				array("message", "SendPM", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>