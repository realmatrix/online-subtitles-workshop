<?php

	class Cforums{
			
		function forums_sections(){
			$array = array(
				array("forum", "ListCategories", $GLOBALS['vars'], TRUE),
				array("forum", "ListForums", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}	
			
	}

	
?>