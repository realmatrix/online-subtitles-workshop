<?php

	class CPHPinformation{
			
		function PHPinformation(){
			return self::PHPinformation_content();
		}
	
		function PHPinformation_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function PHPinformation_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function PHPinformation_content(){
				$content = array
				  (
				  array("{info}", phpinfo()),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>