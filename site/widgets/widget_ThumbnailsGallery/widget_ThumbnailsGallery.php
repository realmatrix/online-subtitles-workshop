<?php

	class Wwidget_ThumbnailsGallery{
		
		function widget_ThumbnailsGallery(){
			return self::widget_ThumbnailsGallery_render();
		}
		
		function widget_ThumbnailsGallery_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
	
		function widget_ThumbnailsGallery_options(){
			$options = array(
			"show"=>array("home",), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"both", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_ThumbnailsGallery_render(){
			$array = array(
				array("{ThumbnailGallery}", $GLOBALS['COMMON']->l("widget_ThumbnailGallery_title")),
			);
			$array = array_merge($array, self::GetVideos());
			return $array;
		}	
		
		function GetVideos(){
			$args = array(
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `videos` WHERE `public` = 1 and `thumbnail` !='' ORDER BY RAND() limit 24", $args);
			$array = array();
			for ($i=0; $i < count($res); $i++) {
				$array[] = array('{id'.$i.'}', $res[$i]['id']); 
				$array[] = array('{title'.$i.'}', $res[$i]['title']);
				$array[] = array('{thumbnail'.$i.'}', $res[$i]['thumbnail']);
			}
			return $array;
		}
		
		
	}


?>