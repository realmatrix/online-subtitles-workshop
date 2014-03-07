<?php

	class CViewTeam{
			
		function ViewTeam(){
			return self::ViewTeam_content();
		}
	
		function ViewTeam_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function ViewTeam_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewTeam_content(){
				$TeamInfo = $GLOBALS['system']->GetTeamInfo($GLOBALS['vars']['tid']);
				$TeamMembers = $GLOBALS['system']->GetTeamMembers($GLOBALS['vars']['tid']);
				$TeamSubtitles = $GLOBALS['system']->GetTeamSubtitles($GLOBALS['vars']['tid']);
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l('team_ViewTeam_title')),
				  array("{Cteamname}", $TeamInfo[0]['title']),
				  array("{Cteammembers}", count($TeamMembers)),
				  array("{Ccreated}", $TeamInfo[0]['created']),
				  array("{Csubtitles}", count($TeamSubtitles)),
				  array("{teamname}", $GLOBALS['system']->l("team_ViewTeam_TeamName")),
				  array("{teammembers}", $GLOBALS['system']->l("team_ViewTeam_MembersCount")),
				  array("{created}", $GLOBALS['system']->l("team_ViewTeam_Created")),
				  array("{subtitles}", $GLOBALS['system']->l("team_ViewTeam_SubtitlesCount")),
				 );			 
		return $content;
		}
		
	
			
	}
	
	
	
?>