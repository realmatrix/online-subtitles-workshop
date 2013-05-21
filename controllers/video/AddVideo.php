<?php

	class CAddVideo{
		
		function AddVideo(){
			return self::AddVideo_content();
		}
	
		function AddVideo_content(){
			$test = "this is controller test message";
			
				$content = array
				  (
				  array("{test}",$test),
				 );
			 
			 return $content;
		}
		
	}
	
	
	
?>