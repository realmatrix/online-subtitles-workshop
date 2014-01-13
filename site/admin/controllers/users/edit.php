<?php

	class Cedit{
			
		function edit_sections(){
			$array = array(
				array("users", "ManageUsers", $GLOBALS['vars'], TRUE),
				array("users", "EditUsersForm", $GLOBALS['vars'], TRUE),
				array("users", "EditUsers", $GLOBALS['vars'], self::ShowEditUsers()),
			);
			return $array;
		}
		
		function ShowEditUsers(){
			if($GLOBALS['vars']['username']!=""){return TRUE;}else{return FALSE;}
		}
			
	}


?>