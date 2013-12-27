<?php

	class Wwidget_QuickAccess{
		
		function widget_QuickAccess(){
			return self::widget_QuickAccess_render();
		}
		
		function widget_QuickAccess_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
	
		function widget_QuickAccess_options(){
			$options = array(
			"show"=>array(), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"yes", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_QuickAccess_render(){
			$array = array(
				array("{title}", $GLOBALS['COMMON']->l('widget_QuickAccess_title')),
				array("{Videos}", $GLOBALS['COMMON']->l('widget_QuickAccess_Videos')),
				array("{FavouriteVideos}", $GLOBALS['COMMON']->l('widget_QuickAccess_FavouriteVideos')),
				array("{Subtitles}", $GLOBALS['COMMON']->l('widget_QuickAccess_Subtitles')),
				array("{ManageSubtitles}", $GLOBALS['COMMON']->l('widget_QuickAccess_ManageSubtitles')),
				array("{TeamSubtitles}", $GLOBALS['COMMON']->l('widget_QuickAccess_TeamSubtitles')),
				array("{CVideos}", self::GetUserVideos()),
				array("{CSubtitles}", self::GetUserSubtitles()),
				array("{CMSubtitles}", self::GetUserSubtitles()),
				array("{CFavouriteVideos}", self::GetUserFavouriteVideos()),
			);	
			return $array;
		}
		
		function GetUserVideos(){
			$args = array(
				array(":uid", $_SESSION['id'], "str")
			);
			$videos = $GLOBALS['COMMON']->db_query("SELECT * FROM videos WHERE uid = :uid", $args);
			$res = "";
			for ($i=0; $i < count($videos) ; $i++) { 
				$res .= "<option value='".$videos[$i]['id']."'>".$videos[$i]['title']."</option>";
			}
			return $res;
		}
		
		function GetUserSubtitles(){
			$args = array(
				array(":uid", $_SESSION['id'], "str")
			);
			$subtitles = $GLOBALS['COMMON']->db_query("SELECT * FROM subtitles WHERE uid = :uid", $args);
			$res = "";
			for ($i=0; $i < count($subtitles); $i++) { 
				$res .= "<option value='".$subtitles[$i]['id']."'>".$subtitles[$i]['release_name']."</option>";
			}
			return $res;
		}
		
		function GetUserFavouriteVideos(){
			$favourites = $GLOBALS['COMMON']->GetUserFavouriteVideos();
			$res = "";
			for ($i=0; $i < count($favourites) ; $i++) {
				$VideoInfo = $GLOBALS['COMMON']->GetVideoInfo($favourites[$i]['vid']); 
				$res .= "<option value='".$VideoInfo[0]['id']."'>".$VideoInfo[0]['title']."</option>";
			}
			return $res;
		}
		
		
		
	}

	
?>