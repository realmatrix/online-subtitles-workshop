<?php

	class Cview{
			
		function view_sections(){
			$array = array(
				array("message", "ViewMessage", $GLOBALS['vars'], TRUE),
				array("message", "Reply", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>