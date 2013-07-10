<?php

	class CReplyMessage{
			
		function ReplyMessage(){
			return self::ReplyMessage_content();
		}
	
		function ReplyMessage_hooks(){
			$array = array(
				array("SendMessage", "SendMessage"),
			);
			return $array;
		}
			
		function ReplyMessage_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ReplyMessage_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_ReplyMessage_title")),
				  array("{subject}", $GLOBALS['COMMON']->l("subtitle_ReplyMessage_subject")),
				  array("{message}", $GLOBALS['COMMON']->l("subtitle_ReplyMessage_message")),
				  array("{submit}", $GLOBALS['COMMON']->l("subtitle_ReplyMessage_submit")),
				  array("{mif}", $GLOBALS['vars']['mid']),
				 );
			 
		return $content;
		}
		
		function SendMessage(){
			if($GLOBALS['vars']['subject']==""){$GLOBALS['ERROR'][]="enter subject"; return FALSE;}
			if($GLOBALS['vars']['message']==""){$GLOBALS['ERROR'][]="enter message"; return FALSE;}
			$args = array(
				array(":id", $GLOBALS['vars']['mid']),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `PrivateMessages` WHERE `id` = :id", $args);
			$MessageInfo = $res;
			print_r($MessageInfo);
			$args = array(
				array(":from", $GLOBALS['vars']['message'], "str"),
				array(":to", $GLOBALS['vars']['message'], "str"),
				array(":subject", $GLOBALS['vars']['message'], "str"),
				array(":message", $GLOBALS['vars']['message'], "str"),
				array(":date", date("Y-m-d H:i:s"), "str"),
			);
		}


		

	
			
	}
	
	
	
?>