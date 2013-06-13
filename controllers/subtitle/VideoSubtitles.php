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
				 );
			 
		return $content;
		}
		
		function subtitles(){
			$vid = $_GET['vid'];
			$params=array(
				array(":vid", $vid, "str"),
			);
			$res=Common::db_query("select * from Subtitles where vid=:vid", $params);
			return $res;
		}
		
		function TableRows(){
			$subtitles = self::subtitles();
			$res = "";
			for ($i=0; $i < count($subtitles); $i++) {
			$country=Common::GetCountryById(); 
				$res.="<tr>";
				$res.="<td></td>";
				$res.="<td></td>";
				$res.="<td></td>";
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