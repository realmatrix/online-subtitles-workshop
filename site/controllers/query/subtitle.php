<?php

	class Csubtitle{
			
		function subtitle_sections(){
			$array = array(
				array("query", "QuerySubtitle", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function subtitle_set(){
			$GLOBALS['vars']['PageTitle'] = "Home";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array();
		}	
			
	}

	
?>