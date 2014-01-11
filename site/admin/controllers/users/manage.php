<?php

	class Cmanage{
			
		function manage_sections(){
			$array = array(
				array("users", "ManageUsers", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>