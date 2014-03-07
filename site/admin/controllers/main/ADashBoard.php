<?php

	class CADashBoard{
			
		function ADashBoard(){
			return self::ADashBoard_content();
		}
	
		function ADashBoard_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ADashBoard_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ADashBoard_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("ADashBoard_title")),
				  array("{ApprovedMembers}", self::GetApprovedMembers()),
				  array("{PendingMembers}", self::GetPendingMembers()),
				  array("{BannedMembers}", self::GetBannedMembers()),
				  array("{OnlineMembers}", self::GetOnlineMembers()),
				  array("{TotalTeams}", self::GetTotalTeams()),
				  array("{TotalMessages}", self::GetTotalSystemMessages()),
				 );
			 
		return $content;
		}
		
		function GetApprovedMembers(){
			$args = array(
				array(":group", "3", "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `Users` WHERE `group` = :group", $args);
			return count($res);
		}
		
		function GetPendingMembers(){
			$args = array(
				array(":group", "7", "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `Users` WHERE `group` = :group", $args);
			return count($res);
		}

		function GetBannedMembers(){
			$args = array(
				array(":group", "5", "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `Users` WHERE `group` = :group", $args);
			return count($res);
		}
				
		function GetOnlineMembers(){
			$args = array();
			$res = $GLOBALS['system']->db_query("SELECT * FROM `OnlineUsers`", $args);
			return count($res);
		}

		function GetTotalTeams(){
			$args = array();
			$res = $GLOBALS['system']->db_query("SELECT * FROM `Teams`", $args);
			return count($res);
		}
		
		function GetTotalSystemMessages(){
			$args = array();
			$res = $GLOBALS['system']->db_query("SELECT * FROM `PrivateMessages`", $args);
			return count($res);
		}		
			
			
	}
	
	
	
?>