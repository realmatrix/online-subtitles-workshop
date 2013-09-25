<?php

	class CSubtitleDownload{
			
		function SubtitleDownload(){
			return self::SubtitleDownload_content();
		}
	
		function SubtitleDownload_hooks(){
			$array = array(
				array("DeleteSubtitles", "DeleteSubtitles"),
			);
			return $array;
		}
			
		function SubtitleDownload_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"both",
			);
			return $options;
		}
				
		function SubtitleDownload_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_SubtitleDownload_title")),
				 );
			 
		return $content;
		}
		
		

		

	
			
	}
	
	
	
?>