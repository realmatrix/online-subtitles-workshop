<?php

	class CListCategories{
	
		function ListCategories(){
			return self::ListCategories_content();
		}
	
		function ListCategories_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function ListCategories_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function ListCategories_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("forum_ListCategories_title")),
				  array("{TableRows}", self::GetCategories()),
				 );
			 
		return $content;
		}
		
		function GetCategories(){
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `ForumCategories`", array());
			$rows = "";
			for ($i=0; $i < count($res); $i++) { 
				$rows .= "<tr>";
				$rows .= "<td>".$res[$i]['title']."</td>";
				$rows .= "</tr>";
			}
			return $rows;
		}
	
			
	}
	
	
	
?>