<?php
//to get all alphabets in the subtitles table
//SELECT DISTINCT LEFT(title, 1) as letter FROM subtitles ORDER BY letter
	class CAdvancedSearch{
			
		function AdvancedSearch(){
			return self::AdvancedSearch_content();
		}
	
		function AdvancedSearch_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function AdvancedSearch_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function AdvancedSearch_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("search_AdvancedSearch_title")),
				  array("{VideoTitle}", $GLOBALS['COMMON']->l("search_AdvancedSearch_VideoTitle")),
				  array("{submit}", $GLOBALS['COMMON']->l("search_AdvancedSearch_submit")),
				  array("{reset}", $GLOBALS['COMMON']->l("search_AdvancedSearch_reset")),
				  array("{Language}", $GLOBALS['COMMON']->l("search_AdvancedSearch_language")),
				  array("{Category}",$GLOBALS['COMMON']->l("search_AdvancedSearch_category")),
				  array("{Genre}", $GLOBALS['COMMON']->l("search_AdvancedSearch_genre")),
				  array("{Country}", $GLOBALS['COMMON']->l("search_AdvancedSearch_country")),
				  array("{Year}", $GLOBALS['COMMON']->l("search_AdvancedSearch_year")),
				  array("{Status}", $GLOBALS['COMMON']->l("search_AdvancedSearch_status")),
				  array("{vthistory}", $GLOBALS['vars']['VideoTitle']),
				  array("{SearchLanguage}", self::languages()),
				  array("{SearchCategory}", self::categories()),
				  array("{SearchGenre}", self::genres()),
				  array("{SearchCountry}", self::countries()),
				 );
			 
		return $content;
		}
		
		function languages(){
			$languages = $GLOBALS['COMMON']->GetLanguages();
			for ($i=0; $i < count($languages); $i++) {
				if($GLOBALS['vars']['language']==$languages[$i]['id']){$selected="selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$languages[$i]['id']."' ".$selected.">".$languages[$i]['language']."</option>";
			}
			return $res;
		}
		
		function categories(){
			$categories = $GLOBALS['COMMON']->GetVideoCategories();
			for ($i=0; $i < count($categories); $i++) {
				if($GLOBALS['vars']['category']==$categories[$i]['id']){$selected="selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$categories[$i]['id']."' ".$selected.">".$categories[$i]['category']."</option>";
			}
			return $res;
		}
		
		function countries(){
			$countries = $GLOBALS['COMMON']->GetCountries();
			for ($i=0; $i < count($countries); $i++) {
				if($GLOBALS['vars']['country']==$countries[$i]['id']){$selected="selected='selected'";}else{$selected="";}
				$res .= "<option value='".$countries[$i]['id']."' ".$selected.">".$countries[$i]['short_name']."</option>";
			}
			return $res;
		}

		function genres(){
			$genres = $GLOBALS['COMMON']->GetGenres();
			for ($i=0; $i < count($genres); $i++) {
				if($GLOBALS['vars']['genre']==$genres[$i]['id']){$selected="selected='selected'";}else{$selected="";}
				$res .= "<option value='".$genres[$i]['id']."' ".$selected.">".$genres[$i]['genre']."</option>";
			}
			return $res;
		}
		
	
			
	}
	
	
	
?>