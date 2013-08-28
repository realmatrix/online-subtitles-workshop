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
			$info = file_get_contents("phpinfo.php");
				$content = array
				  (
				  array("{info}", $info),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>