<?php

	class CEditUsers{
		
		public static $SearchResult = "";
			
		function EditUsers(){
			return self::EditUsers_content();
		}
	
		function EditUsers_hooks(){
			$array = array(
				array("edit", "EditUser"),
			);
			return $array;
		}
			
		function EditUsers_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditUsers_content(){
			self::$SearchResult = self::GetUserInformation();
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_EditUsers_title")),
			  array("{page}", $GLOBALS['vars']['page']),
			  array("{sec}", $GLOBALS['vars']['sec']),
			  array("{tusername}", $GLOBALS['vars']['username']),
			  array("{UserGroups}", self::GetUserGroups(self::$SearchResult[0]['group'])),
			 );
		return $content;
		}
		
		function GetUserGroups($SelectedID){
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `groups`", array());
			$options = "<option value=''></option>";
			for ($i=0; $i < count($res); $i++) {
				if($SelectedID == $res[$i]['id']){$selected = "selected='selected'";}else{$selected = "";} 
				$options.="<option value='".$res[$i]['id']."' ".$selected.">".$res[$i]['group']."</option>";
			}
			return $options;
		}
		
		function EditUser(){
			if($GLOBALS['vars']['username']!="" and $GLOBALS['vars']['savechanges']=="yes"){
				
			}
		}
		
		function GetUserInformation(){
			$args = array(
				array(":username", $GLOBALS['vars']['username'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `users` WHERE `username` = :username", $args);
			return $res;
		}
					
			
	}
	
	
	
?>