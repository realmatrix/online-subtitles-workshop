<?php

	class CVideoSearchResults{

	public static $rows = "";	
		
		function VideoSearchResults(){
			return self::VideoSearchResults_content();
		}
	
		function VideoSearchResults_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function VideoSearchResults_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function VideoSearchResults_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("search_VideoSearchResults_title")),
				  array("{TableRows}", self::$rows),
				 );
			 
		return $content;
		}

		function search(){
			$args = array(
				array(":title", "%".$GLOBALS['vars']['VideoTitle']."%", "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` WHERE `title` like :title", $args);
			$trows = "";
			for ($i=0; $i < count($res); $i++) { 
				$trows .= "<tr>";
				$trows .= "<td></td>";
				$trows .= "<td>".$res[$i]['title']."</td>";
				$trows .= "<td>".$res[$i]['genres']."</td>";
				$trows .= "<td>".$res[$i]['country']."</td>";
				$trows .= "<td>".$res[$i]['year']."</td>";
				$trows .= "<td></td>";
				$trows .= "<td></td>";
				$trows .= "<td></td>";
				$trows .= "<td></td>";
				$trows .= "<td></td>";
				$trows .= "</tr>";
			}
			self::$rows = $trows;
		}
		
	
			
	}
	
	
	
?>