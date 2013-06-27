<?php

	class CAddTeam{
			
		function AddTeam(){
			return self::AddTeam_content();
		}
	
		function AddTeam_hooks(){
			$array = array(
				array("CreateTeam", "addnewteam")
			);
			return $array;
		}
			
		function AddTeam_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function AddTeam_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l('team_AddTeam_title')),
				  array("{teamname}", $GLOBALS['COMMON']->l('team_AddTeam_TeamName')),
				  array("{submit}", $GLOBALS['COMMON']->l('team_AddTeam_submit')),
				 );
			 
		return $content;
		}
		
		function addnewteam(){
				if($GLOBALS['vars']['teamname']==""){
					$GLOBALS['ERROR'][]='"'.$GLOBALS['COMMON']->l('team_AddTeam_TeamName').'"'." is required field.";
					return FALSE;
				}
				$args = array(
					array(":uid", $_SESSION['id'], "str"),
					array(":team", $GLOBALS['vars']['teamname'], "str"),
				);
				$res = $GLOBALS['COMMON']->db_query("INSERT INTO `Teams` (`owner`, `title`) VALUES (:uid, :team);", $args);
		}
		
	
			
	}
	
	
	
?>