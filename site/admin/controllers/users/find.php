<?php

	class Cfind{
			
		function find_sections(){
			$array = array(
				array("users", "ManageUsers", $GLOBALS['vars'], TRUE),
				array("users", "FindUsersForm", $GLOBALS['vars'], TRUE),
				array("users", "FindUsers", $GLOBALS['vars'], self::ShowResults()),
			);
			return $array;
		}
		
		function ShowResults(){
			if($GLOBALS['vars']['ssec']=="FindUsers"){return TRUE;}else{return FALSE;}
		}
			
	}


?>