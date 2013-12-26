<?php

	class CUserTeams{
		
		function UserTeams(){
			return self::UserTeams_content();
		}
	
		function UserTeams_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
		
		function UserTeams_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function UserTeams_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("team_UserTeams_title")),
				  array("{TableRows}", self::GetUserTeams()),
				 );
			 
		return $content;
		}
		
		function GetUserTeams(){
			$args = array(
				array(":uid", $_SESSION['id'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `teams` WHERE `owner` = :uid", $args);
			$rows = "";
			$counter = 0;
			for ($i=0; $i < count($res); $i++) { 
				$counter++;
				$rows .= "<tr>";
				$rows .= "<td>".$counter."</td>";
				$rows .= "<td><a href='index.php?page=team&sec=info&tid=".$res[$i]['id']."'>".$res[$i]['title']."</a></td>";
				$rows .= "</tr>";
			}
			return $rows;
		}



}