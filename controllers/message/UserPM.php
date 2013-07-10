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
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_UserPM_title")),
				  array("{TableRows}", self::GetPMS()),
				  array("{from}", $GLOBALS['COMMON']->l("message_UserPM_from")),
				  array("{subject}", $GLOBALS['COMMON']->l("message_UserPM_subject")),
				  array("{date}", $GLOBALS['COMMON']->l("message_UserPM_date")),
				  array("{del}", $GLOBALS['COMMON']->l("message_UserPM_del")),
				  array("{submit}", $GLOBALS['COMMON']->l("message_UserSubtitle_submit"))
				 );
			 
		return $content;
		}
		
		function GetPMS(){
			$args = array(
				array(":to", $_SESSION['id'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `PrivateMessages` WHERE `to` = :to", $args);
			$rows = "";
			$counter = 0;
			for ($i=0; $i < count($res); $i++) {
				$counter++; 
				$FromInfo = $GLOBALS['COMMON']->GetUserInfo("", $res[$i]['from']);
				$from = $FromInfo[0]['username'];
				$rows .= "<tr>";
				$rows .= "<td>".$counter."</td>";
				$rows .= "<td>".$from."</td>";
				$rows .= "<td>".$res[$i]['subject']."</td>";
				$rows .= "<td>".$res[$i]['date']."</td>";
				$rows .= "<td><input type='checkbox' name='mid[]' value='".$res[$i]['id']."' /></td>";
				$rows .= "</tr>";
			}
			return $rows;
		}
		


		

	
			
	}
	
	
	
?>