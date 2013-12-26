<?php

	class CEditVideo{
		
		function EditVideo(){
			return self::EditVideo_content();
		}
	
		function EditVideo_hooks(){
			$array = array(
				array("editvideo", "EditVideo"),
			);
			return $array;
		}
		
		function EditVideo_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditVideo_content(){
			$VideoInformation = $GLOBALS['COMMON']->GetVideoInfo($GLOBALS['vars']['vid']);
			$ReleaseDate = explode("-", $VideoInformation[0]['release_date']);
			$Genres = explode(",", $VideoInformation[0]['genres']);
				$content = array
				  (
				  array("{vid}", $GLOBALS['vars']['vid']),
				  array("{VideoType}", self::types($VideoInformation[0]['type'])),
				  array("{VideoCategory}", self::categories($VideoInformation[0]['category'])),
				  array("{VideoLanguage}", self::languages($VideoInformation[0]['language'])),
				  array("{Countries}", self::countries($VideoInformation[0]['country'])),			  
				  array("{rd-day}", self::days($ReleaseDate[2])),
				  array("{rd-month}", self::months($ReleaseDate[1])),
				  array("{rd-year}", self::years($ReleaseDate[0])),
				  array("{length}", self::minutes($VideoInformation[0]['length'])),
				  array("{title}", $GLOBALS['COMMON']->l("video_EditVideo_title")),
				  array("{htitle}", $VideoInformation[0]['title']),
				  array("{hothertitle}", $VideoInformation[0]['other_title']),
				  array("{hvideourl}", $VideoInformation[0]['source']),
				  array("{hcasting}", $VideoInformation[0]['casting']),
				  array("{htags}", $VideoInformation[0]['tags']),
				  array("{hsynopsis}", $VideoInformation[0]['synopsis']),
				  array("{hdirector}", $VideoInformation[0]['director']),
				  array("{Type}", $GLOBALS['COMMON']->l('video_EditVideo_NewVideoType')),
				  array("{Category}", $GLOBALS['COMMON']->l('video_EditVideo_Category')),
				  array("{Language}", $GLOBALS['COMMON']->l('video_EditVideo_Language')),
				  array("{Title}", $GLOBALS['COMMON']->l('video_EditVideo_Original_Title')),
				  array("{OtherTitle}", $GLOBALS['COMMON']->l('video_EditVideo_OtherTitle')),
				  array("{Country}", $GLOBALS['COMMON']->l('video_EditVideo_Country')),
				  array("{Genres}", $GLOBALS['COMMON']->l('video_EditVideo_Genres')),
				  array("{ReleaseDate}", $GLOBALS['COMMON']->l('video_EditVideo_ReleaseDate')),
				  array("{Casting}", $GLOBALS['COMMON']->l('video_EditVideo_Casting')),
				  array("{Director}", $GLOBALS['COMMON']->l('video_EditVideo_Director')),
				  array("{Length}", $GLOBALS['COMMON']->l('video_EditVideo_Length')),
				  array("{Synopsis}", $GLOBALS['COMMON']->l('video_EditVideo_Synopsis')),
				  array("{Tags}", $GLOBALS['COMMON']->l('video_EditVideo_Tags')),
				  array("{Submit}", $GLOBALS['COMMON']->l('video_EditVideo_Submit')),
				  array("{VideoUrl}", $GLOBALS['COMMON']->l('video_EditVideo_VideoUrl')),
				  array("{VideoGenres}", self::genres($Genres)),
				  array("{page}", $GLOBALS['vars']['page']),
				  array("{sec}", $GLOBALS['vars']['sec']),
				 );
			 
		return $content;
		}
		
		function languages($lang){
			$languages = $GLOBALS['COMMON']->GetLanguages();
			for ($i=0; $i < count($languages); $i++) {
				if($lang == $languages[$i]['id']){$selected = "selected='selected'";}else{$selected="";}
				$res .= "<option value='".$languages[$i]['id']."' ".$selected.">".$languages[$i]['language']."</option>";
			}
			return $res;
		}
		
		function types($VideoType){
			$types = $GLOBALS['COMMON']->GetVideoTypes();
			for ($i=0; $i < count($types); $i++) {
				if($VideoType == $types[$i]['id']){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$types[$i]['id']."' ".$selected.">".$types[$i]['type']."</option>";
			}
			return $res;
		}
		
		function categories($cat){
			$categories = $GLOBALS['COMMON']->GetVideoCategories();
			for ($i=0; $i < count($categories); $i++) {
				if($cat == $categories[$i]['id']){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$categories[$i]['id']."' ".$selected.">".$categories[$i]['category']."</option>";
			}
			return $res;
		}
		
		function countries($country){
			$countries = $GLOBALS['COMMON']->GetCountries();
			for ($i=0; $i < count($countries); $i++) {
				if($country == $countries[$i]['id']){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$countries[$i]['id']."' ".$selected.">".$countries[$i]['short_name']."</option>";
			}
			return $res;
		}

		function genres($array){
			$genres = $GLOBALS['COMMON']->GetGenres();			
			for ($i=0; $i < count($genres); $i++) {
				if(is_array($array)){
				if(in_array($genres[$i]['id'], $array)){$checked="checked";}else{$checked="";}
				}
				$res .= "<div class='checkbox-genre'><label for='chkgenre".$genres[$i]['id']."'><input type='checkbox' name='genres[]' id='chkgenre".$genres[$i]['id']."' value='".$genres[$i]['id']."' ".$checked."> ".$genres[$i]['genre']."</label></div>";
			}
			return $res;
		}
		
		function days($day){
			$days = $GLOBALS['COMMON']->days();
			for ($i=0; $i < count($days); $i++) {
				if($day == $days[$i]){$selected = "selected='selected'";}else{$selected="";}  
				$res .= "<option value='".$days[$i]."' ".$selected.">".$days[$i]."</option>";
			}
			return $res;
		}
		
		function months($month){
			$months = $GLOBALS['COMMON']->months();
			for ($i=0; $i < count($months); $i++) {
				if($month == $months[$i]){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$months[$i]."' ".$selected.">".date("F", mktime(0, 0, 0, $months[$i], 10))."</option>";
			}
			return $res;
		}

		function years($year){
			$years = $GLOBALS['COMMON']->years();
			for ($i=0; $i < count($years); $i++) {
				if($year == $years[$i]){$selected = "selected='selected'";}else{$selected="";}  
				$res .= "<option value='".$years[$i]."' ".$selected.">".$years[$i]."</option>";
			}
			return $res;
		}
		
		function minutes($length){
			$minutes = $GLOBALS['COMMON']->minutes(300);
			for ($i=0; $i < count($minutes); $i++) {
				if($length == $minutes[$i]){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$minutes[$i]."' ".$selected.">".$minutes[$i]."</option>";
			}
			return $res;	
		}
		
		function EditVideo($args){
			if(is_array($args['genres'])){$args['genres'] = implode(",", $args['genres']);}
			if($args['VideoType']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_SelectVideoType');}
			if($args['VideoCategory']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_SelectVideoCategory');}
			if($args['VideoLanguage']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_SelectVideoLanguage');}
			if($args['VideoTitle']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_EnterVideoTitle');}
			if($args['VideoOtherTitle']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_EnterVideoOtherTitle');}
			if($args['country']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_SelectCountry');}
			if($args['genres']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_SelectGenres');}
			if($args['rd-month']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_SelectREleaseMonth');}
			if($args['rd-day']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_SelectReleaseDay');}
			if($args['rd-year']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_SelectReleaseYear');}			
			if($args['casting']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_EnterCast');}
			if($args['director']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_EnterDirector');}
			if($args['length']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_SelectVideoLength');}
			if($args['tags']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_EnterVideoTags');}			
			if($args['synopsis']==""){$ERROR[]=$GLOBALS['COMMON']->l('video_EditVideo_EnterVideoSynopsis');}
			if($GLOBALS['vars']['VideoUrl']!="" and !filter_var($GLOBALS['vars']['VideoUrl'], FILTER_VALIDATE_URL)){$ERROR[]="invalid url";}		
			if(count($ERROR)>0){$GLOBALS['ERROR'] = $ERROR; return FALSE;}
			
			//$genres = implode(",", $_POST['genres']);
			
			$params = array(
			array(":vid", $GLOBALS['vars']['vid'], "str"),
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
			$res = $GLOBALS['COMMON']->db_query("UPDATE `videos` SET `title`=:title,`other_title`=:other_title,`type`=:type,`category`=:category,`language`=:language,`country`=:country,`genres`=:genres,`release_date`=:releasedate,`casting`=:casting,`director`=:director,`length`=:length,`tags`=:tags,`synopsis`=:synopsis,`source`=:source WHERE `id` = :vid", $params);			
			$GLOBALS['SUCCESS'][] = "video '".$args['VideoTitle']."' updated successfully";
			return TRUE;
		}
		
	}
	
	
	
?>