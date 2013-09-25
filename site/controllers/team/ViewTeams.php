<?php

	class CViewTeams{
			
		function ViewTeams(){
			return self::ViewTeams_content();
		}
	
		function ViewTeams_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function ViewTeams_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewTeams_content(){
				$content = array
				  (
				  	array("{title}", $GLOBALS['COMMON']->l("team_ViewTeams_Title")),
				  	array("{TableRows}", self::GetTeams()),
				 );	 
		return $content;
		}
		
		function GetTeams(){
			$teams = $GLOBALS['COMMON']->GetUserTeams($_SESSION['id']);
			$res = "";
			for ($i=0; $i < count($teams); $i++) {
				$index = $i+1;
				$TeamMembers = $GLOBALS['COMMON']->GetTeamMembers($teams[$i]['id']);
				$res .= "<tr class='odd gradeX' >";
				$res .= "<td>".$index."</td>";
				$res .= "<td>".$teams[$i]['title']."</td>";
				$res .= "<td>".count($TeamMembers)."</td>";
				$res .= "<td><a href='index.php?page=team&sec=manage&tid=".$teams[$i]['id']."'>manage</a></td>";
				$res .= "<td><a href='index.php?page=team&sec=edit&tid=".$teams[$i]['id']."'>edit</a></td>";
				$res .= "<td><a href='index.php?page=team&sec=manage&tid=".$teams[$i]['id']."'>delete</a></td>";
				$res .= "</tr>";
			}
			return $res;
		}
			
	}
	
	
	
?>