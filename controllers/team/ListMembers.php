<?php

	class CListMembers{
			
		function ListMembers(){
			return self::ListMembers_content();
		}
	
		function ListMembers_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ListMembers_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ListMembers_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_ListMembers_title")),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>