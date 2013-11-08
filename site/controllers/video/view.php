<?php

	class Cview{
			
		function view_sections(){
			$array = array(
				array("video", "UploadThumbnail", $GLOBALS['vars'], self::Show()),
				array("player", "ViewPlayer", $GLOBALS['vars'], self::CheckVideoSource()),
				array("video", "ViewVideo", $GLOBALS['vars'], TRUE),
				array("video", "VideoSynopsis", $GLOBALS['vars'], TRUE),
				array("subtitle", "VideoSubtitles", $GLOBALS['vars'], TRUE),
				array("subtitle", "AddSubtitle", $GLOBALS['vars'], $GLOBALS['COMMON']->IsLoggedin()),
			);
			return $array;
		}
		
		function view_set(){
			$GLOBALS['vars']['PageTitle'] = ">>>> ???????????? <<<<";
			$GLOBALS['vars']['PageDesc'] = ">>>> ???????????? <<<<";
		}
		
		function Show(){
			if(self::CheckOwner() and !self::IsThumbnailExist()){return TRUE;}else{return FALSE;}
		}
		
		function CheckOwner(){
			$VideoInfo = $GLOBALS['COMMON']->GetVideoInfo($GLOBALS['vars']['vid']);
			$owner = $VideoInfo[0][uid];
			if($_SESSION['id']==$owner){return TRUE;}else{return FALSE;}
		}
		
		function CheckVideoSource(){
			$args = array(
				array(":id", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Videos` WHERE `id` = :id", $args);
			if($res[0]['source']!=""){return TRUE;}else{return FALSE;}
		}
		
		function IsThumbnailExist(){
			if(self::CheckOwner()){
			$args = array(
				array(":id", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Videos` WHERE `id` = :id", $args);
			if($res[0]['thumbnail']!=""){return TRUE;}else{return FALSE;}
			}
		}	
			
	}

	
?>