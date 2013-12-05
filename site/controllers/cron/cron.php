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
			self::AutoTranslation();
		}
		
		function ClearLoginBan(){
			
		}
		
		function UpdateUserKeys(){
			$GLOBALS['COMMON']->UpdateUsersKeys();
		}
		
		function AutoTranslation(){
			$lines = $GLOBALS['COMMON']->db_query("SELECT * FROM `TranslationQueue` order by `id` ASC limit 10", array());
				for ($i=0; $i < count($lines); $i++) { 
					$args = array(
						array(":sid", $lines[$i]['sid'], "str"),
						array(":cid", $lines[$i]['cid'], "str"),
						array(":lid", $lines[$i]['lid'], "str"),
					);
				$LineInfo = $GLOBALS['COMMON']->db_query("SELECT * FROM `SubtitlesContent` WHERE `sid` = :sid and `cid` = :cid and `id` = :lid ", $args);
				}
		}
		

	
			
	}
	
	
	
?>