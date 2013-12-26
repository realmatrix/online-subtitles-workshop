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
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `forumcategories`", array());
			$rows = "";
			for ($i=0; $i < count($res); $i++) { 
				$rows .= "<tr>";
				$rows .= "<td><a href='index.php?page=forum&sec=forums&cat=".$res[$i]['id']."'>".$res[$i]['title']."</a></td>";
				$rows .= "<td>".$res[$i]['description']."</td>";
				$rows .= "<td>forums count</td>";
				$rows .= "</tr>";
			}
			return $rows;
		}
	
			
	}
	
	
	
?>