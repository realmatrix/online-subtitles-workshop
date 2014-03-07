<?php

	class CViewVideo{
		
		function ViewVideo(){
			return self::ViewVideo_content();
		}
	
		function ViewVideo_hooks(){
			$array = array(
				array("rate", "RateVideo"),
				array("fav", "AddToFavourites"),
			);
			return $array;
		}
		
		function ViewVideo_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function ViewVideo_content(){
			self::UpdateViews();
			$video = $GLOBALS['system']->GetVideoInfo($GLOBALS['vars']['vid']);
				$content = array
				  (
				  array("{VideoTitle}", $video[0]['title']),
				  array("{VideoOtherTitle}", $video[0]['other_title']),
				  array("{VideoCountry}", self::GetCountry($video[0]['country'])),
				  array("{VideoGenre}", self::GetGenre($video[0]['genres'])),
				  array("{VideoReleaseDate}", date("d F Y", strtotime($video[0]['release_date']))),
				  array("{VideoCasting}", $video[0]['casting']),
				  array("{VideoDirector}", $video[0]['director']),
				  array("{VideoLength}", $video[0]['length']),				  
				  array("{OtherTitle}", $GLOBALS['system']->l('video_ViewVideo_OtherTitle')),
				  array("{Country}", $GLOBALS['system']->l('video_ViewVideo_Country')),
				  array("{Genre}", $GLOBALS['system']->l('video_ViewVideo_Genre')),
				  array("{ReleaseDate}", $GLOBALS['system']->l('video_ViewVideo_ReleaseDate')),
				  array("{Casting}", $GLOBALS['system']->l('video_ViewVideo_Casting')),
				  array("{Director}", $GLOBALS['system']->l('video_ViewVideo_Director')),
				  array("{Length}", $GLOBALS['system']->l('video_ViewVideo_Length')),
				  array("{thumbnail}", $video[0]['thumbnail']),
				  array("{rate}", self::GetRate()),
				  array("{vid}", $GLOBALS['vars']['vid']),
				  array("{Category}", $GLOBALS['system']->l('video_ViewVideo_category')),
				  array("{CreatedBy}", $GLOBALS['system']->l('video_ViewVideo_createdby')),
				  array("{Views}", $GLOBALS['system']->l('video_ViewVideo_views')),
				  array("{VCategory}", self::GetVideoCategoryById($video[0]['category'])),
				  array("{VCreatedBy}", $GLOBALS['system']->GetUserName($video[0]['uid'])),
				  array("{VViews}", $video[0]['views']),
				  array("{RateResult}", self::GetVideoRateResult()),
				  array("{SubtitlesCount}", $GLOBALS['system']->l('video_ViewVideo_subtitlescount')),
				  array("{VSubtitlesCount}", self::GetSubtitlesCount()),
				 );
			 
		return $content;
		}

		function GetCountry($id){
			$country=$GLOBALS['system']->GetCountryById($id);
			$res=$country[0]['short_name'];
			return $res;
		}

		function GetGenre($ids){
			$res = "";
			if(strpos(",", $ids)>0){
			$ids = explode(",", $ids);
			for ($i=0; $i < count($ids); $i++) { 
				$genre=$GLOBALS['system']->GetGenreById($id);
				$res .=$genre[0]['genre'].", ";					
			}
			}
			else{
				$genre=$GLOBALS['system']->GetGenreById($ids);
				$res =$genre[0]['genre'];
			}
			return $res;
		}

		function UpdateViews(){
			$params = array(
				array(":vid", $GLOBALS['vars']['vid']),
			);
			$res = $GLOBALS['system']->db_query("UPDATE `videos` SET views = views + 1 WHERE id=:vid;", $params);
		}
		
		function GetRate(){
			$params = array(
				array(":uid", $_SESSION['id'], "str"),
				array(":vid", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `VideoRates` WHERE `uid` = :uid and `vid` = :vid", $params);
			if(count($res)>0){return $res[0]['rate'];}else{return 0;}
		}
		
		function RateVideo(){
			if(!isset($_SESSION['id']) or $_SESSION['id']==""){return false;}
			$params = array(
				array(":uid", $_SESSION['id'], "str"),
				array(":vid", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `VideoRates` WHERE `uid` = :uid and `vid` = :vid", $params);
			if(count($res)>0){
				$params = array(
					array(":uid", $_SESSION['id'], "str"),
					array(":vid", $GLOBALS['vars']['vid'], "str"),
					array(":rate", $GLOBALS['vars']['val'], "str")
				);
				$res= $GLOBALS['system']->db_query("UPDATE `videorates` SET `rate`=:rate WHERE `uid` = :uid and `vid` = :vid", $params);
			}else{
				$params = array(
					array(":uid", $_SESSION['id'], "str"),
					array(":vid", $GLOBALS['vars']['vid'], "str"),
					array(":rate", $GLOBALS['vars']['val'], "str")
				);
				$res= $GLOBALS['system']->db_query("INSERT INTO `videorates`(`uid`, `vid`, `rate`) VALUES (:uid,:vid,:rate)", $params);
			}
		}
		
		function AddToFavourites(){
			if(!isset($_SESSION['id']) or $_SESSION['id']==""){return false;}
			$params = array(
				array(":uid", $_SESSION['id'], "str"),
				array(":vid", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `favouritevideos` WHERE `uid` = :uid and `vid` = :vid", $params);
			if(count($res)<1){
				$res= $GLOBALS['system']->db_query("INSERT INTO `favouritevideos`(`uid`, `vid`) VALUES (:uid,:vid)", $params, $ExecState);
				if($ExecState===TRUE){$GLOBALS['SUCCESS'][]="video added successfully to favourites.";}else{$GLOBALS['ERROR'][]="Failed to add video to favourites.";}
			}				
		}
		
		function GetVideoCategoryById($CatID){
			$args = array(
				array(":id", $CatID, "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videocategory` WHERE `id` = :id", $args);
			return $res[0]['category'];
		}
		
		function GetVideoRateResult(){
			$args = array(
				array(":vid", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videorates` WHERE `vid` = :vid", $args);
			$TotalRates = 0;
			for ($i=0; $i < count($res); $i++) { 
				$TotalRates = $TotalRates + $res[$i]['rate'];
			}
			if(count($res)>0){
			$TotalRates = $TotalRates / count($res);
			$RateResult = ($TotalRates * 100) / 10;
			}else{
				$RateResult = 0;
			}
			$content = "";
			for ($i=1; $i <= 10; $i++) {
				if($i*10 <= $RateResult){
					$content.= "<img class='viewvideo-rateresult-on'/>";
				}else{
					$content.= "<img class='viewvideo-rateresult-off'/>";
				}
			}
			return $content;
		}
		
		function GetSubtitlesCount(){
			$args = array(
				array(":vid", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `subtitles` WHERE `vid` = :vid", $args);
			return count($res);
		}
		

}