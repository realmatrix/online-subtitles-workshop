<?php

	class Cforums{
			
		function forums_sections(){
			$array = array(
				array("forum", "ListCategories", $GLOBALS['vars'], TRUE),
				array("forum", "ListForums", $GLOBALS['vars'], self::CheckCat()),
			);
			return $array;
		}
		
		function CheckCat(){
			if($GLOBALS['vars']['cat']!=""){return TRUE;}else{return FALSE;}
		}	
			
	}

	
?>