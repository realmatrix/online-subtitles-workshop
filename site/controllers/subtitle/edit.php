<?php

	class Cedit{
			
		function edit_sections(){
			$array = array(
				array("subtitle", "ViewSubtitle", $GLOBALS['vars'], self::CheckPermission()),
				array("subtitle", "SubtitleCDS", $GLOBALS['vars'], self::CheckPermission()),
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
			if(self::CheckPermission()===FALSE){return FALSE;}
			if($GLOBALS['vars']['sid']=="" or $GLOBALS['vars']['cid']==""){return FALSE;}else{return TRUE;}
		}
		
		function CheckDownload(){
			if(self::CheckPermission()===FALSE){return FALSE;}
			if($GLOBALS['vars']['dl']=="yes"){return TRUE;}	else {return FALSE;}
		}	
		
		function CheckPermission(){
			$res = FALSE;
			if($GLOBALS['system']->IsSubtitleOwner($GLOBALS['vars']['sid'])===TRUE){$res = TRUE;}
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":uid", $_SESSION['id'], "str"),
			);
			$permissions = $GLOBALS['system']->db_query("SELECT * FROM `subtitlepermissions` WHERE `sid` = :sid and `uid` = :uid", $args);
			if(count($permissions)>0){$res = TRUE;}
			if($res === FALSE){$GLOBALS['ERROR'][] = "Don't have permissions to view this page.";}
			return $res;
		}
			
	}


?>