<?php

	class Wwidget_top10{
		
		function widget_top10(){
			return self::widget_top10_render();
		}
		
		function widget_top10_install(){
			
		}
		
		function widget_top10_schema(){

		}
		
		function widget_top10_info(){
			$info = array(
			'name' => 'Top 10',
			'description' => 'widget description',
			'by' => 'RealMatrix',
			'date' => '2014-14-1',
			'version' => '1.0',
			);
			return $info;
		}
		
		function widget_top10_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
	
		function widget_top10_options(){
			$options = array(
			"show"=>array("home"), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_top10_render(){
			$array = array(
				//array("{AddVideo}", $GLOBALS['system']->l('widget_top10_addvideo')),
			);
			return $array;
		}	
		
	}


?>