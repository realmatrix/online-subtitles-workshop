<?php

	class CSubtitleAddTeam{
			
		function SubtitleAddTeam(){
			return self::SubtitleAddTeam_content();
		}
	
		function SubtitleAddTeam_hooks(){
			$array = array(
				array("addteam", "AddTeam"),
			);
			return $array;
		}
			
		function SubtitleAddTeam_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SubtitleAddTeam_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("subtitle_SubtitleAddTeam_title")),
				  array("{UserTeams}", self::UserTeams()),
				  array("{sid}", $GLOBALS['vars']['sid']),
				 );
			 
		return $content;
		}
		
		function UserTeams(){
			$teams = $GLOBALS['system']->GetUserTeams($_SESSION['id']);
			$res = "";
			for ($i=0; $i < count($teams); $i++) { 
				$res .= "<option value='".$teams[$i]['id']."'>".$teams[$i]['title']."</option>";
			}
			return $res;
		}
		
		function AddTeam(){
			if($GLOBALS['vars']['tid']==""){
				$GLOBALS['ERROR'][] = "no team was selected.";
				return FALSE;
			}
			$TeamMembers = $GLOBALS['system']->GetTeamMembers($GLOBALS['vars']['tid']);
			$failed = 0;
			$success = 0;
			$exist = 0;
			for ($i=0; $i < count($TeamMembers); $i++) {
				if(self::CheckIfExist($GLOBALS['vars']['sid'], $TeamMembers[$i]['uid'])===FALSE){
				$args = array(
					array(":uid", $TeamMembers[$i]['uid'], "str"),
					array(":sid", $GLOBALS['vars']['sid'], "str"),
					array(":tid", $TeamMembers[$i]['tid'], "str"),
					array(":addlines", $TeamMembers[$i]['addlines'], "str"),
					array(":deletelines", $TeamMembers[$i]['deletelines'], "str"),
					array(":checklines", $TeamMembers[$i]['checklines'], "str"),
					array(":editlines", $TeamMembers[$i]['editlines'], "str"),
					array(":timing", $TeamMembers[$i]['timing'], "str"),
				);
				$res = $GLOBALS['system']->db_query("INSERT INTO `subtitlepermissions` (`uid`, `sid`, `tid`, `addlines`, `deletelines`, `checklines`, `editlines`, `timing`) VALUES (:uid, :sid, :tid, :addlines, :deletelines, :checklines, :editlines, :timing);", $args, $ExecState);
				if($ExecState===TRUE){$success++;}else{$failed++;}
			}else{
				$exist++;
			}
			}
			$GLOBALS['SUCCESS'][] = "Added Users: ".$success;
			$GLOBALS['SUCCESS'][] = "Already Exist: ".$exist;
			$GLOBALS['SUCCESS'][] = "Failed To Add: ".$failed;
		}
		
		function CheckIfExist($sid, $uid){
			$args = array(
				array(":sid", $sid, "str"),
				array(":uid", $uid, "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `subtitlepermissions` WHERE `sid` = :sid and `uid` = :uid", $args);
			if(count($res)>0){return TRUE;}else{return FALSE;}
		}
	
			
	}
	
	
	
?>