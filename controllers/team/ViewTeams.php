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
			for ($i=0; $i <= count($teams); $i++) {
				$index = $i+1;
				$res .= "<tr class='odd gradeX' >";
				$res .= "<td>".$index."</td>";
				$res .= "<td>".$teams[$i]['title']."</td>";
				$res .= "<td>"."</td>";
				$res .= "<td>"."</td>";
				$res .= "<td>"."</td>";
				$res .= "<td>"."</td>";
				$res .= "</tr>";
			}
			return $res;
		}
			
	}
	
	
	
?>