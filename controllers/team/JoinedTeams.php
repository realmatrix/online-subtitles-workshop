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
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_JoinedTeams_title")),
				  array("{TableContent}", self::GetJoinedTeams()),
				 );
			 
		return $content;
		}
		
		function GetJoinedTeams(){
			$args = array(
				array(":uid", $_SESSION['id'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `TeamUsers` WHERE `uid` = :uid AND `state` = 1", $args);
			$teams = "";
			for ($i=0; $i < count($res); $i++) {
				$TeamInfo = self::GetTeamInfo($res[$i]['tid']);
				$index = $i + 1; 
				$teams.= "<tr>";
				$teams.= "<td>".$index."</td>";
				$teams.= "<td></td>";
				$teams.= "<td></td>";
				$teams.= "<td></td>";
				$teams.= "<td></td>";
				$teams.= "</tr>";
			}
			return $teams;
		}
		
		function GetTeamInfo($tid){
			$args = array(
				array(":tid", $tid, "str"),
			);
			$TeamInfo = $GLOBALS['COMMON']->db_query("SELECT * FROM `Teams` WHERE `id` = :tid", $args);
			return $TeamInfo[0];
		}

		

	
			
	}
	
	
	
?>