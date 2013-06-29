<?php

	class CSubtitleCDS{
			
		function SubtitleCDS(){
			return self::SubtitleCDS_content();
		}
	
		function SubtitleCDS_hooks(){
			$array = array(
				array("DeleteSubtitles", "DeleteSubtitles"),
			);
			return $array;
		}
			
		function SubtitleCDS_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SubtitleCDS_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_SubtitleCDS_title")),
				 );
			 
		return $content;
		}
		

		

	
			
	}
	
	
	
?>