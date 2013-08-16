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
				  array(" {TableContent}", self::GetInvitations()),
				 );
			 
		return $content;
		}
		
		Function GetInvitations(){
			$args = array(
				array(":uid", $_SESSION['id'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `TeamUsers` WHERE `uid` = :uid", $args);
			print_r($res);
		}
		


		

	
			
	}
	
	
	
?>