<?php

	class Wwidget_VideoGallery{
		
		function widget_VideoGallery(){
			return self::widget_VideoGallery_render();
		}
		
		function widget_VideoGallery_options(){
			$options = array(
			"show"=>array("home",), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_VideoGallery_render(){
			$array = array();
			return $array;
		}
		
	}

	
?>