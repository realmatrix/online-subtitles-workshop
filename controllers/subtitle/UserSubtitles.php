<?php

	class CUserSubtitles{
			
		function UserSubtitles(){
			return self::UserSubtitles_content();
		}
	
		function UserSubtitles_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function UserSubtitles_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function UserSubtitles_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_UserSubtitles_title")),
				  array("{tablerows}", self::GetSubtitles()),
				 );
			 
		return $content;
		}
		
		function GetSubtitles(){
			$subtitles = $GLOBALS['COMMON']->GetUserSubtitles($_SESSION['id']);
			print_r($subtitles);
			echo $_SESSION['id'];
		}
		

	
			
	}
	
	
	
?>