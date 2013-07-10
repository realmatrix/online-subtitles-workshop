<?php

	class CUserPM{
			
		function UserPM(){
			return self::UserPM_content();
		}
	
		function UserPM_hooks(){
			$array = array(
				array("test", "test"),
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
				  array("{from}", $GLOBALS['COMMON']->l("subtitle_IserPM_from")),
				  array("{subject}", $GLOBALS['COMMON']->l("subtitle_IserPM_subject")),
				  array("{date}", $GLOBALS['COMMON']->l("subtitle_IserPM_date")),
				  array("{del}", $GLOBALS['COMMON']->l("subtitle_IserPM_del")),
				 );
			 
		return $content;
		}
		
		function GetPMS(){
			$args = array(
				array(":to", $_SESSION['id'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `PrivateMessages` WHERE `to` = :to", $args);
			$rows = "";
			for ($i=0; $i < count($res); $i++) { 
				$rows .= "<tr>";
				$rows .= "<td></td>";
				$rows .= "<td></td>";
				$rows .= "<td></td>";
				$rows .= "<td></td>";
				$rows .= "<td></td>";
				$rows .= "</tr>";
			}
			return $rows;
		}
		


		

	
			
	}
	
	
	
?>