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
			"loggedin"=>"",
			);
			return $options;
		}
				
		function ViewPlayer_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("player_ViewPlayer_title")),
				  array("{source}", self::GetVideoSource()),
				  array("{vtitle}", self::GetVideoTitle()),
				  array("{thumb}", "uploads/thumbnails/video/".self::GetVideoThumbnail()),
				 );
			 
		return $content;
		}
		
		function GetVideoSource(){
			$args = array(
				array(":id", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `videos` WHERE `id` = :id", $args);
			$source = $res[0]['source'];
			return $source;
		}
		
		function GetVideoThumbnail(){
			$args = array(
				array(":id", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `videos` WHERE `id` = :id", $args);
			$thumbnail = $res[0]['thumbnail'];
			return $thumbnail;
		}
		
		function GetVideoTitle(){
			$args = array(
				array(":id", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `videos` WHERE `id` = :id", $args);
			$title = $res[0]['title'];
			return $title;
		}
		
	
			
	}
	
	
	
?>