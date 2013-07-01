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
			$subtitleCDS = $GLOBALS['COMMON']->GetSubtitleCDS($GLOBALS['vars']['sid']);
			$res = "";
			for ($i=0; $i < count($subtitleCDS); $i++) {
				$cd = $i + 1; 
				$res .= "<option value='".$subtitleCDS[$i]['id']."'>".$subtitleCDS[$i]['title']."</option>";
			}
			return $res;	
		}
		
		
		function UploadSubtitle(){
			ignore_user_abort(true);
			if ($_FILES["file"]["error"] > 0 and $_FILES["file"]["error"] != 4){$GLOBALS['ERROR'][]=$_FILES["file"]["error"]; return FALSE;}
			if ($_FILES["file"]["error"] == 4 and $GLOBALS['vars']['subtitletext']==""){$GLOBALS['ERROR'][]="enter subtitle content or select file."; return FALSE;}
			if($GLOBALS['vars']['cd']==""){$GLOBALS['ERROR'][]="select cd."; return FALSE;}
			$key = $_SESSION['id'].$GLOBALS['COMMON']->GetMicroTime().$GLOBALS['COMMON']->GenRandomStr(5).".tmp";
			$file = "tmp/".$key;
			
			if($GLOBALS['vars']['subtitletext']==""){
			$FileName = $_FILES["file"]["name"];
			$FileType = $_FILES["file"]["type"];
			$FileSize = $_FILES["file"]["size"] / 1024; //kB
			$TmpName = $_FILES["file"]["tmp_name"];
			
			$allowedExts = array("srt");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			if(!in_array($extension, $allowedExts)){$GLOBALS['ERROR'][]="invalid file type only ".implode(",", $allowedExts)." is allowed." ; return FALSE;}
			move_uploaded_file($_FILES["file"]["tmp_name"], $file);
			}
			
			if($GLOBALS['vars']['subtitletext']!=""){
				file_put_contents($file, $GLOBALS['vars']['subtitletext']);
			}
			
			include "include/Srtparser.php";
			$parser = new Srtparser();
			$content = $parser->parse($file);
			unlink($file);
			$args = array();
			for ($i=0; $i < count($content); $i++) {
				$text = $content[$i]->{'text'};
				$text = str_replace("\r\n", "<br />", $text) ;
					$args[1][] = array(
					array(":sid".$i, $GLOBALS['vars']['sid'], "str"),
					array(":uid".$i, $_SESSION['id'], "str"),
					array(":cid".$i, $GLOBALS['vars']['cd'], ),
					array(":line".$i, $content[$i]->{'number'}, "str"),
					array(":start".$i, $content[$i]->{'startTime'}, "str"),
					array(":end".$i, $content[$i]->{'stopTime'}, "str"),
					array(":text".$i, $text, "str"),
				);
					if($i!=count($content)-1){$args[0][] = "(:sid".$i.", :uid".$i.", :cid".$i.", :line".$i.", :start".$i.", :end".$i.", :text".$i."),";}else{$args[0][]="(:sid".$i.", :uid".$i.", :cid".$i.", :line".$i.", :start".$i.", :end".$i.", :text".$i.")";}
			}
			//print_r($args);
			$res = $GLOBALS['COMMON']->db_query("INSERT INTO `SubtitlesContent` (`sid`, `uid`, `cid`, `line`, `start`, `end`, `text`) VALUES ", $args, $ExecState, TRUE);
			if($ExecState===TRUE){}else{$GLOBALS['ERROR'][]="uploading subtitle failed.";}	
			
		}
		
	
			
	}
	
	
	
?>