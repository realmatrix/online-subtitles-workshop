<?php

	class Ccontact{
			
		function contact_sections(){
			$array = array(
				array("message", "ContactUs", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
		
		function contact_set(){
			$GLOBALS['vars']['PageTitle'] = "Contact Us";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
		}
			
	}

	
?>