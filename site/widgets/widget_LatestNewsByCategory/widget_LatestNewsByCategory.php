<?php

	class Wwidget_LatestNewsByCategory{
		
		function widget_LatestNewsByCategory(){
			return self::widget_LatestNewsByCategory_render();
		}
		
		function widget_LatestNewsByCategory_info(){
			$info = array(
			'name' => 'Latest News',
			'description' => 'widget description',
			'by' => 'RealMatrix',
			'date' => '2014-14-1',
			'version' => '1.0',
			);
			return $info;
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
		
		function GetAllNews(){
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `subtitles` ORDER BY `id` DESC LIMIT 10", array());
			$content = "div classs='AllNews-container'";
				for ($i=0; $i < count($res); $i++) { 
					$content .= "<div class='AllNews-row'>";
					$content .= "<div class='AllNews-row-left'>";
					$content .= "<div class='AllNews-row-left-img'>image here</div>";
					$content .= "</div>";
					$content .= "<div class='AllNews-row-right'>";
					$content .= "<div class='AllNews-row-right-cell'>title - version</div>";
					$content .= "<div class='AllNews-row-right-cell'>translated by - checked by</div>";
					$content .= "<div class='AllNews-row-right-cell'>views - downloads - comment - rating</div>";
					$content .= "</div>";
					$content .= "</div>";
				}
			$content .= "</div>";
		}	
		
	}


?>