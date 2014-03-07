<?php

	class CViewUser{
		
		public static $SearchResult = array();
			
		function ViewUser(){
			return self::ViewUser_content();
		}
	
		function ViewUser_hooks(){
			$array = array(
				array("view", "GetUserInfo"),
			);
			return $array;
		}
			
		function ViewUser_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewUser_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_ViewUser_title")),
			  array("{Cusername}", self::$SearchResult[0]['username']),
			  array("{Cemail}", self::$SearchResult[0]['email']),
			  array("{Cuserid}", self::$SearchResult[0]['id']),
			  array("{Ccurrentkey}", self::$SearchResult[0]['key']),
			  array("{Cgroup}", $GLOBALS['system']->GetUserGroupByID(self::$SearchResult[0]['group'])),
			  array("{Clastlogin}", date("l jS F Y \@ g:i a",self::$SearchResult[0]['LastLogin'])),
			  array("{Cbirthdate}", date("l jS F Y",strtotime(self::$SearchResult[0]['birthdate']))),
			  array("{Cemailverified}", self::$SearchResult[0]['EmailVerification']),
			  array("{Ctotalvideos}", count($GLOBALS['system']->GetUserVideos(self::$SearchResult[0]['id']))),
			  array("{Cfaviuritevideos}", count($GLOBALS['system']->GetUserFavouriteVideosByID(self::$SearchResult[0]['id']))),
			  array("{Ccreatedteams}", count($GLOBALS['system']->GetUserTeams(self::$SearchResult[0]['id']))),
			  array("{Cfavouritesubtitles}", count($GLOBALS['system']->GetUserFavouriteSubtitlesByID(self::$SearchResult[0]['id']))),
			  array("{Ctotalsubtitles}", count($GLOBALS['system']->GetUserSubtitles(self::$SearchResult[0]['id']))),
			  array("{Cusername}", self::$SearchResult[0]['username']),
			  array("{Cjoinedgroups}", self::GetUserJoinedTeams($SearchResult[0]['id'])),
			 );
		return $content;
		}
		
		function GetUserInfo(){
			if($GLOBALS['vars']['username']!=""){
				$args = array(
					array(":username", $GLOBALS['vars']['username'], "str"),
				);
				$res = $GLOBALS['system']->db_query("SELECT * FROM `users` WHERE `username` = :username", $args);
				self::$SearchResult = $res;
			}
		}
		
		function GetUserJoinedTeams($uid){
			$args = array(
				array(":uid", $uid, "str")
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `teamusers` WHERE `uid` = :uid AND `state` = 1", $args);
			return count($res);
		}
					
			
	}
	
	
	
?>