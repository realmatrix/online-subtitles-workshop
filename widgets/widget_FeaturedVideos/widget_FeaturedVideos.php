<?php

	class Wwidget_FeaturedVideos{
		
		function widget_FeaturedVideos(){
			return self::widget_FeaturedVideos_render();
		}
		
		function widget_FeaturedVideos_options(){
			$options = array(
			"show"=>array("home",), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_FeaturedVideos_render(){
			$array = array(
				array("{TemplatePath}",$GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template']),
			);
			return $array;
		}
		
	}

	
?>