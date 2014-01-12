<?php

	class Cview{
			
		function view_sections(){
			$array = array(
				array("users", "ManageUsers", $GLOBALS['vars'], TRUE),
				array("users", "ViewUserForm", $GLOBALS['vars'], TRUE),
				array("users", "ViewUser", $GLOBALS['vars'], self::ShowViewUser()),
			);
			return $array;
		}
		
		function ShowViewUser(){
			if($GLOBALS['vars']['ssec']=="ViewUser"){return TRUE;}else{return FALSE;}
		}
			
	}


?>