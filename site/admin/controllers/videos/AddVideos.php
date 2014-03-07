<?php

	class CAddVideos{
			
		function AddVideos(){
			return self::AddVideos_content();
		}
	
		function AddVideos_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function AddVideos_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function AddVideos_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_AddVideos_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>