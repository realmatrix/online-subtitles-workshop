<?php

	class CSubtitleListTeams{
			
		function SubtitleListTeams(){
			return self::SubtitleListTeams_content();
		}
	
		function SubtitleListTeams_hooks(){
			$array = array(
				array("switch", "SwitchState"),
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
				$rows.="<div class='subtitlelistteams-edit'><a href='index.php?page=subtitle&sec=manage&sid=".$res[$i]['sid']."&ssec=SubtitleListTeams&h=switch&uid=".$res[$i]['uid']."&t=edit'><img class='subtitle-teams-state-".$res[$i]['editlines']."' /></a></div>";
				$rows.="<div class='subtitlelistteams-add'><a href='index.php?page=subtitle&sec=manage&sid=".$res[$i]['sid']."&ssec=SubtitleListTeams&h=switch&uid=".$res[$i]['uid']."&t=add'><img class='subtitle-teams-state-".$res[$i]['addlines']."' /></a></div>";
				$rows.="<div class='subtitlelistteams-delete'><a href='index.php?page=subtitle&sec=manage&sid=".$res[$i]['sid']."&ssec=SubtitleListTeams&h=switch&uid=".$res[$i]['uid']."&t=del'><img class='subtitle-teams-state-".$res[$i]['deletelines']."' /></a></div>";
				$rows.="<div class='subtitlelistteams-check'><a href='index.php?page=subtitle&sec=manage&sid=".$res[$i]['sid']."&ssec=SubtitleListTeams&h=switch&uid=".$res[$i]['uid']."&t=chk'><img class='subtitle-teams-state-".$res[$i]['checklines']."' /></a></div>";
				$rows.="<div class='subtitlelistteams-del'><a href=''><img class='subtitle-teams-del'/></a></div>";
				$rows.="</div>";
			}
			return $rows;
		}

		function SwitchState(){
			$args = array(
			
			);
			$res = $GLOBALS['COMMON']->db_query("", $args);
		}
	
			
	}
	
	
	
?>