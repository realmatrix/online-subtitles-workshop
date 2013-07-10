<?php

	class CSendPM{
			
		function SendPM(){
			return self::SendPM_content();
		}
	
		function SendPM_hooks(){
			$array = array(
				array("SendMessage", "SendMessage"),
			);
			return $array;
		}
			
		function SendPM_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SendPM_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_SendPM_title")),
				  array("{to}", $GLOBALS['COMMON']->l("subtitle_SendPM_to")),
				  array("{subject}", $GLOBALS['COMMON']->l("subtitle_SendPM_subject")),
				  array("{message}", $GLOBALS['COMMON']->l("subtitle_SendPM_message")),
				  array("{submit}", $GLOBALS['COMMON']->l("subtitle_SendPM_submit")),
				 );
			 
		return $content;
		}
		
		function SendMessage(){
			if($GLOBALS['vars']['to']==""){$GLOBALS['ERROR'][]="enter username"; return FALSE;}
			if($GLOBALS['vars']['subject']==""){$GLOBALS['ERROR'][]="enter subject"; return FALSE;}
			if($GLOBALS['vars']['message']==""){$GLOBALS['ERROR'][]="enter message"; return FALSE;}
			$UserInfo = $GLOBALS['COMMON']->GetUserInfo($GLOBALS['vars']['to'], "");
			$to = $UserInfo[0]['id'];
			$args = array(
				array(":from", $_SESSION['id'], "str"),
				array(":to", $to, "str"),
				array(":subject", $GLOBALS['vars']['subject'], "str"),
				array(":message", $GLOBALS['vars']['message'], "str"),
				array(":date", date("Y-m-d H:i:s"), "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("INSERT INTO `PrivateMessages` (`from`, `to`, `subject`, `message`, `date`) VALUES (:from, :to, :subject, :message, :date);", $args, $ExecState);
			if($ExecState===TRUE){$GLOBALS['SUCCESS'][]="Message sent.";}else{$GLOBALS['ERROR'][]="Message send failed.";}
		}


			
	}
	
	
	
?>