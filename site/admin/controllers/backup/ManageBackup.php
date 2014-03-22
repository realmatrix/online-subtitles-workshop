<?php

	class CManageBackup{
		
		public static $SearchResult = "";
			
		function ManageBackup(){
			return self::ManageBackup_content();
		}
	
		function ManageBackup_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function ManageBackup_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ManageBackup_content(){
			$content = array
			  (
			  array("{test}", "test"),
			 );
		return $content;
		}
		
		
	}
	

	
?>