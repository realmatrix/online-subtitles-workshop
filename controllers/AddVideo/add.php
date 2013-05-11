<?php

	function add(){
		return add_content();
	}
	
	function add_content(){
		$test = "this is controller test message";
		
			$content = array
			  (
			  array("{test}",$test),
			 );
		 
		 return $content;
	}	
	
	
?>