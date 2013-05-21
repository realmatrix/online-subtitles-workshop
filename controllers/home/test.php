<?php

	class Ctest{
		
		function test(){
			return self::test_content();
		}
	
		function test_content(){
			$test = "this is controller test message";
			
				$content = array
				  (
				  array("{test}",$test),
				 );
			 
			 return $content;
		}
		
	}
	
	
	
?>