<?php

	class Cforums{
			
		function forums_sections(){
			$array = array(
				array("forum", "ListCategories", $GLOBALS['vars'], TRUE),
				array("forum", "ListForums", $GLOBALS['vars'], self::CheckCat()),
			);
			return $array;
		}
		
		function forums_set(){
			$GLOBALS['vars']['PageTitle'] = "Forums";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("forums", "page=forum&sec=forums"),
				array("categories", "page=forum&sec=forums"),
			);
			
		}
		
		function CheckCat(){
			if($GLOBALS['vars']['cat']!=""){return TRUE;}else{return FALSE;}
		}	
			
	}

	
?>