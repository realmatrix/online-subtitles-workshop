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
			$TotalVideos = count($GLOBALS['system']->db_query("SELECT * FROM `videos` ", array()));
			if(!isset($GLOBALS['vars']['i'])){$GLOBALS['vars']['i']=1;}
			$pagination = self::GetPagination($TotalVideos, self::$limit, $GLOBALS['vars']['i']);
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
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` limit ".$from.", ".$to, array());
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

		function GetPagination($TotalRows, $rowsPerPages, $CurrentPage){
			$PagesCount = ceil($TotalRows/$rowsPerPages);		
			$res = "";
			if(floor($TotalRows/$rowsPerPages)>1){$res .="<li class='prev'><a href='index.php?page=video&sec=archive&i=1'>&laquo;</a></li>";}
			else{$res .="<li class='prev disabled'><a href='#'>&laquo;</a></li>";}			
			if(floor($TotalRows/$rowsPerPages)>1){$res .="<li class='prev'><a href='index.php?page=video&sec=archive&i=".$CurrentPage - 1 ."'>&lsaquo;</a></li>";}
			else{$res .="<li class='prev disabled'><a href='#'>&lsaquo;</a></li>";}

			for ($i=$CurrentPage; $i < $CurrentPage+6; $i++) { 
				if($PagesCount>=$i and $CurrentPage==$i){$res .= "<li class='active'><a href='#'>".$i."</a></li>";}
				if($PagesCount>=$i and $CurrentPage!=$i){$res .= "<li><a href='index.php?page=video&sec=archive&i=".$i."'>".$i."</a></li>";}			
			}			

			if($PagesCount>$CurrentPage+1){$res .="<li class='next'><a href='index.php?page=video&sec=archive&i=". $CurrentPage + 1 ."'>&rsaquo;</a></li>";}
			else{$res .="<li class='next disabled'><a href='#'>&rsaquo;</a></li>";}			
			if($PagesCount!=$CurrentPage){$res .="<li class='next'><a href='index.php?page=video&sec=archive&i=".$PagesCount ."'>&raquo;</a></li>";}
			else{$res .="<li class='next disabled'><a href='#'>&raquo;</a></li>";}					
					
			return $res;
		}

		function GetVideoSubtitles($vid){
			$args = array(
				array(":vid", $vid, "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `subtitles` WHERE `vid` = :vid", $args);
			return count($res);
		}


		

		

}