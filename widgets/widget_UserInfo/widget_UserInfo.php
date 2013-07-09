<?php

	class Wwidget_UserInfo{
		
		function widget_UserInfo(){
			return self::widget_UserInfo_render();
		}
	
		function widget_UserInfo_options(){
			$options = array(
			"show"=>array(), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"yes", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_UserInfo_render(){
			$array = array(
				array("{WelcomeBack}", $GLOBALS['COMMON']->l('login_welcomeback')),
				array("{UserName}", $_SESSION['username']),
				array("{CreatedVideos}", self::UserVideos()),
				array("{CreatedSubtitles}", self::UserSubtitles()),
			);
			return $array;
		}
		
		function UserVideos(){
			$args = array(
				array(":uid", $_SESSION['id'], "str")
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Videos` WHERE `uid` = :uid ", $args);
			return count($res);
		}
		
		function UserSubtitles(){
			$args = array(
				array(":uid", $_SESSION['id'], "str")
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Subtitles` WHERE `uid` = :uid ", $args);
			return count($res);
		}
		
	}


?>