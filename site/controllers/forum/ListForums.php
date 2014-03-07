<?php

	class CListForums{
	
		function ListForums(){
			return self::ListForums_content();
		}
	
		function ListForums_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function ListForums_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function ListForums_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("forum_ListForums_title")),
				  array("{TableRows}", self::GetForums())
				 );
			 
		return $content;
		}
		
		function GetForums(){
			$args = array(
				array(":cat", $GLOBALS['vars']['cat'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `forums` WHERE `category` = :cat", $args);
			$rows = "";
			for ($i=0; $i < count($res); $i++) { 
				$rows .= "<tr>";
				$rows .= "<td><a href='index.php?page=forum&sec=threads&cat=".$GLOBALS['vars']['cat']."&fid=".$res[$i]['id']."'>".$res[$i]['title']."</a></td>";
				$rows .= "<td>".$res[$i]['description']."</td>";
				$rows .= "<td>threads count</td>";
				$rows .= "</tr>";
			}
			return $rows;
		}
	
			
	}
	
	
	
?>