<?php

	class Cphpinfo{
			
		function phpinfo_sections(){
			$array = array(
				array("main", "PHPinformation", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>