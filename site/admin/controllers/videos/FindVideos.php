<?php

	class CFindVideos{
			
		function FindVideos(){
			return self::FindVideos_content();
		}
	
		function FindVideos_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function FindVideos_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function FindVideos_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_FindVideos_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>