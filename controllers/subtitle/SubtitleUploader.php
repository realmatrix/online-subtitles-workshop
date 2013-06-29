<?php

	class CSubtitleUploader{
			
		function SubtitleUploader(){
			return self::SubtitleUploader_content();
		}
	
		function SubtitleUploader_hooks(){
			$array = array(
				array("DeleteSubtitles", "DeleteSubtitles"),
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
				 );
			 
		return $content;
		}
	
			
	}
	
	
	
?>