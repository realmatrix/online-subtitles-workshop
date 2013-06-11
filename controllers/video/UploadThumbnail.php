<?php

	class CUploadThumbnail{
		
		function UploadThumbnail(){
			return self::UploadThumbnail_content();
		}
	
		function UploadThumbnail_hooks(){
			$array = array(
				array("test", "test"),
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
				  array("{test}", $video[0]['test']),
				 );
			 
		return $content;
		}

}