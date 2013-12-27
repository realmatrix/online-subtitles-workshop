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
				if($TeamInfo[$i]['state']=="1"){$state="active";}
				if($TeamInfo[$i]['state']=="0"){$state="waiting approval";} 
				$res .= "<tr>";
				$res .= "<td>".$GLOBALS['COMMON']->GetUserName($TeamInfo[$i]['uid'])."</td>";
				$res .= "<td><a href='index.php?page=message&sec=send&uid=".$TeamInfo[$i]['uid']."'>send message</a></td>";
				$res .= "<td>".$state."</td>";
				$res .= "<td>".$TeamInfo[$i]['addlines']."</td>";
				$res .= "<td>".$TeamInfo[$i]['deletelines']."</td>";
				$res .= "<td>".$TeamInfo[$i]['editlines']."</td>";
				$res .= "<td>".$TeamInfo[$i]['checklines']."</td>";
				$res .= "<td><a href='index.php?page=team&sec=edit&uid=".$TeamInfo[$i]['uid']."'>edit</a></td>";
				$res .= "<td><a href='index.php?'>remove</a></td>";
				$res .= "</tr>";
			}
			return $res;
		}
		
	
			
	}
	
	
	
?>