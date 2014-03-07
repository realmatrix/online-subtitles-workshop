<?php

	class CVideoList{
		
		function VideoList(){
			return self::VideoList_content();
		}
	
		function VideoList_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
		
		function VideoList_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function VideoList_content(){
			$video = $GLOBALS['system']->GetVideoInfo($GLOBALS['vars']['vid']);
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("video_VideoList_title")),
				  array("{TableRows}", self::GetUserVideos()),
				 );
			 
		return $content;
		}
		
		function GetUserVideos(){
			$args = array(
				array(":uid", $_SESSION['id'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` WHERE `uid` = :uid", $args);
			$rows = "";
			$counter = 0;
			for ($i=0; $i < count($res); $i++) {
				$counter++;
				$rows .= "<tr>"; 
				$rows .= "<td>".$counter."</td>";
				$rows .= "<td><a href='index.php?page=video&sec=view&vid=".$res[$i]['id']."'>".$res[$i]['title']."</a></td>";
				$rows .= "<td>".$res[$i]['views']."</td>";
				$rows .= "<td>".self::GetSubtitlesCount($res[$i]['id'])."</td>";
				$rows .= "<td><a href='index.php?page=video&sec=edit&vid=".$res[$i]['id']."'>Edit</a></td>";
				$rows .= "</tr>";
			}
			return $rows;
		}
		
		function GetSubtitlesCount($vid){
			$params = array(
				array(":vid", $vid, "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT `id` FROM `subtitles` WHERE `vid` = :vid", $params);
			return count($res);
		}

}