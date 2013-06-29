<?php

	class CSubtitleAddTeam{
			
		function SubtitleAddTeam(){
			return self::SubtitleAddTeam_content();
		}
	
		function SubtitleAddTeam_hooks(){
			$array = array(
				array("DeleteSubtitles", "DeleteSubtitles"),
			);
			return $array;
		}
			
		function SubtitleAddTeam_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SubtitleAddTeam_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_SubtitleAddTeam_title")),
				 );
			 
		return $content;
		}
	
			
	}
	
	
	
?>