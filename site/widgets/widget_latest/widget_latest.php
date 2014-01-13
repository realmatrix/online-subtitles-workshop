<?php

	class Wwidget_latest{
		
		function widget_latest(){
			return self::widget_latest_render();
		}
		
		function widget_latest_info(){
			$info = array(
			'name' => 'Latest',
			'description' => 'widget description',
			'by' => 'RealMatrix',
			'date' => '2014-14-1',
			'version' => '1.0',
			);
		}
		
		function widget_latest_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
	
		function widget_latest_options(){
			$options = array(
			"show"=>array("home",), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_latest_render(){
			$array = array(
				//array("{AddVideo}", $GLOBALS['COMMON']->l('widget_latest_addvideo')),
			);
			return $array;
		}	
		
	}


?>