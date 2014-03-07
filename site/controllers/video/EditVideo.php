<?php

	class CEditVideo{
		
		function EditVideo(){
			return self::EditVideo_content();
		}
	
		function EditVideo_hooks(){
			$array = array(
				array("editvideo", "Edit"),
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
			$VideoInformation = $GLOBALS['system']->GetVideoInfo($GLOBALS['vars']['vid']);
			$ReleaseDate = explode("-", $VideoInformation[0]['release_date']);
			$Genres = explode(",", $VideoInformation[0]['genres']);
				$content = array
				  (
				  array("{VideoType}", self::types($VideoInformation[0]['type'])),
				  array("{VideoCategory}", self::categories($VideoInformation[0]['category'])),
				  array("{VideoLanguage}", self::languages($VideoInformation[0]['language'])),
				  array("{Countries}", self::countries($VideoInformation[0]['country'])),			  
				  array("{rd-day}", self::days($ReleaseDate[2])),
				  array("{rd-month}", self::months($ReleaseDate[1])),
				  array("{rd-year}", self::years($ReleaseDate[0])),
				  array("{length}", self::minutes($VideoInformation[0]['length'])),
				  array("{title}", $GLOBALS['system']->l("video_EditVideo_title")),
				  array("{htitle}", $VideoInformation[0]['title']),
				  array("{hothertitle}", $VideoInformation[0]['other_title']),
				  array("{hvideourl}", $VideoInformation[0]['source']),
				  array("{hcasting}", $VideoInformation[0]['casting']),
				  array("{htags}", $VideoInformation[0]['tags']),
				  array("{hsynopsis}", $VideoInformation[0]['synopsis']),
				  array("{hdirector}", $VideoInformation[0]['director']),
				  array("{Type}", $GLOBALS['system']->l('video_EditVideo_NewVideoType')),
				  array("{Category}", $GLOBALS['system']->l('video_EditVideo_Category')),
				  array("{Language}", $GLOBALS['system']->l('video_EditVideo_Language')),
				  array("{Title}", $GLOBALS['system']->l('video_EditVideo_Original_Title')),
				  array("{OtherTitle}", $GLOBALS['system']->l('video_EditVideo_OtherTitle')),
				  array("{Country}", $GLOBALS['system']->l('video_EditVideo_Country')),
				  array("{Genres}", $GLOBALS['system']->l('video_EditVideo_Genres')),
				  array("{ReleaseDate}", $GLOBALS['system']->l('video_EditVideo_ReleaseDate')),
				  array("{Casting}", $GLOBALS['system']->l('video_EditVideo_Casting')),
				  array("{Director}", $GLOBALS['system']->l('video_EditVideo_Director')),
				  array("{Length}", $GLOBALS['system']->l('video_EditVideo_Length')),
				  array("{Synopsis}", $GLOBALS['system']->l('video_EditVideo_Synopsis')),
				  array("{Tags}", $GLOBALS['system']->l('video_EditVideo_Tags')),
				  array("{Submit}", $GLOBALS['system']->l('video_EditVideo_Submit')),
				  array("{VideoUrl}", $GLOBALS['system']->l('video_EditVideo_VideoUrl')),
				  array("{VideoGenres}", self::genres($Genres)),
				  array("{page}", $GLOBALS['vars']['page']),
				  array("{sec}", $GLOBALS['vars']['sec']),
				  array("{vid}", $GLOBALS['vars']['vid']),
				 );
			 
		return $content;
		}
		
		function languages($lang){
			$languages = $GLOBALS['system']->GetLanguages();
			for ($i=0; $i < count($languages); $i++) {
				if($lang == $languages[$i]['id']){$selected = "selected='selected'";}else{$selected="";}
				$res .= "<option value='".$languages[$i]['id']."' ".$selected.">".$languages[$i]['language']."</option>";
			}
			return $res;
		}
		
		function types($VideoType){
			$types = $GLOBALS['system']->GetVideoTypes();
			for ($i=0; $i < count($types); $i++) {
				if($VideoType == $types[$i]['id']){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$types[$i]['id']."' ".$selected.">".$types[$i]['type']."</option>";
			}
			return $res;
		}
		
		function categories($cat){
			$categories = $GLOBALS['system']->GetVideoCategories();
			for ($i=0; $i < count($categories); $i++) {
				if($cat == $categories[$i]['id']){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$categories[$i]['id']."' ".$selected.">".$categories[$i]['category']."</option>";
			}
			return $res;
		}
		
		function countries($country){
			$countries = $GLOBALS['system']->GetCountries();
			for ($i=0; $i < count($countries); $i++) {
				if($country == $countries[$i]['id']){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$countries[$i]['id']."' ".$selected.">".$countries[$i]['short_name']."</option>";
			}
			return $res;
		}

		function genres($array){
			$genres = $GLOBALS['system']->GetGenres();			
			for ($i=0; $i < count($genres); $i++) {
				if(is_array($array)){
				if(in_array($genres[$i]['id'], $array)){$checked="checked";}else{$checked="";}
				}
				$res .= "<div class='checkbox-genre'><label for='chkgenre".$genres[$i]['id']."'><input type='checkbox' name='genres[]' id='chkgenre".$genres[$i]['id']."' value='".$genres[$i]['id']."' ".$checked."> ".$genres[$i]['genre']."</label></div>";
			}
			return $res;
		}
		
		function days($day){
			$days = $GLOBALS['system']->days();
			for ($i=0; $i < count($days); $i++) {
				if($day == $days[$i]){$selected = "selected='selected'";}else{$selected="";}  
				$res .= "<option value='".$days[$i]."' ".$selected.">".$days[$i]."</option>";
			}
			return $res;
		}
		
		function months($month){
			$months = $GLOBALS['system']->months();
			for ($i=0; $i < count($months); $i++) {
				if($month == $months[$i]){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$months[$i]."' ".$selected.">".date("F", mktime(0, 0, 0, $months[$i], 10))."</option>";
			}
			return $res;
		}

		function years($year){
			$years = $GLOBALS['system']->years();
			for ($i=0; $i < count($years); $i++) {
				if($year == $years[$i]){$selected = "selected='selected'";}else{$selected="";}  
				$res .= "<option value='".$years[$i]."' ".$selected.">".$years[$i]."</option>";
			}
			return $res;
		}
		
		function minutes($length){
			$minutes = $GLOBALS['system']->minutes(300);
			for ($i=0; $i < count($minutes); $i++) {
				if($length == $minutes[$i]){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$minutes[$i]."' ".$selected.">".$minutes[$i]."</option>";
			}
			return $res;	
		}
		
		function Edit(){
			if(is_array($GLOBALS['vars']['genres'])){$args['genres'] = implode(",", $GLOBALS['vars']['genres']);}
			if($GLOBALS['vars']['VideoType']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_SelectVideoType');}
			if($GLOBALS['vars']['VideoCategory']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_SelectVideoCategory');}
			if($GLOBALS['vars']['VideoLanguage']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_SelectVideoLanguage');}
			if($GLOBALS['vars']['VideoTitle']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_EnterVideoTitle');}
			if($GLOBALS['vars']['VideoOtherTitle']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_EnterVideoOtherTitle');}
			if($GLOBALS['vars']['country']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_SelectCountry');}
			if($GLOBALS['vars']['genres']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_SelectGenres');}
			if($GLOBALS['vars']['rd-month']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_SelectREleaseMonth');}
			if($GLOBALS['vars']['rd-day']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_SelectReleaseDay');}
			if($GLOBALS['vars']['rd-year']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_SelectReleaseYear');}			
			if($GLOBALS['vars']['casting']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_EnterCast');}
			if($GLOBALS['vars']['director']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_EnterDirector');}
			if($GLOBALS['vars']['length']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_SelectVideoLength');}
			if($GLOBALS['vars']['tags']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_EnterVideoTags');}			
			if($GLOBALS['vars']['synopsis']==""){$ERROR[]=$GLOBALS['system']->l('video_EditVideo_EnterVideoSynopsis');}
			if($GLOBALS['vars']['VideoUrl']!="" and !filter_var($GLOBALS['vars']['VideoUrl'], FILTER_VALIDATE_URL)){$ERROR[]="invalid url";}		
			if(count($ERROR)>0){$GLOBALS['ERROR'] = $ERROR; return FALSE;}
			
			//$genres = implode(",", $_POST['genres']);
			
			$params = array(
			array(":vid", trim($GLOBALS['vars']['vid']), "str"),
			array(":title", trim($GLOBALS['vars']['VideoTitle']), "str"),
			array(":other_title", trim($GLOBALS['vars']['VideoOtherTitle']), "str"),
			array(":type", $GLOBALS['vars']['VideoType'], "str"),
			array(":category", $GLOBALS['vars']['VideoCategory'], "str"),
			array(":language", $GLOBALS['vars']['VideoLanguage'], "str"),
			array(":country", $GLOBALS['vars']['country'], "str"),
			array(":genres", implode(",", $GLOBALS['vars']['genres']), "str"),
			array(":releasedate", $GLOBALS['vars']['rd-year']."-".$GLOBALS['vars']['rd-month']."-".$GLOBALS['vars']['rd-day'], "str"),
			array(":casting", trim($GLOBALS['vars']['casting']), "str"),
			array(":director", trim($GLOBALS['vars']['director']), "str"),
			array(":length", $GLOBALS['vars']['length'], "str"),
			array(":tags", trim($GLOBALS['vars']['tags']), "str"),
			array(":synopsis", trim($GLOBALS['vars']['synopsis']), "str"),
			array(":source", trim($GLOBALS['vars']['VideoUrl']), "str"),
			);
			$res = $GLOBALS['system']->db_query("UPDATE `videos` SET `title`=:title,`other_title`=:other_title,`type`=:type,`category`=:category,
			`language`=:language,`country`=:country,`genres`=:genres,`release_date`=:releasedate,`casting`=:casting,`director`=:director,
			`length`=:length,`tags`=:tags,`synopsis`=:synopsis,`source`=:source WHERE `id` = :vid", $params, $ExecState);			
			if($ExecState===TRUE){$GLOBALS['SUCCESS'][]="video updated successfully.";}else{$GLOBALS['ERROR'][]="failed to update video.";}
			return TRUE;
		}
		
	}
	
	
	
?>