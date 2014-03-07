<?php

	class CUserSubtitles{
			
		function UserSubtitles(){
			return self::UserSubtitles_content();
		}
	
		function UserSubtitles_hooks(){
			$array = array(
				array("DeleteSubtitles", "DeleteSubtitles"),
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
				  array("{title}", $GLOBALS['system']->l("subtitle_UserSubtitles_title")),
				  array("{tablerows}", self::GetSubtitles()),
				  array("{delete}", $GLOBALS['system']->l("subtitle_UserSubtitles_delete")),
				  array("{del}", $GLOBALS['system']->l("subtitles_UserSubtitles_del")),
				  array("{releasename}", $GLOBALS['system']->l("subtitle_UserSubtitles_ReleaseName")),
				  array("{version}", $GLOBALS['system']->l("subtitle_UserSubtitles_version")),
				  array("{language}", $GLOBALS['system']->l("subtitle_UserSubtitles_language")),
				  array("{manage}", $GLOBALS['system']->l("subtitle_UserSubtitles_manage")),
				  array("{edit}", $GLOBALS['system']->l("subtitle_UserSubtitles_edit")),
				 );
			 
		return $content;
		}
		
		function GetSubtitles(){
			$subtitles = $GLOBALS['system']->GetUserSubtitles($_SESSION['id']);
			$res = "";
			for ($i=0; $i < count($subtitles); $i++) {
				$lang = $GLOBALS['system']->GetLanguageById($subtitles[$i]['language']);
				$res .= "<tr>";
				$res .= "<td><input type='checkbox' name='subtitle[]' value='".$subtitles[$i]['id']."'></td>";
				$res .= "<td><a href='index.php?page=subtitle&sec=view&sid=".$subtitles[$i]['id']."'>".$subtitles[$i]['release_name']."</a></td>";
				$res .= "<td>".$subtitles[$i]['version']."</td>";
				$res .= "<td>".$lang[0]['language']."</td>";
				$res .= "<td><a href='index.php?page=subtitle&sec=manage&sid=".$subtitles[$i]['id']."'>Manage</a></td>";
				$res .= "<td><a href='index.php?page=subtitle&sec=edit&sid=".$subtitles[$i]['id']."'>Edit</a></td>";
				$res .= "</tr>";
			}
			return $res;
		}
		
		function DeleteSubtitles(){
			$subtitles = $GLOBALS['vars']['subtitle'];
			//if(!is_array($subtitles)){$subtitles = array($subtitles);}
			$uid = $_SESSION['id'];
			for ($i=0; $i <count($subtitles) ; $i++) { 
				$args = array(
					array(":id", $subtitles[$i], "str"),
					array(":uid", $uid, "str"),
				);
				$res = $GLOBALS['system']->db_query("DELETE FROM `subtitles` WHERE `id` = :id and `uid` = :uid ", $args, $ExecState);
				if($ExecState === TRUE){$GLOBALS['SUCCESS'][]="Subtitle deleted sucessfully.";}else{$GLOBALS['ERROR'][]="Subtitle delete failed.";}
				$args = array(
					array(":sid", $subtitles[$i], "str"),
				);
				$res = $GLOBALS['system']->db_query("DELETE FROM `subtitlecds` WHERE `sid` = :sid", $args, $ExecState);
				//if($ExecState === TRUE){$GLOBALS['SUCCESS'][]="Subtitle CDS deleted sucessfully.";}else{$GLOBALS['ERROR'][]="Subtitle CDS delete failed.";}
			}
		}
		

	
			
	}
	
	
	
?>