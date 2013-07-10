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
			$args = array(
				array(":from", $_SESSION['id'], "str"),
				array(":to", $GLOBALS['vars']['to'], "str"),
				array(":subject", $GLOBALS['vars']['subject'], "str"),
				array(":message", $GLOBALS['vars']['message'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("", $args, $ExecState);
		}


			
	}
	
	
	
?>