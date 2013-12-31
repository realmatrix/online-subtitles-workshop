<?php

	class CSubtitleAddTeam{
			
		function SubtitleAddTeam(){
			return self::SubtitleAddTeam_content();
		}
	
		function SubtitleAddTeam_hooks(){
			$array = array(
				array("DeleteSubtitles", "DeleteSubtitles"),
			);
			return $array;
		}
			
		function SubtitleAddTeam_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SubtitleAddTeam_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_SubtitleAddTeam_title")),
				  array("{UserTeams}", self::UserTeams()),
				 );
			 
		return $content;
		}
		
		function UserTeams(){
			$teams = $GLOBALS['COMMON']->GetUserTeams($_SESSION['id']);
			$res = "";
			for ($i=0; $i < count($teams); $i++) { 
				$res .= "<option value='".$teams[$i]['id']."'>".$teams[$i]['title']."</option>";
			}
			return $res;
		}
	
			
	}
	
	
	
?>