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
			$res = $GLOBALS['system']->db_query("SELECT * FROM `privatemessages` WHERE `id` = :mid", $args);
			$SenderInfo = $GLOBALS['system']->GetUserInfo("", $res[0]['from']);
			$from = $SenderInfo[0]['username'];
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("subtitle_ViewMessage_title")),
				  array("{from}", $GLOBALS['system']->l("subtitle_ViewMessage_from")),
				  array("{date}", $GLOBALS['system']->l("subtitle_ViewMessage_date")),
				  array("{subject}", $GLOBALS['system']->l("subtitle_ViewMessage_subject")),
				  array("{message}", $GLOBALS['system']->l("subtitle_ViewMessage_message")),
				  array("{mfrom}", $from),
				  array("{mdate}", $res[0]['date']),
				  array("{msubject}", $res[0]['subject']),
				  array("{mmessage}", $res[0]['message']),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>