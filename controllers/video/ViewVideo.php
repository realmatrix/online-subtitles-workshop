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
			$video = $GLOBALS['COMMON']->GetVideoInfo($GLOBALS['vars']['vid']);
				$content = array
				  (
				  array("{VideoTitle}", $video[0]['title']),
				  array("{VideoOtherTitle}", $video[0]['other_title']),
				  array("{VideoCountry}", self::GetCountry($video[0]['country'])),
				  array("{VideoGenre}", self::GetGenre($video[0]['genres'])),
				  array("{VideoReleaseDate}", $video[0]['release_date']),
				  array("{VideoCasting}", $video[0]['casting']),
				  array("{VideoDirector}", $video[0]['director']),
				  array("{VideoLength}", $video[0]['length']),
				  
				  array("{OtherTitle}", $GLOBALS['COMMON']->l('video_ViewVideo_OtherTitle')),
				  array("{Country}", $GLOBALS['COMMON']->l('video_ViewVideo_Country')),
				  array("{Genre}", $GLOBALS['COMMON']->l('video_ViewVideo_Genre')),
				  array("{ReleaseDate}", $GLOBALS['COMMON']->l('video_ViewVideo_ReleaseDate')),
				  array("{Casting}", $GLOBALS['COMMON']->l('video_ViewVideo_Casting')),
				  array("{Director}", $GLOBALS['COMMON']->l('video_ViewVideo_Director')),
				  array("{Length}", $GLOBALS['COMMON']->l('video_ViewVideo_Length')),
				 );
			 
		return $content;
		}

		function GetCountry($id){
			$country=$GLOBALS['COMMON']->GetCountryById($id);
			$res=$country[0]['short_name'];
			return $res;
		}

		function GetGenre($ids){
			$res = "";
			if(strpos(",", $ids)>0){
			$ids = explode(",", $ids);
			for ($i=0; $i < count($ids); $i++) { 
				$genre=$GLOBALS['COMMON']->GetGenreById($id);
				$res .=$genre[0]['genre'].", ";					
			}
			}
			else{
				$genre=$GLOBALS['COMMON']->GetGenreById($ids);
				$res =$genre[0]['genre'];
			}
			return $res;
		}

}