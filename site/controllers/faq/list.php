<?php

	class Clist{
			
		function list_sections(){
			$array = array(
				array("faq", "FaqList", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function list_set(){
			$GLOBALS['vars']['PageTitle'] = "Frequently Asked Questions";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
		}
			
	}

	
?>