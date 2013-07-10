<?php

	class Cumsg{
			
		function umsg_sections(){
			$array = array(
				array("message", "SendPM", $GLOBALS['vars'], TRUE),
				array("message", "UserPM", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>