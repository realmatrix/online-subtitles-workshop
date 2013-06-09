<?php

	class CAddVideo{

	public static $error = array();
	public static $message = array();
		
		function AddVideo(){
			return self::AddVideo_content();
		}
	
		function AddVideo_hooks(){
			$array = array(
				array("SubmitVideo", "SubmitVideo"),
			);
			return $array;
		}
		
		function AddVideo_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function AddVideo_content(){
				$content = array
				  (
				  array("{VideoType}", self::types()),
				  array("{VideoCategory}", self::categories()),
				  array("{VideoLanguage}", self::languages()),
				  array("{Countries}", self::countries()),			  
				  array("{rd-day}", self::days()),
				  array("{rd-month}", self::months()),
				  array("{rd-year}", self::years()),
				  array("{length}", self::minutes()),
				  array("{error}", Common::FormatMessage("error", self::$error)),
				  array("{message}", Common::FormatMessage("message", self::$message)),
				  array("{Type}", $GLOBALS['lang']['video_AddVideo_VideoType']),
				  array("{Category}", $GLOBALS['lang']['video_AddVideo_Category']),
				  array("{Language}", $GLOBALS['lang']['video_AddVideo_Language']),
				  array("{Title}", $GLOBALS['lang']['video_AddVideo_Title']),
				  array("{OtherTitle}", $GLOBALS['lang']['video_AddVideo_OtherTitle']),
				  array("{Country}", $GLOBALS['lang']['video_AddVideo_Country']),
				  array("{Genres}", $GLOBALS['lang']['video_AddVideo_Genres']),
				  array("{ReleaseDate}", $GLOBALS['lang']['video_AddVideo_ReleaseDate']),
				  array("{Casting}", $GLOBALS['lang']['video_AddVideo_Casting']),
				  array("{Director}", $GLOBALS['lang']['video_AddVideo_Director']),
				  array("{Length}", $GLOBALS['lang']['video_AddVideo_Length']),
				  array("{Synopsis}", $GLOBALS['lang']['video_AddVideo_Synopsis']),
				  array("{Tags}", $GLOBALS['lang']['video_AddVideo_Tags']),
				  array("{Submit}", $GLOBALS['lang']['video_AddVideo_Submit']),
				 );
			 
		return $content;
		}
		
		function languages(){
			$languages = Common::GetLanguages();
			for ($i=0; $i < count($languages); $i++) { 
				$res .= "<option value='".$languages[$i]['id']."'>".$languages[$i]['language']."</option>";
			}
			return $res;
		}
		
		function types(){
			$types = Common::GetVideoTypes();
			for ($i=0; $i < count($types); $i++) { 
				$res .= "<option value='".$types[$i]['id']."'>".$types[$i]['type']."</option>";
			}
			return $res;
		}
		
		function categories(){
			$categories = Common::GetVideoCategories();
			for ($i=0; $i < count($categories); $i++) { 
				$res .= "<option value='".$categories[$i]['id']."'>".$categories[$i]['category']."</option>";
			}
			return $res;
		}
		
		function countries(){
			$countries = Common::GetCountries();
			for ($i=0; $i < count($countries); $i++) { 
				$res .= "<option value='".$countries[$i]['id']."'>".$countries[$i]['short_name']."</option>";
			}
			return $res;
		}
		
		function days(){
			$days = Common::days();
			for ($i=0; $i < count($days); $i++) { 
				$res .= "<option value='".$days[$i]."'>".$days[$i]."</option>";
			}
			return $res;
		}
		
		function months(){
			$months = Common::months();
			for ($i=0; $i < count($months); $i++) { 
				$res .= "<option value='".$months[$i]."'>".$months[$i]."</option>";
			}
			return $res;
		}

		function years(){
			$years = Common::years();
			for ($i=0; $i < count($years); $i++) { 
				$res .= "<option value='".$years[$i]."'>".$years[$i]."</option>";
			}
			return $res;
		}
		
		function minutes(){
			$minutes = Common::minutes(300);
			for ($i=0; $i < count($minutes); $i++) { 
				$res .= "<option value='".$minutes[$i]."'>".$minutes[$i]."</option>";
			}
			return $res;	
		}
		
		function SubmitVideo(){
			if($_POST['VideoType']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_SelectVideoType'];}
			if($_POST['VideoCategory']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_SelectVideoCategory'];}
			if($_POST['VideoLanguage']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_SelectVideoLanguage'];}
			if($_POST['VideoTitle']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_EnterVideoTitle'];}
			if($_POST['VideoOtherTitle']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_EnterVideoOtherTitle'];}
			if($_POST['country']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_SelectCountry'];}
			if($_POST['genres']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_SelectGenres'];}
			if($_POST['rd-month']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_SelectREleaseMonth'];}
			if($_POST['rd-day']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_SelectReleaseDay'];}
			if($_POST['rd-year']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_SelectReleaseYear'];}			
			if($_POST['casting']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_EnterCast'];}
			if($_POST['director']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_EnterDirector'];}
			if($_POST['length']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_SelectVideoLength'];}
			if($_POST['tags']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_EnterVideoTags'];}			
			if($_POST['synopsis']==""){self::$error[]=$GLOBALS['lang']['video_AddVideo_EnterVideoSynopsis'];}			
			if(count(self::$error)>0){return FALSE;}
			
			//$genres = implode(",", $_POST['genres']);
			
			$params = array(
			array(":uid", $_SESSION['id'], "str"),
			array(":title", $_POST['VideoTitle'], "str"),
			array(":other_title", $_POST['VideoOtherTitle'], "str"),
			array(":type", $_POST['VideoType'], "str"),
			array(":category", $_POST['VideoCategory'], "str"),
			array(":language", $_POST['VideoLanguage'], "str"),
			array(":country", $_POST['country'], "str"),
			array(":genres", $_POST['genres'], "str"),
			array(":releasedate", $_POST['rd-year']."-".$_POST['rd-month']."-".$_POST['rd-day'], "str"),
			array(":casting", $_POST['casting'], "str"),
			array(":director", $_POST['director'], "str"),
			array(":length", $_POST['length'], "str"),
			array(":tags", $_POST['tags'], "str"),
			array(":synopsis", $_POST['synopsis'], "str"),
			);
			$res = Common::db_query("INSERT INTO `Videos` (`uid`, `title`, `other_title`, `type`, `category`, `language`, `country`, `genres`, `release_date`, `casting`, `director`, `length`, `tags`, `synopsis`) VALUES (:uid, :title, :other_title, :type, :category, :language, :country, :genres, :releasedate, :casting, :director, :length, :tags, :synopsis )", $params);			
			self::$message[] = "video '".$_POST['VideoTitle']."' added successfully";
			return TRUE;
		}
		
	}
	
	
	
?>