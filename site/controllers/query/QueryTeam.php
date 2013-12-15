<?php

	class CQueryTeam{

	public static $query = "";
			
		function QueryTeam(){
			return self::QueryTeam_content();
		}
	
		function QueryTeam_hooks(){
			$array = array(
				array("get", "GetChat"),
				array("set", "SetChat"),
			);
			return $array;
		}
			
		function QueryTeam_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function QueryTeam_content(){
				$content = array
				  (
				  array("{query}", self::$query), 
				 );
			 
		return $content;
		}
		
		function GetChat(){
			self::$query = "aaaaaaaaaaaaaa";
		}
		
		function SetChat(){
			$args = array(
				array(":uid", $_SESSION['id'], "str"),
				array(":username", $_SESSION['username'], "str"),
				array(":test", $GLOBALS['vars']['text'], "str"),
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":date", date('Y-m-d H:i:s'), "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("INSERT INTO `TeamChat`(`date`, `uid`, `text`, `sid`, `username`) VALUES (:date, :uid, :text, :sid, :username);", $args);
			echo $res;
		}


	
			
	}
	
	
	
?>