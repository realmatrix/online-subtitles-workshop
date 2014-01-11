<?php

	class Cfind{
			
		function find_sections(){
			$array = array(
				array("users", "ManageUsers", $GLOBALS['vars'], TRUE),
				array("users", "FindUsers", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>