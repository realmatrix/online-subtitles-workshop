<?php

	class CViewVideo{
		
		function ViewVideo(){
			return self::ViewVideo_content();
		}
	
		function ViewVideo_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
		
		function ViewVideo_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewVideo_content(){
				$content = array
				  (
				  array("{test}", "test"),
				 );
			 
		return $content;
		}

}