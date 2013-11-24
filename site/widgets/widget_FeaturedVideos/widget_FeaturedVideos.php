<?php

	class Wwidget_FeaturedVideos{
		
		function widget_FeaturedVideos(){
			return self::widget_FeaturedVideos_render();
		}
		
		function widget_FeaturedVideos_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
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
			$array = array_merge($array, self::GetVideos());
			return $array;
		}
		
		function GetVideos(){
			$args = array(
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Videos` WHERE `public` = 1 and `thumbnail` !='' and `featured` = 1 ORDER BY RAND() limit 10", $args);
			$array = array();
			for ($i=0; $i < count($res); $i++) {
				$array[] = array('{id'.$i.'}', $res[$i]['id']); 
				$array[] = array('{title'.$i.'}', str_replace('"', "'", $res[$i]['title']));
				$array[] = array('{source'.$i.'}', $res[$i]['source']);
				$array[] = array('{thumbnail'.$i.'}', $res[$i]['thumbnail']);
				$array[] = array('{description'.$i.'}', str_replace('"', "'", $res[$i]['synopsis']));
			}
			return $array;
		}
		
	}

	
?>