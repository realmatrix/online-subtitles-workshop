<?php

	class Cadd{
			
		function add_sections(){
			$array = array(
				array("video", "AddVideo", self::add_args(), TRUE),
			);
			return $array;
		}
		
		function add_args(){
			$args = $_POST;
			return $args;
		}	
			
	}

	
?>