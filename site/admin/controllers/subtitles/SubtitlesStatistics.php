<?php

	class CSubtitlesStatistics{
			
		function SubtitlesStatistics(){
			return self::SubtitlesStatistics_content();
		}
	
		function SubtitlesStatistics_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function SubtitlesStatistics_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SubtitlesStatistics_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_SubtitlesStatistics_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>