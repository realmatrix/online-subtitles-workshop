<?php

	class Wwidget_Manage{
		
		function widget_Manage(){
			return self::widget_Manage_render();
		}
	
		function widget_Manage_options(){
			$options = array(
			"show"=>array(), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"yes", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_Manage_render(){
			$array = array(
				array("{test}", "test"),
			);
			return $array;
		}	
		
	}


?>