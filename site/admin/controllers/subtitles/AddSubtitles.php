<?php

	class CAddSubtitles{
			
		function AddSubtitles(){
			return self::AddSubtitles_content();
		}
	
		function AddSubtitles_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function AddSubtitles_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function AddSubtitles_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_AddSubtitles_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>