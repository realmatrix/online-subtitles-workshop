<?php

	class CUserInvitations{
	/*
	 * state 0 invited
	 * 1 accepted
	 * -1 rejected
	 */		
		function UserInvitations(){
			return self::UserInvitations_content();
		}
	
		function UserInvitations_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function UserInvitations_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function UserInvitations_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_UserInvitations_title")),
				  array("{TableContent}", self::GetInvitations()),
				 );
			 
		return $content;
		}
		
		Function GetInvitations(){
			$args = array(
				array(":uid", $_SESSION['id'], "str"),
			);
			$invitations = $GLOBALS['COMMON']->db_query("SELECT * FROM `TeamUsers` WHERE `uid` = :uid and state = 0", $args);
			$res = "";
			for ($i=0; $i < count($invitations); $i++) {
				$count = $i + 1; 
				$TeamInfo = self::GetTeamInfo($invitations[$i]['tid']);
				$InviterInfo = $GLOBALS['COMMON']->GetUserInfo("", $TeamInfo['owner']);
				$res.= "<tr>";
				$res.="<td>".$count."</td>";
				$res.="<td>".$InviterInfo[0]['username']."</td>";
				$res.="<td>".$TeamInfo['title']."</td>";
				$res.="<td><a href='index.php?page=team&sec=joined&h=accept'>Accept</a></td>";
				$res.="<td><a href='index.php?page=team&sec=joined&h=reject'>Reject</a></td>";
				$res.="<td>".self::state($invitations[$i]['state'])."</td>";
				$res.= "</tr>";
			}
			return $res;
		}
		
		function GetTeamInfo($tid){
			$args = array(
				array(":tid", $tid, "str"),
			);
			$TeamInfo = $GLOBALS['COMMON']->db_query("SELECT * FROM `Teams` WHERE `id` = :tid", $args);
			return $TeamInfo[0];
		}
		
		function State($s){
			if($s=="0"){$res = "waiting";}
			if($s=="1"){$res = "ACCEPTED";}
			if($s=="-1"){$res = "REJECTED";}
			return $res;
		}
		


		

	
			
	}
	
	
	
?>