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
			return $info;
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
				array("{StartedTranslations}", self::GetLatestStartedSubtitles()),
			);
			return $array;
		}
		
		function GetLatestStartedSubtitles(){
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `subtitles` ORDER BY `id` DESC LIMIT 10", array());
			$content = "<div classs='LatestStatrtedSubtitles-container'>";
				for ($i=0; $i < count($res); $i++) {
				$VideoInfo = $GLOBALS['COMMON']->GetVideoInfo($res[$i]['vid']); 
				$Language = $GLOBALS['COMMON']->GetLanguageById($res[$i]['language']);
					$content .= "<div class='LatestStatrtedSubtitles-row'>";
					$content .= "<div class='LatestStatrtedSubtitles-row-row'>";
					$content .= "<div class='LatestStatrtedSubtitles-cell LatestStatrtedSubtitles-title'>".$VideoInfo[0]['title']."</div>";
					$content .= "<div class='LatestStatrtedSubtitles-cell LatestStatrtedSubtitles-version'>".$res[$i]['version']."</div>";
					$content .= "<div class='LatestStatrtedSubtitles-cell LatestStatrtedSubtitles-language'>".$Language[0]['language']."</div>";
					$content .= "<div class='LatestStatrtedSubtitles-cell LatestStatrtedSubtitles-progress'>".self::GetProgress($res[$i]['id'])."</div>";
					$content .= "</div>";
					$content .= "<div class='LatestStatrtedSubtitles-row-row'>";
					$content .= "<div class='LatestStatrtedSubtitles-cell LatestStatrtedSubtitles-by'>createdby</div>";
					$content .= "<div class='LatestStatrtedSubtitles-cell LatestStatrtedSubtitles-team'>teams</div>";
					$content .= "<div class='LatestStatrtedSubtitles-cell LatestStatrtedSubtitles-join'>join translation</div>";
					$content .= "</div>";
					$content .= "</div>";
				}
			$content .= "</div>";
			return $content;
		}
		
		function GetProgress($sid){
			$TotalDone = 0;
			$TotalNotDone = 0;
			$TotalLines = 0;
			$args = array(
				array(":sid", $sid, "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `subtitlecds` WHERE `sid` = :sid", $args);
			for ($i=0; $i < count($res); $i++) { 
				$args2 = array(
					array(":sid", $sid, "str"),
					array(":cid", $cid, "str"),
				);
			$res2 = $GLOBALS['COMMON']->db_query("SELECT `done` FROM `subtitlescontent` WHERE `sid` = :sid AND `cid` = :cid", $args2);
			$TotalLines = $TotalLines + count($res2);
			for ($j=0; $j < count($res2); $j++) { 
				if($res2[$j]['done']==1){$TotalDone++;}else{$TotalNotDone++;}
			}
			}
			echo $TotalLines;
			$result = (($TotalLines - $TotalNotDone)*100)/$TotalLines;
			return $result."%";
		}	


		
	}


?>