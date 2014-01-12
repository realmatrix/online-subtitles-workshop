<?php

	class CUsersStatistics{
			
		function UsersStatistics(){
			return self::UsersStatistics_content();
		}
	
		function UsersStatistics_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function UsersStatistics_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function UsersStatistics_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_UsersStatistics_title")),
			  array("{OnlineMembers}", self::GetOnlineMembers()),
			  array("{ApprovedMembers}", self::GetApprovedMembers()),
			  array("{PendingMembers}", self::GetPendingMembers()),
			  array("{BannedMembers}", self::GetBannedMembers()),
			 );
		return $content;
		}
		
		function GetOnlineMembers(){
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `onlineusers`", array());
			return count($res);
		}
		
		function GetApprovedMembers(){
			$args = array(
				array(":group", "3", "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Users` WHERE `group` = :group", $args);
			return count($res);
		}
		
		function GetPendingMembers(){
			$args = array(
				array(":group", "7", "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Users` WHERE `group` = :group", $args);
			return count($res);
		}

		function GetBannedMembers(){
			$args = array(
				array(":group", "5", "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Users` WHERE `group` = :group", $args);
			return count($res);
		}
					
			
	}
	
	
	
?>