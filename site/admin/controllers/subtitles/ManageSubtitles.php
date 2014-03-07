<?php

	class CManageSubtitles{
			
		function ManageSubtitles(){
			return self::ManageSubtitles_content();
		}
	
		function ManageSubtitles_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ManageSubtitles_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ManageSubtitles_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_ManageSubtitles_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>