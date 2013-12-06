<?php

	class Cedit{
			
		function edit_sections(){
			$array = array(
				array("subtitle", "SubtitleCDS", $GLOBALS['vars'], TRUE),
				array("team", "DownloadSubtitle", $GLOBALS['vars'], self::CheckDownload()),
				array("subtitle", "EditorControls", $GLOBALS['vars'], self::show()),
				array("player", "EditorPlayer", $GLOBALS['vars'], self::show()),
				array("subtitle", "LineInfo", $GLOBALS['vars'], self::show()),
				array("subtitle", "SubtitleEditor", $GLOBALS['vars'], self::show()),
				array("subtitle", "EditorInfo", $GLOBALS['vars'], self::show()),
			);
			return $array;
		}
		
		function edit_set(){
			$GLOBALS['vars']['PageTitle'] = "Edit Subtitle";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("my subtitles", "page=subtitle&sec=list"),
				array("subtitle editor", "page=subtitle&sec=list&sid=".$GLOBALS['vars']['sid']."&cid=".$GLOBALS['vars']['cid']),
			);
		}
		
		function show(){
			if($GLOBALS['vars']['sid']=="" or $GLOBALS['vars']['cid']==""){return FALSE;}else{return TRUE;}
		}
		
		function CheckDownload(){
			if($GLOBALS['vars']['dl']=="yes"){return TRUE;}	else {return FALSE;}
		}	
			
	}


?>