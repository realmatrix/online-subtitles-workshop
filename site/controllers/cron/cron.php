<?php

	class Ccron{
		
		public static $content = "aaaaaaaaaa";
	
		function cron(){
			return self::cron_content();
		}
	
		function cron_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function cron_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function cron_content(){
				$content = array
				  (
				  array("{content}", self::$content),
				 );
			 
		return $content;
		}
		
		function ClearLoginBan(){
			
		}
		

	
			
	}
	
	
	
?>