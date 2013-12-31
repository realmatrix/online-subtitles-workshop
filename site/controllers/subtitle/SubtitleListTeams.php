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
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":uid", $GLOBALS['vars']['uid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `subtitlepermissions` WHERE `sid` = :sid and `uid` = :uid", $args);
			if($GLOBALS['vars']['t']=="edit"){
				$args = array(
					array(":sid", $GLOBALS['vars']['sid'], "str"),
					array(":uid", $GLOBALS['vars']['uid'], "str"),
					array(":value", self::SwitchValue($res[0]['editlines'])),
				);
				$res = $GLOBALS['COMMON']->db_query("UPDATE `subtitlepermissions` SET `editlines`=:value WHERE `sid` = :sid and `uid` = :uid", $args);
			}
			if($GLOBALS['vars']['t']=="add"){
				$args = array(
					array(":sid", $GLOBALS['vars']['sid'], "str"),
					array(":uid", $GLOBALS['vars']['uid'], "str"),
					array(":value", self::SwitchValue($res[0]['addlines'])),
				);
				$res = $GLOBALS['COMMON']->db_query("UPDATE `subtitlepermissions` SET `addlines`=:value WHERE `sid` = :sid and `uid` = :uid", $args);
			}
			if($GLOBALS['vars']['t']=="del"){
				$args = array(
					array(":sid", $GLOBALS['vars']['sid'], "str"),
					array(":uid", $GLOBALS['vars']['uid'], "str"),
					array(":value", self::SwitchValue($res[0]['deletelines'])),
				);
				$res = $GLOBALS['COMMON']->db_query("UPDATE `subtitlepermissions` SET `deletelines`=:value WHERE `sid` = :sid and `uid` = :uid", $args);
			}
			if($GLOBALS['vars']['t']=="chk"){
				$args = array(
					array(":sid", $GLOBALS['vars']['sid'], "str"),
					array(":uid", $GLOBALS['vars']['uid'], "str"),
					array(":value", self::SwitchValue($res[0]['checklines'])),
				);
				$res = $GLOBALS['COMMON']->db_query("UPDATE `subtitlepermissions` SET `checklines`=:value WHERE `sid` = :sid and `uid` = :uid", $args);
			}
			
		}
		
		function SwitchValue($value){
			if($value==0){return 1;}
			if($value==1){return 0;}
		}
	
			
	}
	
	
	
?>