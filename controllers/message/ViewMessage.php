<?php

	class CViewMessage{
			
		function ViewMessage(){
			return self::ViewMessage_content();
		}
	
		function ViewMessage_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ViewMessage_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewMessage_content(){
			$args = array(
				array(":mid", $GLOBALS['vars']['mid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `PrivateMessages` WHERE `id` = :mid", $args);
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_ViewMessage_title")),
				  array("{from}", $GLOBALS['COMMON']->l("subtitle_ViewMessage_from")),
				  array("{date}", $GLOBALS['COMMON']->l("subtitle_ViewMessage_date")),
				  array("{subject}", $GLOBALS['COMMON']->l("subtitle_ViewMessage_subject")),
				  array("{message}", $GLOBALS['COMMON']->l("subtitle_ViewMessage_message")),
				  array("{mfrom}", $res[0]['from']),
				  array("{mdate}", $res[0]['date']),
				  array("{msubject}", $res[0]['subject']),
				  array("{mmessage}", $res[0]['message']),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>