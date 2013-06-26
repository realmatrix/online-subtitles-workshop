<?php

	class CViewPlayer{
			
		function ViewPlayer(){
			return self::ViewPlayer_content();
		}
	
		function ViewPlayer_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function ViewPlayer_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"both",
			);
			return $options;
		}
				
		function ViewPlayer_content(){
				$content = array
				  (
				  array("{test}", $test),
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>