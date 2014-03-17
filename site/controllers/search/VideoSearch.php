<?php
//to get all alphabets in the subtitles table
//SELECT DISTINCT LEFT(title, 1) as letter FROM subtitles ORDER BY letter
	class CVideoSearch{
			
		function VideoSearch(){
			return self::VideoSearch_content();
		}
	
		function VideoSearch_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function VideoSearch_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function VideoSearch_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("search_VideoSearch_title")),
				  array("{VideoTitle}", $GLOBALS['system']->l("search_VideoSearch_VideoTitle")),
				  array("{submit}", $GLOBALS['system']->l("search_VideoSearch_submit")),
				  array("{reset}", $GLOBALS['system']->l("search_VideoSearch_reset")),
				  array("{Language}", $GLOBALS['system']->l("search_VideoSearch_language")),
				  array("{Category}",$GLOBALS['system']->l("search_VideoSearch_category")),
				  array("{Genre}", $GLOBALS['system']->l("search_VideoSearch_genre")),
				  array("{Country}", $GLOBALS['system']->l("search_VideoSearch_country")),
				  array("{Year}", $GLOBALS['system']->l("search_VideoSearch_year")),
				  array("{Status}", $GLOBALS['system']->l("search_VideoSearch_status")),
				  array("{vthistory}", $GLOBALS['vars']['VideoTitle']),
				  array("{SearchLanguage}", self::languages()),
				  array("{SearchCategory}", self::categories()),
				  array("{SearchGenre}", self::genres()),
				  array("{SearchCountry}", self::countries()),
				 );
			 
		return $content;
		}
		
		function languages(){
			$languages = $GLOBALS['system']->GetLanguages();
			for ($i=0; $i < count($languages); $i++) {
				if($GLOBALS['vars']['language']==$languages[$i]['id']){$selected="selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$languages[$i]['id']."' ".$selected.">".$languages[$i]['language']."</option>";
			}
			return $res;
		}
		
		function categories(){
			$categories = $GLOBALS['system']->GetVideoCategories();
			for ($i=0; $i < count($categories); $i++) {
				if($GLOBALS['vars']['category']==$categories[$i]['id']){$selected="selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$categories[$i]['id']."' ".$selected.">".$categories[$i]['category']."</option>";
			}
			return $res;
		}
		
		function countries(){
			$countries = $GLOBALS['system']->GetCountries();
			for ($i=0; $i < count($countries); $i++) {
				if($GLOBALS['vars']['country']==$countries[$i]['id']){$selected="selected='selected'";}else{$selected="";}
				$res .= "<option value='".$countries[$i]['id']."' ".$selected.">".$countries[$i]['short_name']."</option>";
			}
			return $res;
		}

		function genres(){
			$genres = $GLOBALS['system']->GetGenres();
			for ($i=0; $i < count($genres); $i++) {
				if($GLOBALS['vars']['genre']==$genres[$i]['id']){$selected="selected='selected'";}else{$selected="";}
				$res .= "<option value='".$genres[$i]['id']."' ".$selected.">".$genres[$i]['genre']."</option>";
			}
			return $res;
		}
		
	
			
	}
	
	
	
?>