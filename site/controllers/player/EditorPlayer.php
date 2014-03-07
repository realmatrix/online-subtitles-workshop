<?php

	class CEditorPlayer{
			
		function EditorPlayer(){
			return self::EditorPlayer_content();
		}
	
		function EditorPlayer_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function EditorPlayer_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditorPlayer_content(){
			$SubtitleInfo = self::GetSubtitleInfo($GLOBALS['vars']['sid']);
			$VideoInfo = self::GetVideoInfo();
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("player_EditorPlayer_title")),
				  array("{VideoUrl}", $VideoInfo[0]['source']),
				  array("{VideoImage}", $VideoInfo[0]['thumbnail']),
				  array("{VideoTitle}", $VideoInfo[0]['title']),
				  array("{VideoDescription}", $VideoInfo[0]['synopsis']),
				  array("{SubtitleLanguage}", self::GetSubtitleLanguage($SubtitleInfo[0]['language'])),
				  array("{sid}", $GLOBALS['vars']['sid']),
				  array("{cid}", $GLOBALS['vars']['cid']),
				  array("{domain}", self::curPageURL()),
				 );
			 
		return $content;
		}
		
		function GetSubtitleInfo(){
			$SubtitleInfo = $GLOBALS['system']->GetSubtitleInfo($GLOBALS['vars']['sid']);
			return $SubtitleInfo;;
		}
		
		function GetVideoInfo(){
			$SubtitleInfo = self::GetSubtitleInfo();
			$VideoId = $SubtitleInfo[0]['vid'];
			$VideoInfo = $GLOBALS['system']->GetVideoInfo($VideoId);
			return $VideoInfo;
		}
		
		function GetSubtitleLanguage($lid){
			$lang = $GLOBALS['system']->GetLanguageById($lid);
			$language = $lang[0]['language'];
		}
		
		function curPageURL() {
		 $pageURL = 'http';
		 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
		 $url = explode("/", $pageURL);
		 $url = $url[0];
		 return $url;
		}
	
			
	}
	
	
	
?>