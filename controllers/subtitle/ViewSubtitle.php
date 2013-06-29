<?php

	class CViewSubtitle{
			
		function ViewSubtitle(){
			return self::ViewSubtitle_content();
		}
	
		function ViewSubtitle_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function ViewSubtitle_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewSubtitle_content(){
			$subtitleinfo = $GLOBALS['COMMON']->GetSubtitleInfo($GLOBALS['vars']['sid']);
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_ViewSubtitle_title")),
				  array("{Creleasename}", $subtitleinfo[0]['release_name']),
				  array("{Cversion}", $subtitleinfo[0]['version']),
				  array("{Ccountry}", self::country($subtitleinfo[0]['country'])),
				  array("{Clanguage}", self::language($subtitleinfo[0]['language'])),
				  array("{Cfps}", $subtitleinfo[0]['fps_sec'].".".$subtitleinfo[0]['fps_mil_sec']),
				  array("{Cformat}", self::format($subtitleinfo[0]['format'])),
				  array("{Ccds}", $subtitleinfo[0]['cds']),
				  array("{releasename}", $GLOBALS['COMMON']->l('subtitle_ViewSubtitle_ReleaseName')),
				  array("{version}", $GLOBALS['COMMON']->l('subtitle_ViewSubtitle_version')),
				  array("{country}", $GLOBALS['COMMON']->l('subtitle_ViewSubtitle_country')),
				  array("{language}", $GLOBALS['COMMON']->l('subtitle_ViewSubtitle_language')),
				  array("{fps}", $GLOBALS['COMMON']->l('subtitle_ViewSubtitle_fps')),
				  array("{format}", $GLOBALS['COMMON']->l('subtitle_ViewSubtitle_format')),
				  array("{cds}", $GLOBALS['COMMON']->l('subtitle_ViewSubtitle_cds')),
				 );
			 
		return $content;
		}

		function country($id){
			$country = $GLOBALS['COMMON']->GetCountryById($id);
			$res = $country[0]['short_name'];
			return $res;
		}


		function language($id){
			$language = $GLOBALS['COMMON']->GetLanguageById($id);
			$res = $language[0]['language'];
			return $res;
		}



		function format($id){
			$format = $GLOBALS['COMMON']->GetFormatById($id);
			$res = $format[0]['format'];
			return $res;
		}
			
			
	}
	
	
	
?>