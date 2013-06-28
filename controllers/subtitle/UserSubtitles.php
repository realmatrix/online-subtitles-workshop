<?php

	class CUserSubtitles{
			
		function UserSubtitles(){
			return self::UserSubtitles_content();
		}
	
		function UserSubtitles_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function UserSubtitles_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function UserSubtitles_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_UserSubtitles_title")),
				  array("{tablerows}", self::GetSubtitles()),
				 );
			 
		return $content;
		}
		
		function GetSubtitles(){
			$subtitles = $GLOBALS['COMMON']->GetUserSubtitles($_SESSION['id']);
			$res = "";
			for ($i=0; $i < count($subtitles); $i++) {
				$index = $i + 1; 
				$res .= "<tr>";
				$res .= "<td>".$index."</td>";
				$res .= "<td><a href='index.php?page=subtitle&sec=view&sid=".$subtitles[$i]['id']."'>".$subtitles[$i]['release_name']."</a></td>";
				$res .= "<td>".$subtitles[$i]['version']."</td>";
				$res .= "<td>".$subtitles[$i]['language']."</td>";
				$res .= "<td><a href='index.php?page=subtitle&sec=manage&sid=".$subtitles[$i]['id']."'>Manage</a></td>";
				$res .= "</tr>";
			}
			return $res;
		}
		

	
			
	}
	
	
	
?>