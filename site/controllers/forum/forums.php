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
				array("test 1", "page=a&sec=b"),
				array("test 2", "page=c&sec=d"),
				array("test 3", "page=e&sec=f"),
			);
			
		}
		
		function CheckCat(){
			if($GLOBALS['vars']['cat']!=""){return TRUE;}else{return FALSE;}
		}	
			
	}

	
?>