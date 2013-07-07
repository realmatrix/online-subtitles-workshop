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
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>