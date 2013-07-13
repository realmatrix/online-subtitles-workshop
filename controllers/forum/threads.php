<?php

	class Cthreads{
			
		function threads_sections(){
			$array = array(
				array("forum", "ListThreads", $GLOBALS['vars'], self::ListThreads()),
				array("forum", "ViewThread", $GLOBALS['vars'], self::ViewThread()),
			);
			return $array;
		}
		
		function ListThreads(){
			if($GLOBALS['vars']['tid']!=""){return FALSE;}else{return TRUE;}
		}
		
		function ViewThread(){
			if($GLOBALS['vars']['tid']!=""){return TRUE;}else{return FALSE;}
		}
			
	}

	
?>