<?php

	class CUserPM{
			
		function UserPM(){
			return self::UserPM_content();
		}
	
		function UserPM_hooks(){
			$array = array(
				array("DelMsg", "DeleteMessages"),
			);
			return $array;
		}
			
		function UserPM_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function UserPM_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("subtitle_UserPM_title")),
				  array("{TableRows}", self::GetPMS()),
				  array("{from}", $GLOBALS['system']->l("message_UserPM_from")),
				  array("{subject}", $GLOBALS['system']->l("message_UserPM_subject")),
				  array("{date}", $GLOBALS['system']->l("message_UserPM_date")),
				  array("{del}", $GLOBALS['system']->l("message_UserPM_del")),
				  array("{submit}", $GLOBALS['system']->l("message_UserSubtitle_submit"))
				 );
			 
		return $content;
		}
		
		function GetPMS(){
			$args = array(
				array(":to", $_SESSION['id'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `privatemessages` WHERE `to` = :to", $args);
			$rows = "";
			$counter = 0;
			for ($i=0; $i < count($res); $i++) {
				$counter++; 
				$FromInfo = $GLOBALS['system']->GetUserInfo("", $res[$i]['from']);
				$from = $FromInfo[0]['username'];
				$rows .= "<tr>";
				$rows .= "<td>".$counter."</td>";
				$rows .= "<td><a href='index.php?page=message&sec=view&mid=".$res[$i]['id']."'>".$res[$i]['subject']."</a></td>";
				$rows .= "<td>".$from."</td>";
				$rows .= "<td>".$res[$i]['date']."</td>";
				$rows .= "<td><input type='checkbox' name='mid[]' value='".$res[$i]['id']."' /></td>";
				$rows .= "</tr>";
			}
			return $rows;
		}
		


		

	
			
	}
	
	
	
?>