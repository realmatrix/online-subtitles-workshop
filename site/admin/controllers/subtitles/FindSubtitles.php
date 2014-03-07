<?php

	class CFindSubtitles{
			
		function FindSubtitles(){
			return self::FindSubtitles_content();
		}
	
		function FindSubtitles_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function FindSubtitles_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function FindSubtitles_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_FindSubtitles_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>