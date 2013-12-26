<?php

	class CListMembers{
			
		function ListMembers(){
			return self::ListMembers_content();
		}
	
		function ListMembers_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ListMembers_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ListMembers_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_ListMembers_title")),
				  array("{tablecontent}", self::GetMembers()),
				 );
			 
		return $content;
		}
		
		function GetMembers(){
			$args = array(
				array(":tid", $GLOBALS['vars']['tid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `teamusers` WHERE `tid` = :tid", $args);
			$team = "";
			for ($i=0; $i < count($res); $i++) {
				$username = $GLOBALS['COMMON']->GetUserInfo("", $res[$i]['uid']);
				$counter = $i + 1; 
				$team.= "<tr>";
				$team.= "<td>".$counter."</td>";
				$team.= "<td>".$username[0]['username']."</td>";
				$team.= "<td>".self::state($res[$i]['state'])."</td>";
				$team.= "<td><a href='index.php'>delete</a></td>";
				$team.="</tr>";
			}
			return $team;
		}
		
		function state($s){
			if($s=="0"){return "waiting";}
			if($s=="1"){return "accepted";}
			if($s=="-1"){return "rejected";}
		}
		


		

	
			
	}
	
	
	
?>