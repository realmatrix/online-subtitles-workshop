<?php

	class Cmanage{
			
		function manage_sections(){
			$array = array(
				array("widgets", "ManageWidgets", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
			
	}


?>