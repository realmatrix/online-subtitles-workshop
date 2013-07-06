<?php

	class CVideoList{
		
		function VideoList(){
			return self::VideoList_content();
		}
	
		function VideoList_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
		
		function VideoList_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function VideoList_content(){
			$video = $GLOBALS['COMMON']->GetVideoInfo($GLOBALS['vars']['vid']);
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("video_VideoList_title")),
				 );
			 
		return $content;
		}

}