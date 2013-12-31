<?php

	class CSubtitleListTeams{
			
		function SubtitleListTeams(){
			return self::SubtitleListTeams_content();
		}
	
		function SubtitleListTeams_hooks(){
			$array = array(
				array("DeleteSubtitles", "DeleteSubtitles"),
			);
			return $array;
		}
			
		function SubtitleListTeams_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SubtitleListTeams_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_SubtitleListTeams_title")),
				  array("{SubtitleTeams}", self::GetSubtitleTeams()),
				 );
			 
		return $content;
		}
		
		function GetSubtitleTeams(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `subtitlepermissions` WHERE `sid` = :sid", $args);
			$rows = "";
			for ($i=0; $i < count($res); $i++) {
				$index = $i + 1; 
				$rows.="<div class='subtitlelistteams-row'>";
				$rows.="<div class='subtitlelistteams-index'>".$index."</div>";
				$rows.="<div class='subtitlelistteams-user'>".$res[$i]['uid']."</div>";
				$rows.="<div class='subtitlelistteams-team'>Team</div>";
				$rows.="<div class='subtitlelistteams-edit'>".$res[$i]['editlines']."</div>";
				$rows.="<div class='subtitlelistteams-add'>".$res[$i]['addlines']."</div>";
				$rows.="<div class='subtitlelistteams-delete'>".$res[$i]['deletelines']."</div>";
				$rows.="<div class='subtitlelistteams-check'>".$res[$i]['checklines']."</div>";
				$rows.="<div class='subtitlelistteams-del'>Del</div>";
				$rows.="</div>";
			}
			return $rows;
		}
	
			
	}
	
	
	
?>