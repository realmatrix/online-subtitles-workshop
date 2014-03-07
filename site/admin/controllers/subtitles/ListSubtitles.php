<?php

	class CListSubtitles{
			
		function ListSubtitles(){
			return self::ListSubtitles_content();
		}
	
		function ListSubtitles_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ListSubtitles_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ListSubtitles_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_ListSubtitles_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>