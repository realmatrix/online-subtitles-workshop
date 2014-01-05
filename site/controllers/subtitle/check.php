<?php

	class Ccheck{
			
		function check_sections(){
			$array = array(
				array("subtitle", "CheckSubtitle", $GLOBALS['vars'], self::ViewCheckSubtitle()),
				array("player", "EditorPlayer", $GLOBALS['vars'], self::show()),
				array("subtitle", "SubtitleCDS", $GLOBALS['vars'], TRUE),
				array("subtitle", "ViewSubtitle", $GLOBALS['vars'], TRUE),
			);
			return $array;
		}
		
		function check_set(){
			$GLOBALS['vars']['PageTitle'] = "Check Subtitle";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("my subtitles", "page=subtitle&sec=list"),
				array("check subtitle", ""),
			);
		}	
		
		function ViewCheckSubtitle(){
			if($GLOBALS['vars']['sid']!="" and $GLOBALS['vars']['cid']!=""){return TRUE;}else{return FALSE;}
		}
		
		function show(){
			if($GLOBALS['vars']['sid']=="" or $GLOBALS['vars']['cid']==""){return FALSE;}else{return TRUE;}
		}
			
	}

	
?>