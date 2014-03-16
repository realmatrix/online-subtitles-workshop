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
				$content = array
				  (
				  array("{TableRows}", self::GetVideos()),
				  array("{pagination}", self::GetPagination()),
				 );			 
		return $content;
		}
		
		function GetVideos(){
			$limit = self::$limit;
			if(!isset($GLOBALS['vars']['i'])){$GLOBALS['vars']['i'] = 0;}
			$from = $GLOBALS['vars']['i'];
			$to = $GLOBALS['vars']['i'] + $limit;
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` limit ".$from.", ".$to, array());
			$TableRows = "";
			for ($i=0; $i < count($res); $i++) {
				$counter = $i + 1; 
				$TableRows .= "<tr>";
				$TableRows .= "<td>".$counter."</td>";
				$TableRows .= "<td><a href='index.php?page=video&sec=view&vid=".$res[$i]['id']."'>".$res[$i]['title']."</a></td>";
				$TableRows .= "<td>".$res[$i]['views']."</td>";
				$TableRows .= "<td></td>";
				$TableRows .= "</tr>";
			}
			return $TableRows;
		}

		function GetPagination(){
			$TotalVideos = count($GLOBALS['system']->db_query("SELECT * FROM `videos` ", array()));
			$res = "";
			if(floor($TotalVideos/self::$limit)>1){$res .="<li class='prev disabled'><a href='#'>&laquo;</a></li>";}
			else{$res .="<li class='prev disabled'><a href='#'>&laquo;</a></li>";}
			if(floor($TotalVideos/self::$limit)>1){$res .="<li class='prev disabled'><a href='#'>&lsaquo;</a></li>";}
			else{$res .="<li class='prev disabled'><a href='#'>&lsaquo;</a></li>";}
			
			return $res;
		}


		

		

}