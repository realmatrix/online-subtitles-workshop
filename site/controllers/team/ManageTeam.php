<?php

	class CManageTeam{
			
		function ManageTeam(){
			return self::ManageTeam_content();
		}
	
		function ManageTeam_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function ManageTeam_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ManageTeam_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l('team_ManageTeam_title')),
				  array("{TableRows}", self::GetTeam()),
				 );
			 
		return $content;
		}
		
		function GetTeam(){
			$TeamInfo = $GLOBALS['COMMON']->GetTeamMembers($GLOBALS['vars']['tid']);
			$res = "";
			for ($i=0; $i < count($TeamInfo); $i++) { 
				$res .= "<tr>";
				$res .= "<td>".$TeamInfo[$i]['uid']."</td>";
				$res .= "<td><a href='index.php?page=message&sec=send&uid=".$TeamInfo[$i]['uid']."'>send message</a></td>";
				$res .= "<td>state</td>";
				$res .= "<td><a href='index.php?'>remove</a></td>";
				$res .= "</tr>";
			}
			return $res;
		}
		
	
			
	}
	
	
	
?>