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
			$video = $GLOBALS['COMMON']->GetVideoInfo($GLOBALS['vars']['vid']);
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
				  array("{OtherTitle}", $GLOBALS['COMMON']->l('video_ViewVideo_OtherTitle')),
				  array("{Country}", $GLOBALS['COMMON']->l('video_ViewVideo_Country')),
				  array("{Genre}", $GLOBALS['COMMON']->l('video_ViewVideo_Genre')),
				  array("{ReleaseDate}", $GLOBALS['COMMON']->l('video_ViewVideo_ReleaseDate')),
				  array("{Casting}", $GLOBALS['COMMON']->l('video_ViewVideo_Casting')),
				  array("{Director}", $GLOBALS['COMMON']->l('video_ViewVideo_Director')),
				  array("{Length}", $GLOBALS['COMMON']->l('video_ViewVideo_Length')),
				  array("{thumbnail}", $video[0]['thumbnail']),
				  array("{rate}", self::GetRate()),
				  array("{vid}", $GLOBALS['vars']['vid']),
				  array("{Category}", $GLOBALS['COMMON']->l('video_ViewVideo_category')),
				  array("{CreatedBy}", $GLOBALS['COMMON']->l('video_ViewVideo_createdby')),
				  array("{Views}", $GLOBALS['COMMON']->l('video_ViewVideo_views')),
				  array("{VCategory}", self::GetVideoCategoryById($video[0]['category'])),
				  array("{VCreatedBy}", $GLOBALS['COMMON']->GetUserName($video[0]['uid'])),
				  array("{VViews}", $video[0]['views']),
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

		function UpdateViews(){
			$params = array(
				array(":vid", $GLOBALS['vars']['vid']),
			);
			$res = $GLOBALS['COMMON']->db_query("UPDATE `videos` SET views = views + 1 WHERE id=:vid;", $params);
		}
		
		function GetRate(){
			$params = array(
				array(":uid", $_SESSION['id'], "str"),
				array(":vid", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `VideoRates` WHERE `uid` = :uid and `vid` = :vid", $params);
			if(count($res)>0){return $res[0]['rate'];}else{return 0;}
		}
		
		function RateVideo(){
			if(!isset($_SESSION['id']) or $_SESSION['id']==""){return false;}
			$params = array(
				array(":uid", $_SESSION['id'], "str"),
				array(":vid", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `VideoRates` WHERE `uid` = :uid and `vid` = :vid", $params);
			if(count($res)>0){
				$params = array(
					array(":uid", $_SESSION['id'], "str"),
					array(":vid", $GLOBALS['vars']['vid'], "str"),
					array(":rate", $GLOBALS['vars']['val'], "str")
				);
				$res= $GLOBALS['COMMON']->db_query("UPDATE `videorates` SET `rate`=:rate WHERE `uid` = :uid and `vid` = :vid", $params);
			}else{
				$params = array(
					array(":uid", $_SESSION['id'], "str"),
					array(":vid", $GLOBALS['vars']['vid'], "str"),
					array(":rate", $GLOBALS['vars']['val'], "str")
				);
				$res= $GLOBALS['COMMON']->db_query("INSERT INTO `videorates`(`uid`, `vid`, `rate`) VALUES (:uid,:vid,:rate)", $params);
			}
		}
		
		function AddToFavourites(){
			if(!isset($_SESSION['id']) or $_SESSION['id']==""){return false;}
			$params = array(
				array(":uid", $_SESSION['id'], "str"),
				array(":vid", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `favouritevideos` WHERE `uid` = :uid and `vid` = :vid", $params);
			if(count($res)<1){
				$res= $GLOBALS['COMMON']->db_query("INSERT INTO `favouritevideos`(`uid`, `vid`) VALUES (:uid,:vid)", $params, $ExecState);
				if($ExecState===TRUE){$GLOBALS['SUCCESS'][]="video added successfully to favourites.";}else{$GLOBALS['ERROR'][]="Failed to add video to favourites.";}
			}				
		}
		
		function GetVideoCategoryById($CatID){
			$args = array(
				array(":id", $CatID, "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `videocategory` WHERE `id` = :id", $args);
			return $res[0]['category'];
		}

}