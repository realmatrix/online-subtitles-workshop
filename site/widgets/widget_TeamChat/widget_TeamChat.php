<?php

	class Wwidget_TeamChat{
		
		function widget_TeamChat(){
			return self::widget_TeamChat_render();
		}
		
		function widget_TeamChat_info(){
			$info = array(
			'name' => 'Team Chat',
			'description' => 'widget description',
			'by' => 'RealMatrix',
			'date' => '2014-14-1',
			'version' => '1.0',
			);
			return $info;
		}
		
		function widget_TeamChat_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
	
		function widget_TeamChat_options(){
			$options = array(
			"show"=>array('subtitle'), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"yes", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_TeamChat_render(){
			$array = array(
				array("{sid}", $GLOBALS['vars']['sid']),
			);
			return $array;
		}	
		
		
	}


?>