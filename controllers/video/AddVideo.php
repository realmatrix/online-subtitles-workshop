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
				  array("{title}", $GLOBALS['COMMON']->l("video_AddVideo_title")),
				  array("{htitle}", $GLOBALS['vars']['VideoTitle']),
				  array("{hothertitle}", $GLOBALS['vars']['VideoOtherTitle']),
				  array("{hvideourl}", $GLOBALS['vars']['VideoUrl']),
				  array("{hcasting}", $GLOBALS['vars']['casting']),
				  array("{htags}", $GLOBALS['vars']['tags']),
				  array("{hsynopsis}", $GLOBALS['vars']['synopsis']),
				  array("{hdirector}", $GLOBALS['vars']['director']),
				  array("{error}", $GLOBALS['COMMON']->FormatMessage("error", self::$error)),
				  array("{message}", $GLOBALS['COMMON']->FormatMessage("message", self::$message)),
				  array("{Type}", $GLOBALS['COMMON']->l('video_AddVideo_NewVideoType')),
				  array("{Category}", $GLOBALS['COMMON']->l('video_AddVideo_Category')),
				  array("{Language}", $GLOBALS['COMMON']->l('video_AddVideo_Language')),
				  array("{Title}", $GLOBALS['COMMON']->l('video_AddVideo_Original_Title')),
				  array("{OtherTitle}", $GLOBALS['COMMON']->l('video_AddVideo_OtherTitle')),
				  array("{Country}", $GLOBALS['COMMON']->l('video_AddVideo_Country')),
				  array("{Genres}", $GLOBALS['COMMON']->l('video_AddVideo_Genres')),
				  array("{ReleaseDate}", $GLOBALS['COMMON']->l('video_AddVideo_ReleaseDate')),
				  array("{Casting}", $GLOBALS['COMMON']->l('video_AddVideo_Casting')),
				  array("{Director}", $GLOBALS['COMMON']->l('video_AddVideo_Director')),
				  array("{Length}", $GLOBALS['COMMON']->l('video_AddVideo_Length')),
				  array("{Synopsis}", $GLOBALS['COMMON']->l('video_AddVideo_Synopsis')),
				  array("{Tags}", $GLOBALS['COMMON']->l('video_AddVideo_Tags')),
				  array("{Submit}", $GLOBALS['COMMON']->l('video_AddVideo_Submit')),
				  array("{VideoUrl}", $GLOBALS['COMMON']->l('video_AddVideo_VideoUrl')),
				  array("{VideoGenres}", self::genres()),
				 );
			 
		return $content;
		}
		
		function languages(){
			$languages = $GLOBALS['COMMON']->GetLanguages();
			for ($i=0; $i < count($languages); $i++) {
				if($GLOBALS['vars']['VideoLanguage'] == $languages[$i]['id']){$selected = "selected='selected'";}else{$selected="";}
				$res .= "<option value='".$languages[$i]['id']."' ".$selected.">".$languages[$i]['language']."</option>";
			}
			return $res;
		}
		
		function types(){
			$types = $GLOBALS['COMMON']->GetVideoTypes();
			for ($i=0; $i < count($types); $i++) {
				if($GLOBALS['vars']['VideoType'] == $types[$i]['id']){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$types[$i]['id']."' ".$selected.">".$types[$i]['type']."</option>";
			}
			return $res;
		}
		
		function categories(){
			$categories = $GLOBALS['COMMON']->GetVideoCategories();
			for ($i=0; $i < count($categories); $i++) {
				if($GLOBALS['vars']['VideoCategory'] == $categories[$i]['id']){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$categories[$i]['id']."' ".$selected.">".$categories[$i]['category']."</option>";
			}
			return $res;
		}
		
		function countries(){
			$countries = $GLOBALS['COMMON']->GetCountries();
			for ($i=0; $i < count($countries); $i++) {
				if($GLOBALS['vars']['country'] == $countries[$i]['id']){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$countries[$i]['id']."' ".$selected.">".$countries[$i]['short_name']."</option>";
			}
			return $res;
		}

		function genres(){
			$genres = $GLOBALS['COMMON']->GetGenres();			
			for ($i=0; $i < count($genres); $i++) {
				if(is_array($GLOBALS['vars']['genres'])){
				if(in_array($genres[$i]['id'], $GLOBALS['vars']['genres'])){$checked="checked";}else{$checked="";}
				}
				$res .= "<div class='checkbox-genre'><label for='chkgenre".$genres[$i]['id']."'><input type='checkbox' name='genres[]' id='chkgenre".$genres[$i]['id']."' value='".$genres[$i]['id']."' ".$checked."> ".$genres[$i]['genre']."</label></div>";
			}
			return $res;
		}
		
		function days(){
			$days = $GLOBALS['COMMON']->days();
			for ($i=0; $i < count($days); $i++) {
				if($GLOBALS['vars']['rd-day'] == $days[$i]){$selected = "selected='selected'";}else{$selected="";}  
				$res .= "<option value='".$days[$i]."' ".$selected.">".$days[$i]."</option>";
			}
			return $res;
		}
		
		function months(){
			$months = $GLOBALS['COMMON']->months();
			for ($i=0; $i < count($months); $i++) {
				if($GLOBALS['vars']['rd-month'] == $months[$i]){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$months[$i]."' ".$selected.">".$months[$i]."</option>";
			}
			return $res;
		}

		function years(){
			$years = $GLOBALS['COMMON']->years();
			for ($i=0; $i < count($years); $i++) {
				if($GLOBALS['vars']['rd-year'] == $years[$i]){$selected = "selected='selected'";}else{$selected="";}  
				$res .= "<option value='".$years[$i]."' ".$selected.">".$years[$i]."</option>";
			}
			return $res;
		}
		
		function minutes(){
			$minutes = $GLOBALS['COMMON']->minutes(300);
			for ($i=0; $i < count($minutes); $i++) {
				if($GLOBALS['vars']['length'] == $minutes[$i]){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$minutes[$i]."' ".$selected.">".$minutes[$i]."</option>";
			}
			return $res;	
		}
		
		function SubmitVideo($args){
			if(is_array($args['genres'])){$args['genres'] = implode(",", $args['genres']);}
			if($args['VideoType']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_SelectVideoType');}
			if($args['VideoCategory']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_SelectVideoCategory');}
			if($args['VideoLanguage']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_SelectVideoLanguage');}
			if($args['VideoTitle']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_EnterVideoTitle');}
			if($args['VideoOtherTitle']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_EnterVideoOtherTitle');}
			if($args['country']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_SelectCountry');}
			if($args['genres']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_SelectGenres');}
			if($args['rd-month']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_SelectREleaseMonth');}
			if($args['rd-day']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_SelectReleaseDay');}
			if($args['rd-year']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_SelectReleaseYear');}			
			if($args['casting']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_EnterCast');}
			if($args['director']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_EnterDirector');}
			if($args['length']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_SelectVideoLength');}
			if($args['tags']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_EnterVideoTags');}			
			if($args['synopsis']==""){self::$error[]=$GLOBALS['COMMON']->l('video_AddVideo_EnterVideoSynopsis');}
			if($GLOBALS['vars']['VideoUrl']!="" and !filter_var($GLOBALS['vars']['VideoUrl'], FILTER_VALIDATE_URL)){self::$error[]="invalid url";}		
			if(count(self::$error)>0){return FALSE;}
			
			//$genres = implode(",", $_POST['genres']);
			
			$params = array(
			array(":uid", $_SESSION['id'], "str"),
			array(":title", trim($args['VideoTitle']), "str"),
			array(":other_title", trim($args['VideoOtherTitle']), "str"),
			array(":type", $args['VideoType'], "str"),
			array(":category", $args['VideoCategory'], "str"),
			array(":language", $args['VideoLanguage'], "str"),
			array(":country", $args['country'], "str"),
			array(":genres", $args['genres'], "str"),
			array(":releasedate", $args['rd-year']."-".$args['rd-month']."-".$args['rd-day'], "str"),
			array(":casting", trim($args['casting']), "str"),
			array(":director", trim($args['director']), "str"),
			array(":length", $args['length'], "str"),
			array(":tags", trim($args['tags']), "str"),
			array(":synopsis", trim($args['synopsis']), "str"),
			array(":source", trim($args['VideoUrl']), "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("INSERT INTO `Videos` (`uid`, `title`, `other_title`, `type`, `category`, `language`, `country`, `genres`, `release_date`, `casting`, `director`, `length`, `tags`, `synopsis`, `source`) VALUES (:uid, :title, :other_title, :type, :category, :language, :country, :genres, :releasedate, :casting, :director, :length, :tags, :synopsis, :source )", $params);			
			self::$message[] = "video '".$args['VideoTitle']."' added successfully";
			$GLOBALS['vars']['VideoTitle'] = "";
			$GLOBALS['vars']['VideoOtherTitle'] = "";
			$GLOBALS['vars']['VideoType'] = "";
			$GLOBALS['vars']['VideoCategory'] = "";
			$GLOBALS['vars']['VideoLanguage'] = "";
			$GLOBALS['vars']['country'] = "";
			$GLOBALS['vars']['genres'] = "";
			$GLOBALS['vars']['rd-year'] = "";
			$GLOBALS['vars']['rd-month'] = "";
			$GLOBALS['vars']['rd-day'] = "";
			$GLOBALS['vars']['casting'] = "";
			$GLOBALS['vars']['director'] = "";
			$GLOBALS['vars']['length'] = "";
			$GLOBALS['vars']['tags'] = "";
			$GLOBALS['vars']['synopsis'] = "";
			$GLOBALS['vars']['VideoUrl'] = "";
			return TRUE;
		}
		
	}
	
	
	
?>