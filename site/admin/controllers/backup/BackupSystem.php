<?php

	class CBackupSystem{
		
		public static $SearchResult = "";
			
		function BackupSystem(){
			return self::BackupSystem_content();
		}
	
		function BackupSystem_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function BackupSystem_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function BackupSystem_content(){
			$content = array
			  (
			  array("{test}", "test"),
			 );
		return $content;
		}
		
		
	}
	

	
?>