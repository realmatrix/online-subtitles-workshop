<?php

	class CUserProfile{
			
		function UserProfile(){
			return self::UserProfile_content();
		}
	
		function UserProfile_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function UserProfile_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function UserProfile_content(){
			$UserInfo = self::GetUserInfo();
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l('team_UserProfile_title')),
				  array("{JoinDate}", $UserInfo[0]['RegisterationDate']),
				  array("{LastLogin}", $UserInfo[0]['LastLogin']),
				  array("{NickName}", $UserInfo[0]['username']),
				  array("{Gender}", $UserInfo[0]['gender']),
				  array("{DateOfBirth}", $UserInfo[0]['birthdate']),
				 );
			 
		return $content;
		}
		
		function GetUserInfo(){
			$args = array(
				array(":uid", $GLOBALS['vars']['u'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM users WHERE id = :uid", $args);
			return $res;
		}
	
			
	}
	
	
	
?>