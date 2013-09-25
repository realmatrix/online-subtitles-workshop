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
			$info = file_get_contents(self::curPageURL()."/phpinfo.php");
			$info = self::GetHtmlBody($info);
				$content = array
				  (
				  array("{info}", $info),
				 );
			 
		return $content;
		}
		
		function curPageURL() {
			 $pageURL = 'http';
			 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
			 $pageURL .= "://";
			 if ($_SERVER["SERVER_PORT"] != "80") {
			  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			 } else {
			  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			 }
			 $pageURL = substr($pageURL, 0, strrpos($pageURL, "/"));
			 return $pageURL;
		}
		
		function GetHtmlBody($text){
			if (preg_match('~<body[^>]*>(.*?)</body>~si', $text, $body))
			{			
			    return $body[1];
			}
		}


		

	
			
	}
	
	
	
?>