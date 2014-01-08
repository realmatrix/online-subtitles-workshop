<?php

	class Wwidget_LatestVideosByCategory{
		
		function widget_LatestVideosByCategory(){
			return self::widget_LatestVideosByCategory_render();
		}
		
		function widget_LatestVideosByCategory_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
	
		function widget_LatestVideosByCategory_options(){
			$options = array(
			"show"=>array("home"), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_LatestVideosByCategory_render(){
			$array = array(
				//array("{AddVideo}", $GLOBALS['COMMON']->l('widget_LatestVideosByCategory_addvideo')),
				array("{AllVideos}", self::GetAll()),
				array("{Movies}", self::GetMovies()),
				array("{TvShows}", self::GetTV()),
				array("{Trailers}", self::GetTrailers()),
			);
			return $array;
		}	
		
		function GetAll(){
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `videos` order by `id` desc limit 10", array());
			$content = "";
			for ($i=0; $i < count($res); $i++) { 
				$content.="<div class='widget-latestvideos-all'>";
				$content.="<div class='widget-latestvideos-all-cell'>";
				$content.="<div class='widget-latestvideos-all-thubmnail'><img class='widget-latestvideos-all-thubmnailimg' src='uploads/thumbnails/video/".$res[$i]['thumbnail']."'></div>";
				$content.="<div class='widget-lateestvideos-all-videoinfo'>";
				$content.="<div class='widget-latestvideos-all-title'><a href='index.php?page=video&sec=view&vid=".$res[$i]['id']."'>".$res[$i]['title']."</a></div>";
				$content.="</div>";
				$content.="</div>";
				$content.="</div>";
			}
			return $content;
		}
		
		function GetMovies(){
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `videos` where `type` = 1 order by `id` desc limit 10", array());
			$content = "";
			for ($i=0; $i < count($res); $i++) { 
				$content.="<div class='widget-latestvideos-movies'>";
				$content.="<a href='index.php?page=video&sec=view&vid=".$res[$i]['id']."'>".$res[$i]['title']."</a>";
				$content.="</div>";
			}
			return $content;
		}
		
		function GetTV(){
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `videos` where `type` = 2 order by `id` desc limit 10", array());
			$content = "";
			for ($i=0; $i < count($res); $i++) { 
				$content.="<div class='widget-latestvideos-tv'>";
				$content.="<a href='index.php?page=video&sec=view&vid=".$res[$i]['id']."'>".$res[$i]['title']."</a>";
				$content.="</div>";
			}
			return $content;
		}
		
		function GetTrailers(){
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `videos` where `type` = 4 order by `id` desc limit 10", array());
			$content = "";
			for ($i=0; $i < count($res); $i++) { 
				$content.="<div class='widget-latestvideos-trailer'>";
				$content.="<a href='index.php?page=video&sec=view&vid=".$res[$i]['id']."'>".$res[$i]['title']."</a>";
				$content.="</div>";
			}
			return $content;
		}
		
	}


?>