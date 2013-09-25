<?php

	class CSearchResults{

	public static $rows = "";	
		
		function SearchResults(){
			return self::SearchResults_content();
		}
	
		function SearchResults_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function SearchResults_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function SearchResults_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("search_SearchResults_title")),
				  array("{TableRows}", self::$rows),
				 );
			 
		return $content;
		}

		function search(){
			$args = array(
				array(":title", "%".$GLOBALS['vars']['VideoTitle']."%", "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Videos` WHERE `title` like :title", $args);
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