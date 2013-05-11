<?php

	function home(){
		return home_content();
	}
	
	function home_content(){
		$test = "this is controller test message";
		
			$content = array
			  (
			  array("{test}",$test),
			 );
		 
		 return $content;
	}	
	
	
?>