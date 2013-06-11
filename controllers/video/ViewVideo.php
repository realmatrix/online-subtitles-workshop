<?php

	class CViewVideo{
		
		function ViewVideo(){
			return self::ViewVideo_content();
		}
	
		function ViewVideo_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
		
		function ViewVideo_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewVideo_content(){
			$video = Common::GetVideoInfo($_GET['vid']);
				$content = array
				  (
				  array("{VideoTitle}", $video[0]['title']),
				  array("{VideoOtherTitle}", $video[0]['other_title']),
				  array("{VideoCountry}", $video[0]['country']),
				  array("{VideoGenre}", $video[0]['genres']),
				  array("{VideoReleaseDate}", $video[0]['release_date']),
				  array("{VideoCasting}", $video[0]['casting']),
				  array("{VideoDirector}", $video[0]['director']),
				  array("{VideoLength}", $video[0]['length']),
				  
				  array("{OtherTitle}", $GLOBALS['lang']['video_ViewVideo_OtherTitle']),
				  array("{Country}", $GLOBALS['lang']['video_ViewVideo_Country']),
				  array("{Genre}", $GLOBALS['lang']['video_ViewVideo_Genre']),
				  array("{ReleaseDate}", $GLOBALS['lang']['video_ViewVideo_ReleaseDate']),
				  array("{Casting}", $GLOBALS['lang']['video_ViewVideo_Casting']),
				  array("{Director}", $GLOBALS['lang']['video_ViewVideo_Director']),
				  array("{Length}", $GLOBALS['lang']['video_ViewVideo_Length']),
				 );
			 
		return $content;
		}

}