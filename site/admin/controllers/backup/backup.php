<?php

	class Cbackup{
			
		function backup_sections(){
			$array = array(
				array("backup", "ManageBackup", $GLOBALS['vars'], TRUE),
				array("backup", "BackupSystem", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function Showbackup(){
			if($GLOBALS['vars']['lang']!=""){return TRUE;}else{return FALSE;}
		}
			
	}


?>