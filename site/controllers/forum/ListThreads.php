<?php

	class CListThreads{
	
		function ListThreads(){
			return self::ListThreads_content();
		}
	
		function ListThreads_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function ListThreads_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function ListThreads_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("forum_ListThreads_title")),
				  array("{TableRows}", self::GetThreads()),
				 );
			 
		return $content;
		}
		
		function GetThreads(){
			$args = array(
				array(":fid", $GLOBALS['vars']['fid']),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `forumthreads` WHERE `forum` = :fid", $args);
			$rows = "";
			for ($i=0; $i < count($res); $i++) { 
				$rows .= "<tr>";
				$rows .= "<td><a href='index.php?page=forum&sec=threads&fid=".$GLOBALS['vars']['fid']."&tid=".$res[$i]['id']."'>".$res[$i]['title']."</a></td>";
				$rows .= "<td>posts count</td>";
				$rows .= "</tr>";
			}
			return $rows;
		}
	
			
	}
	
	
	
?>