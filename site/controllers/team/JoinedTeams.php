<?php

	class CJoinedTeams{
			
		function JoinedTeams(){
			return self::JoinedTeams_content();
		}
	
		function JoinedTeams_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function JoinedTeams_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function JoinedTeams_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("subtitle_JoinedTeams_title")),
				  array("{TableContent}", self::GetJoinedTeams()),
				 );
			 
		return $content;
		}
		
		function GetJoinedTeams(){
			$args = array(
				array(":uid", $_SESSION['id'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `teamusers` WHERE `uid` = :uid AND `state` = 1", $args);
			$teams = "";
			for ($i=0; $i < count($res); $i++) {
				$TeamInfo = self::GetTeamInfo($res[$i]['tid']);
				$admin = $GLOBALS['system']->GetUserInfo("", $TeamInfo['owner']);
				$index = $i + 1; 
				$teams.= "<tr>";
				$teams.= "<td>".$index."</td>";
				$teams.= "<td>".$TeamInfo['title']."</td>";
				$teams.= "<td>".$admin[0]['username']."</td>";
				$teams.= "<td>".self::GetTeamUsers($res[$i]['tid'])."</td>";
				$teams.= "<td>".self::GetTeamSubtitles($res[$i]['tid'])."</td>";
				$teams.= "</tr>";
			}
			return $teams;
		}
		
		function GetTeamInfo($tid){
			$args = array(
				array(":tid", $tid, "str"),
			);
			$TeamInfo = $GLOBALS['system']->db_query("SELECT * FROM `teams` WHERE `id` = :tid", $args);
			return $TeamInfo[0];
		}
		
		function GetTeamUsers($tid){
			$args = array(
				array(":tid", $tid, "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `teamusers` WHERE `tid` = :tid", $args);
			return count($res);
		}
		
		function GetTeamSubtitles(){
			$args = array(
				array(":tid", $tid, "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `teamsubtitles` WHERE `tid` = :tid", $args);
			return count($res);
		}

		

	
			
	}
	
	
	
?>