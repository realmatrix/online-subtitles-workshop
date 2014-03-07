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
			"loggedin"=>"both",
			);
			return $options;
		}
				
		function ViewSubtitle_content(){
			$subtitleinfo = $GLOBALS['system']->GetSubtitleInfo($GLOBALS['vars']['sid']);
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("subtitle_ViewSubtitle_title")),
				  array("{Creleasename}", $subtitleinfo[0]['release_name']),
				  array("{Cversion}", $subtitleinfo[0]['version']),
				  array("{Ccountry}", self::country($subtitleinfo[0]['country'])),
				  array("{Clanguage}", self::language($subtitleinfo[0]['language'])),
				  array("{Cfps}", $subtitleinfo[0]['fps_sec'].".".$subtitleinfo[0]['fps_mil_sec']),
				  array("{Cformat}", self::format($subtitleinfo[0]['format'])),
				  array("{Ccds}", $subtitleinfo[0]['cds']),
				  array("{releasename}", $GLOBALS['system']->l('subtitle_ViewSubtitle_ReleaseName')),
				  array("{version}", $GLOBALS['system']->l('subtitle_ViewSubtitle_version')),
				  array("{country}", $GLOBALS['system']->l('subtitle_ViewSubtitle_country')),
				  array("{language}", $GLOBALS['system']->l('subtitle_ViewSubtitle_language')),
				  array("{fps}", $GLOBALS['system']->l('subtitle_ViewSubtitle_fps')),
				  array("{format}", $GLOBALS['system']->l('subtitle_ViewSubtitle_format')),
				  array("{cds}", $GLOBALS['system']->l('subtitle_ViewSubtitle_cds')),
				 );
			 
		return $content;
		}

		function country($id){
			$country = $GLOBALS['system']->GetCountryById($id);
			$res = $country[0]['short_name'];
			return $res;
		}


		function language($id){
			$language = $GLOBALS['system']->GetLanguageById($id);
			$res = $language[0]['language'];
			return $res;
		}



		function format($id){
			$format = $GLOBALS['system']->GetFormatById($id);
			$res = $format[0]['format'];
			return $res;
		}
			
			
	}
	
	
	
?>