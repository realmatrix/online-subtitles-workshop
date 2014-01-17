<?php

	class Cmanage{
			
		function manage_sections(){
			$array = array(
				array("language", "ManageLanguage", $GLOBALS['vars'], TRUE),
				array("language", "EditSelectLanguage", $GLOBALS['vars'], self::ShowEditSelect()),
			);
			return $array;
		}
		
		Function ShowEditSelect(){
			if($GLOBALS['vars']['sec']=="manage"){return TRUE;}else{return FALSE;}
		}
			
	}


?>