<?php

	class Wwidget_LatestVideosByCategory{
		
		function widget_LatestVideosByCategory(){
			return self::widget_LatestVideosByCategory_render();
		}
		
		function widget_LatestVideosByCategory_install(){
			
		}
		
		function widget_LatestVideosByCategory_schema(){

		}
		
		function widget_LatestVideosByCategory_info(){
			$info = array(
			'name' => 'Latest Videos',
			'description' => 'widget description',
			'by' => 'RealMatrix',
			'date' => '2014-14-1',
			'version' => '1.0',
			);
			return $info;
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
				//array("{AddVideo}", $GLOBALS['system']->l('widget_LatestVideosByCategory_addvideo')),
				array("{AllVideos}", self::GetAll()),
				array("{Movies}", self::GetMovies()),
				array("{TvShows}", self::GetTV()),
				array("{Trailers}", self::GetTrailers()),
			);
			return $array;
		}	
		
		function GetAll(){
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` order by `id` desc limit 10", array());
			$content = "";
			for ($i=0; $i < count($res); $i++) { 
				$content.="<div class='widget-latestvideos-all'>";
				$content.="<div class='widget-latestvideos-all-cell'>";
				$content.="<div class='widget-latestvideos-all-thubmnail'><img class='widget-latestvideos-all-thubmnailimg' src='uploads/thumbnails/video/".$res[$i]['thumbnail']."'></div>";
				$content.="<div class='widget-lateestvideos-all-videoinfo'>";
				$content.="<div class='widget-latestvideos-all-title'><a href='index.php?page=video&sec=view&vid=".$res[$i]['id']."'>".$res[$i]['title']."</a></div>";
				$content.="<div clas=='widget-latestvideos-all-by'>Created BY: ".$GLOBALS['system']->GetUserName($res[$i]['uid'])."</div>";
				$content.="<div clas=='widget-latestvideos-all-views'>views: ".$res[$i]['views']."</div>";
				$content.="<div clas=='widget-latestvideos-all-subtitles'>subtitles: ".self::GetSubtitlesCount($res[$i]['id'])."</div>";
				$content.="<div clas=='widget-latestvideos-all-rating'>".self::GetVideoRateResult($res[$i]['id'])."</div>";
				$content.="</div>";
				$content.="</div>";
				$content.="</div>";
			}
			return $content;
		}
		
		function GetMovies(){
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` where `type` = 1 order by `id` desc limit 10", array());
			$content = "";
			for ($i=0; $i < count($res); $i++) { 
				$content.="<div class='widget-latestvideos-movies'>";
				$content.="<div class='widget-latestvideos-movies-cell'>";
				$content.="<div class='widget-latestvideos-movies-thubmnail'><img class='widget-latestvideos-movies-thubmnailimg' src='uploads/thumbnails/video/".$res[$i]['thumbnail']."'></div>";
				$content.="<div class='widget-lateestvideos-movies-videoinfo'>";
				$content.="<div class='widget-latestvideos-movies-title'><a href='index.php?page=video&sec=view&vid=".$res[$i]['id']."'>".$res[$i]['title']."</a></div>";
				$content.="<div clas=='widget-latestvideos-movies-by'>Created BY: ".$GLOBALS['system']->GetUserName($res[$i]['uid'])."</div>";
				$content.="<div clas=='widget-latestvideos-movies-views'>views: ".$res[$i]['views']."</div>";
				$content.="<div clas=='widget-latestvideos-movies-subtitles'>subtitles: ".self::GetSubtitlesCount($res[$i]['id'])."</div>";
				$content.="<div clas=='widget-latestvideos-movies-rating'>".self::GetVideoRateResult($res[$i]['id'])."</div>";
				$content.="</div>";
				$content.="</div>";
				$content.="</div>";
			}
			return $content;
		}
		
		function GetTV(){
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` where `type` = 2 order by `id` desc limit 10", array());
			$content = "";
			for ($i=0; $i < count($res); $i++) { 
				$content.="<div class='widget-latestvideos-tv'>";
				$content.="<div class='widget-latestvideos-tv-cell'>";
				$content.="<div class='widget-latestvideos-tv-thubmnail'><img class='widget-latestvideos-tv-thubmnailimg' src='uploads/thumbnails/video/".$res[$i]['thumbnail']."'></div>";
				$content.="<div class='widget-lateestvideos-tv-videoinfo'>";
				$content.="<div class='widget-latestvideos-tv-title'><a href='index.php?page=video&sec=view&vid=".$res[$i]['id']."'>".$res[$i]['title']."</a></div>";
				$content.="<div clas=='widget-latestvideos-tv-by'>Created BY: ".$GLOBALS['system']->GetUserName($res[$i]['uid'])."</div>";
				$content.="<div clas=='widget-latestvideos-tv-views'>views: ".$res[$i]['views']."</div>";
				$content.="<div clas=='widget-latestvideos-tv-subtitles'>subtitles: ".self::GetSubtitlesCount($res[$i]['id'])."</div>";
				$content.="<div clas=='widget-latestvideos-tv-rating'>".self::GetVideoRateResult($res[$i]['id'])."</div>";
				$content.="</div>";
				$content.="</div>";
				$content.="</div>";
			}
			return $content;
		}
		
		function GetTrailers(){
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` where `type` = 4 order by `id` desc limit 10", array());
			$content = "";
			for ($i=0; $i < count($res); $i++) { 
				$content.="<div class='widget-latestvideos-trailer'>";
				$content.="<div class='widget-latestvideos-trailer-cell'>";
				$content.="<div class='widget-latestvideos-trailer-thubmnail'><img class='widget-latestvideos-trailer-thubmnailimg' src='uploads/thumbnails/video/".$res[$i]['thumbnail']."'></div>";
				$content.="<div class='widget-lateestvideos-trailer-videoinfo'>";
				$content.="<div class='widget-latestvideos-trailer-title'><a href='index.php?page=video&sec=view&vid=".$res[$i]['id']."'>".$res[$i]['title']."</a></div>";
				$content.="<div clas=='widget-latestvideos-trailer-by'>Created BY: ".$GLOBALS['system']->GetUserName($res[$i]['uid'])."</div>";
				$content.="<div clas=='widget-latestvideos-trailer-views'>views: ".$res[$i]['views']."</div>";
				$content.="<div clas=='widget-latestvideos-trailer-subtitles'>subtitles: ".self::GetSubtitlesCount($res[$i]['id'])."</div>";
				$content.="<div clas=='widget-latestvideos-trailer-rating'>".self::GetVideoRateResult($res[$i]['id'])."</div>";
				$content.="</div>";
				$content.="</div>";
				$content.="</div>";
			}
			return $content;
		}

		function GetSubtitlesCount($vid){
			$args = array(
				array(":vid", $vid, "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `subtitles` WHERE `vid` = :vid", $args);
			return count($res);
		}
		
		function GetVideoRateResult($vid){
			$args = array(
				array(":vid", $vid, "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videorates` WHERE `vid` = :vid", $args);
			$TotalRates = 0;
			for ($i=0; $i < count($res); $i++) { 
				$TotalRates = $TotalRates + $res[$i]['rate'];
			}
			if(count($res)>0){
			$TotalRates = $TotalRates / count($res);
			$RateResult = ($TotalRates * 100) / 10;
			}else{
				$RateResult = 0;
			}
			$content = "";
			for ($i=1; $i <= 10; $i++) {
				if($i*10 <= $RateResult){
					$content.= "<img class='widget-latestvideos-all-rateresult-on'/>";
				}else{
					$content.= "<img class='widget-latestvideos-all-rateresult-off'/>";
				}
			}
			return $content;
		}
		
	}


?>