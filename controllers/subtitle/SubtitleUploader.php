<?php

	class CSubtitleUploader{
			
		function SubtitleUploader(){
			return self::SubtitleUploader_content();
		}
	
		function SubtitleUploader_hooks(){
			$array = array(
				array("UploadSubtitle", "UploadSubtitle"),
			);
			return $array;
		}
			
		function SubtitleUploader_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SubtitleUploader_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_title")),
				  array("{sid}", $GLOBALS['vars']['sid']),
				  array("{cd}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_cd")),
				  array("{cdtitle}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_CDTitle")),
				  array("{subtitletext}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_SubtitleText")),
				  array("{subtitlefile}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_SubtitleFile")),
				  array("{note}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_note")),
				  array("{submit}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_submit")),
				  array("{cds}", self::CDList()),
				 );
			 
		return $content;
		}
		
		function CDList(){
			$SubtitleInfo = $GLOBALS['COMMON']->GetSubtitleInfo($GLOBALS['vars']['sid']);
			$res = "";
			for ($i=0; $i < $SubtitleInfo[0]['cds']; $i++) {
				$cd = $i + 1; 
				$res .= "<option value='".$cd."'>".$cd."</option>";
			}
			return $res;	
		}
		
		function UploadSubtitle(){
			if ($_FILES["file"]["error"] > 0 and $_FILES["file"]["error"] != 4){$GLOBALS['ERROR'][]=$_FILES["file"]["error"]; return FALSE;}
			if ($_FILES["file"]["error"] == 4 and $GLOBALS['vars']['subtitletext']==""){$GLOBALS['ERROR'][]="enter subtitle content or select file."; return FALSE;}
			if($GLOBALS['vars']['cd']==""){$GLOBALS['ERROR'][]="select cd."; return FALSE;}
			
			if($GLOBALS['vars']['subtitletext']==""){
			$FileName = $_FILES["file"]["name"];
			$FileType = $_FILES["file"]["type"];
			$FileSize = $_FILES["file"]["size"] / 1024; //kB
			$TmpName = $_FILES["file"]["tmp_name"];
			
			$allowedExts = array("srt");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			if(!in_array($extension, $allowedExts)){$GLOBALS['ERROR'][]="invalid file type only ".implode(",", $allowedExts)." is allowed." ; return FALSE;}
			move_uploaded_file($_FILES["file"]["tmp_name"], "tmp/" . $_FILES["file"]["name"]);
			}
			
			include "include/SubtitleParser.php";
			$parser = new Subtitleparser;
			$content = $parser->convert_srt($filename);
		}
		
	
			
	}
	
	
	
?>