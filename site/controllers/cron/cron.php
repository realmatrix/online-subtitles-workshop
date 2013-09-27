<?php

	class Ccron{
		
		public static $content = "Cron started.";
	
		function cron(){
			return self::cron_content();
		}
	
		function cron_hooks(){
			$array = array(
				array("runall", "RunAll"),
				array("userkeys", "UpdateUserKeys"),
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
		
		function RunAll(){
			self::UpdateUserKeys();
			echo "done";
		}
		
		function ClearLoginBan(){
			
		}
		
		function UpdateUserKeys(){
			$GLOBALS['COMMON']->UpdateUsersKeys();
		}
		

	
			
	}
	
	
	
?>