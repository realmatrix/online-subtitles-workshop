<?php

	class CJoinedTeams{
			
		function JoinedTeams(){
			return self::JoinedTeams_content();
		}
	
		function JoinedTeams_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function JoinedTeams_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function JoinedTeams_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_JoinedTeams_title")),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>