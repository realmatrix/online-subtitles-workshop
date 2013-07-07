<?php

	class CListForums{
	
		function ListForums(){
			return self::ListForums_content();
		}
	
		function ListForums_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function ListForums_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function ListForums_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("forum_ListForums_title")),
				 );
			 
		return $content;
		}
	
			
	}
	
	
	
?>