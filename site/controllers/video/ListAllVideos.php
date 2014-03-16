<?php

	class CListAllVideos{
		
		function ListAllVideos(){
			return self::ListAllVideos_content();
		}
	
		function ListAllVideos_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
		
		function ListAllVideos_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function ListAllVideos_content(){
				$content = array
				  (
				  array("test", "test"),
				 );			 
		return $content;
		}



		

		

}