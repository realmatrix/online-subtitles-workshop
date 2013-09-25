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
				  array("{page}", $GLOBALS['vars']['page']),
				  array("{sec}", $GLOBALS['vars']['sec']),
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
					array(":created", date('Y-m-d H:i:s'), "str"),
				);
				$res = $GLOBALS['COMMON']->db_query("INSERT INTO `Teams` (`owner`, `title`, `created`) VALUES (:uid, :team, :created);", $args);
		}
		
	
			
	}
	
	
	
?>