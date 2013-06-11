<?php

	class CUploadThumbnail{
		
		function UploadThumbnail(){
			return self::UploadThumbnail_content();
		}
	
		function UploadThumbnail_hooks(){
			$array = array(
				array("UploadThumbnail", "upload"),
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
			$video = Common::GetVideoInfo($_GET['vid']);
				$content = array
				  (
				  array("{UploadThumbnail}", $GLOBALS['lang']['video_UploadThumbnail_UploadThumbnail']),
				  array("{vid}", $_GET['vid']),
				 );
			 
		return $content;
		}
		
		function upload(){
			if($_POST){
			$name = $_POST['photo']['name'];
			$tmp = $_POST['photo']['tmp_name'];
			$path = "images/".basename(name);
			if(move_uploaded_file($tmp,$path)){
			        print("Done! File saved...");
			}else{
			        die("Error on uploading!");
			}
			}
		}

}