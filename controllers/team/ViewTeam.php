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
				$TeamInfo = $GLOBALS['COMMON']->GetTeamInfo($GLOBALS['vars']['tid']);
				$TeamMembers = $GLOBALS['COMMON']->GetTeamMembers($GLOBALS['vars']['tid']);
				$TeamSubtitles = $GLOBALS['COMMON']->GetTeamSubtitles($GLOBALS['vars']['tid']);
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l('team_ViewTeam_title')),
				  array("{Cteamname}", $TeamInfo[0]['title']),
				  array("{Cteammembers}", count($TeamMembers)),
				  array("{Ccreated}", $TeamInfo[0]['created']),
				  array("{Csubtitles}", count($TeamSubtitles)),
				 );			 
		return $content;
		}
		
	
			
	}
	
	
	
?>