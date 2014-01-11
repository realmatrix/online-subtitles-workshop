<?php

	class Cstatistics{
			
		function statistics_sections(){
			$array = array(
				array("users", "ManageUsers", $GLOBALS['vars'], TRUE),
				array("users", "UsersStatistics", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>