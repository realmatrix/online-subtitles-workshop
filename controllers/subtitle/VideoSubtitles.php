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
			"loggedin"=>"both",
			);
			return $options;
		}
				
		function VideoSubtitles_content(){
			if($_GET['vid']!=""){$vid=$_GET['vid'];}
			if($_POST['vid']!=""){$vid=$_POST['vid'];}
				$content = array
				  (
				  array("{vid}", $vid),
				  array("{TableRows}", self::TableRows()),
				  array("{VideoSubtitles}", $GLOBALS['COMMON']->l('subtitle_VideoSubtitles_VideosSubtitles')),
				 );
			 
		return $content;
		}
		
		function subtitles(){
			$vid = $_GET['vid'];
			$params=array(
				array(":vid", $vid, "str"),
			);
			$res=$GLOBALS['COMMON']->db_query("select * from Subtitles where vid=:vid", $params);
			return $res;
		}
		
		function TableRows(){
			$subtitles = self::subtitles();
			$res = "";
			for ($i=0; $i < count($subtitles); $i++) {
			$country=$GLOBALS['COMMON']->GetCountryById($subtitles[$i]['country']); 
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