<?php

	class Wwidget_LatestNewsByCategory{
		
		function widget_LatestNewsByCategory(){
			return self::widget_LatestNewsByCategory_render();
		}
		
		function widget_LatestNewsByCategory_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
	
		function widget_LatestNewsByCategory_options(){
			$options = array(
			"show"=>array("home"), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_LatestNewsByCategory_render(){
			$array = array(
				//array("{AddVideo}", $GLOBALS['COMMON']->l('widget_LatestNewsByCategory_addvideo')),
			);
			return $array;
		}	
		
	}


?>