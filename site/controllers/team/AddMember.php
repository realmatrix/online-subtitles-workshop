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
				  array("{title}", $GLOBALS['system']->l('team_AddMember_title')),
				  array("{username}", $GLOBALS['system']->l('team_AddMember_username')),
				  array("{submit}", $GLOBALS['system']->l('team_AddMember_submit')),
				  array("{tid}", $GLOBALS['vars']['tid'])
				 );
			 
		return $content;
		}
		
		function AddUser(){
			if(isset($GLOBALS['vars']['add']) and $GLOBALS['vars']['add']=="yes"){$add="1";}else{$add="0";}
			if(isset($GLOBALS['vars']['delete']) and $GLOBALS['vars']['delete']=="yes"){$delete="1";}else{$delete="0";}
			if(isset($GLOBALS['vars']['edit']) and $GLOBALS['vars']['edit']=="yes"){$edit="1";}else{$edit="0";}
			if(isset($GLOBALS['vars']['check']) and $GLOBALS['vars']['check']=="yes"){$check="1";}else{$check="0";}
			if(isset($GLOBALS['vars']['timing']) and $GLOBALS['vars']['timing']=="yes"){$timing="1";}else{$timing="0";}
			if($GLOBALS['vars']['tusername']==""){
				$GLOBALS[ERROR][]="username is required";
				return FALSE;
			}
			$uid = $GLOBALS['system']->GetUserInfo($GLOBALS['vars']['tusername'], "");
			$args = array(
				array(":tid", $GLOBALS['vars']['tid'], "str"),
				array(":uid", $uid[0]['id'], "str"),
				array(":state", "1", "str"),
				array(":add", $add, "str"),
				array(":delete", $delete, "str"),
				array(":edit", $edit, "str"),
				array(":check", $check, "str"),
				array(":timing", $timing, "str"),
			);
			$res = $GLOBALS['system']->db_query("INSERT INTO `teammembers` (`tid`, `uid`, `state`, `addlines`, `deletelines`, `checklines`, `editlines`, `timing`) VALUES (:tid, :uid, :state, :add, :delete, :check, :edit, :timing);", $args);
		}
		
	
			
	}
	
	
	
?>