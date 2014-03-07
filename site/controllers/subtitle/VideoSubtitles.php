<?php

	class CVideoSubtitles{

		
		function VideoSubtitles(){
			return self::VideoSubtitles_content();
		}
	
		function VideoSubtitles_hooks(){
			$array = array(
			);
			return $array;
		}
			
		function VideoSubtitles_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function VideoSubtitles_content(){
				$content = array
				  (
				  array("{vid}", $GLOBALS['vars']['vid']),
				  array("{TableRows}", self::TableRows()),
				  array("{VideoSubtitles}", $GLOBALS['system']->l('subtitle_VideoSubtitles_VideosSubtitles')),
				 );
			 
		return $content;
		}
		
		function subtitles(){
			$params=array(
				array(":vid", $GLOBALS['vars']['vid'], "str"),
			);
			$res=$GLOBALS['system']->db_query("select * from subtitles where vid=:vid", $params);
			return $res;
		}
		
		function TableRows(){
			$subtitles = self::subtitles();
			$res = "";
			for ($i=0; $i < count($subtitles); $i++) {
			$country=$GLOBALS['system']->GetCountryById($subtitles[$i]['country']); 
				$res.="<tr class='odd gradeX'>";
				$res.="<td><img src='".$GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template']."/files/country-flags/".$country[0]['iso2'].".png' ></td>";
				$res.="<td></td>";
				$res.="<td>".$subtitles[$i]['version']."</td>";
				$res.="<td></td>";
				$res.="<td></td>";
				$res.="<td></td>";
				$res.="<td></td>";
				$res.="</tr>";
			}
			return $res;
		}
			
	}
	
	
	
?>