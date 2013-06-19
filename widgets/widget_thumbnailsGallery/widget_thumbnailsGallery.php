<?php

	class Wwidget_ThumbnailsGallery{
		
		function widget_ThumbnailsGallery(){
			return self::widget_ThumbnailsGallery_render();
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
				array("{test}", "test"),
			);
			return $array;
		}	
		
	}


?>