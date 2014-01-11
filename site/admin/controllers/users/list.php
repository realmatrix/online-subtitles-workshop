<?php

	class Clist{
			
		function list_sections(){
			$array = array(
				array("users", "ManageUsers", $GLOBALS['vars'], TRUE),
				array("users", "ListUsers", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>