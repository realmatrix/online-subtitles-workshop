<?php

	class Cedit{
			
		function edit_sections(){
			$array = array(
				array("users", "ManageUsers", $GLOBALS['vars'], TRUE),
				array("users", "EditUsersForm", $GLOBALS['vars'], TRUE),
				array("users", "EditUsers", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>