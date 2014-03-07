<?php

	class CVideosStatistics{
			
		function VideosStatistics(){
			return self::VideosStatistics_content();
		}
	
		function VideosStatistics_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function VideosStatistics_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function VideosStatistics_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_VideosStatistics_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>