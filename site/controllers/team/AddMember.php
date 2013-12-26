<?php

	class CAddMember{
			
		function AddMember(){
			return self::AddMember_content();
		}
	
		function AddMember_hooks(){
			$array = array(
				array("adduser", "AddUser")
			);
			return $array;
		}
			
		function AddMember_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function AddMember_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l('team_AddMember_title')),
				  array("{username}", $GLOBALS['COMMON']->l('team_AddMember_username')),
				  array("{submit}", $GLOBALS['COMMON']->l('team_AddMember_submit')),
				  array("{tid}", $GLOBALS['vars']['tid'])
				 );
			 
		return $content;
		}
		
		function AddUser(){
			if($GLOBALS['vars']['tusername']==""){
				$GLOBALS[ERROR][]="username is required";
				return FALSE;
			}
			$uid = $GLOBALS['COMMON']->GetUserInfo($GLOBALS['vars']['tusername'], "");
			$args = array(
				array(":tid", $GLOBALS['vars']['tid'], "str"),
				array(":uid", $uid[0]['id'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("INSERT INTO `teamusers` (`tid`, `uid`) VALUES (:tid, :uid);", $args);
		}
		
	
			
	}
	
	
	
?>