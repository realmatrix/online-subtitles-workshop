<?php

	class CViewPlayer{
			
		function ViewPlayer(){
			return self::ViewPlayer_content();
		}
	
		function ViewPlayer_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function ViewPlayer_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"both",
			);
			return $options;
		}
				
		function ViewPlayer_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("player_ViewPlayer_title")),
				  array("{source}", self::GetVideoSource()),
				 );
			 
		return $content;
		}
		
		function GetVideoSource(){
			$args = array(
				array(":id", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Videos` WHERE `id` = :id", $args);
			$source = $res[0]['source'];
			return $source;
		}
		
	
			
	}
	
	
	
?>