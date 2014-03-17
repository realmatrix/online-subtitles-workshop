<?php

	class CListAllVideos{
		
		public static $limit = 30;
		
		function ListAllVideos(){
			return self::ListAllVideos_content();
		}
	
		function ListAllVideos_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
		
		function ListAllVideos_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function ListAllVideos_content(){
			if(!isset($GLOBALS['vars']['a']) or $GLOBALS['vars']['a']==""){
				$TotalVideos = count($GLOBALS['system']->db_query("SELECT * FROM `videos` ", array()));
			}else{
				$TotalVideos = count($GLOBALS['system']->db_query("SELECT * FROM `videos` where `title` LIKE '".$GLOBALS['vars']['a']."%'", array()));
			}
			if(!isset($GLOBALS['vars']['i'])){$GLOBALS['vars']['i']=1;}
			$pagination = $GLOBALS['system']->GenratePagination($TotalVideos, self::$limit, $GLOBALS['vars']['i']);
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("video_listallvideos_title")),
				  array("{TableRows}", self::GetVideos()),
				  array("{pagination}", $pagination),
				 );			 
		return $content;
		}
		
		function GetVideos(){
			$limit = self::$limit;
			if(!isset($GLOBALS['vars']['i'])){$GLOBALS['vars']['i'] = 1;}
			$from = ($GLOBALS['vars']['i']-1) * $limit;
			$to = ($GLOBALS['vars']['i']-1) * $limit + $limit;
			if(!isset($GLOBALS['vars']['a']) or $GLOBALS['vars']['a']==""){
				$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` limit ".$from.", ".$to, array());
			}else{
				$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` where `title` LIKE '".$GLOBALS['vars']['a']."%' limit ".$from.", ".$to, array());
			}
			//$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` limit ".$from.", ".$to, array());
			$TableRows = "";
			for ($i=0; $i < count($res); $i++) {
				$counter = $i + 1; 
				$TableRows .= "<tr>";
				$TableRows .= "<td>".$counter."</td>";
				$TableRows .= "<td><a href='index.php?page=video&sec=view&vid=".$res[$i]['id']."'>".$res[$i]['title']."</a></td>";
				$TableRows .= "<td>".$res[$i]['views']."</td>";
				$TableRows .= "<td>".self::GetVideoSubtitles($res[$i]['id'])."</td>";
				$TableRows .= "</tr>";
			}
			return $TableRows;
		}

		function GetVideoSubtitles($vid){
			$args = array(
				array(":vid", $vid, "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `subtitles` WHERE `vid` = :vid", $args);
			return count($res);
		}


		

		

}