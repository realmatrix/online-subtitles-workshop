<?php

	class CManageVideos{
			
		function ManageVideos(){
			return self::ManageVideos_content();
		}
	
		function ManageVideos_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ManageVideos_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ManageVideos_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_ManageVideos_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>