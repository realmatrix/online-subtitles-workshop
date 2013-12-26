<?php

	class CUploadThumbnail{
		
		function UploadThumbnail(){
			return self::UploadThumbnail_content();
		}
	
		function UploadThumbnail_hooks(){
			$array = array(
				array("UploadThumb", "upload"),
			);
			return $array;
		}
		
		function UploadThumbnail_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function UploadThumbnail_content(){
			$video = $GLOBALS['COMMON']->GetVideoInfo($GLOBALS['vars']['vid']);
				$content = array
				  (
				  array("{UploadThumbnail}", $GLOBALS['COMMON']->l('video_UploadThumbnail_UploadThumbnail')),
				  array("{vid}", $GLOBALS['vars']['vid']),
				 );
			 
		return $content;
		}
		
		function Upload(){
			ignore_user_abort(true);
			if ($_FILES["file"]["error"] > 0 and $_FILES["file"]["error"] != 4){$GLOBALS['ERROR'][]=$_FILES["file"]["error"]; return FALSE;}
			if ($_FILES["file"]["error"] == 4 and $GLOBALS['vars']['subtitletext']==""){$GLOBALS['ERROR'][]="no thumbnail selected."; return FALSE;}
			
			$FileName = $_FILES["file"]["name"];
			$FileType = $_FILES["file"]["type"];
			$FileSize = $_FILES["file"]["size"] / 1024; //kB
			$TmpName = $_FILES["file"]["tmp_name"];
			
			$allowedExts = array("jpg", "gif");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);

			$key = $GLOBALS['vars']['vid']."_".$_SESSION['id'].$GLOBALS['COMMON']->GetMicroTime().$GLOBALS['COMMON']->GenRandomStr(5).".".$extension;
			$file = "uploads/thumbnails/video/".$key;

			if(!in_array($extension, $allowedExts)){$GLOBALS['ERROR'][]="invalid file type only ".implode(",", $allowedExts)." is allowed." ; return FALSE;}
			move_uploaded_file($_FILES["file"]["tmp_name"], $file);
			
			$args = array(
				array(":id", $GLOBALS['vars']['vid'], "str"),
				array(":key", $key, "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("UPDATE `videos` SET `thumbnail` = :key WHERE `id` = :id ", $args, $ExecState);
			if($ExecState===TRUE){$GLOBALS['SUCCESS'][]="thumbnail uploaded successfully.";}else{$GLOBALS['ERROR'][]="uploading thumbnail failed.";}	
			
		}

}