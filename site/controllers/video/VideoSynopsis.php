<?php

	class CVideoSynopsis{
		
		function VideoSynopsis(){
			return self::VideoSynopsis_content();
		}
	
		function VideoSynopsis_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
		
		function VideoSynopsis_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function VideoSynopsis_content(){
			$video = $GLOBALS['system']->GetVideoInfo($GLOBALS['vars']['vid']);
				$content = array
				  (
				  array("{VideoSynopsis}", $video[0]['synopsis']),
				  array("{Synopsis}", $GLOBALS['system']->l('video_VideoSynopsis_Synopsis')),
				 );
			 
		return $content;
		}

}