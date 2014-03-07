<?php

	class CListVideos{
			
		function ListVideos(){
			return self::ListVideos_content();
		}
	
		function ListVideos_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ListVideos_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ListVideos_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_ListVideos_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>