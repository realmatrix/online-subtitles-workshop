<?php

	class Cview{
			
		function view_sections(){
			$array = array(
				array("message", "ViewMessage", $GLOBALS['vars'], TRUE),
				array("message", "ReplyMessage", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>