<?php

	class Cadd{
			
		function add_sections(){
			$array = array(
				array("users", "ManageUsers", $GLOBALS['vars'], TRUE),
				array("users", "AddUsers", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>