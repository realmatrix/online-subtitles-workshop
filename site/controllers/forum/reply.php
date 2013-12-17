<?php

	class Creply{
	
		function reply(){
			return self::reply_content();
		}
	
		function reply_hooks(){
			$array = array(
				array("add", "AddReply")
			);
			return $array;
		}
			
		function reply_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function reply_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("forum_reply_title")),
				  array("{fid}", $GLOBALS['vars']['fid']),
				  array("{tid}", $GLOBALS['vars']['tid']),
				 );
			 
		return $content;
		}
		
		function AddReply(){
			$params = array(
				array(":tid", $GLOBALS['vars']['tid'], "str"),
				array(":uid", $_SESSION['id'], "str"),
				array(":reply", $GLOBALS['vars']['reply'], "str"),
				array(":fid", $GLOBALS['vars']['fid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("INSERT INTO `forumreplies` (`tid`, `uid`, `reply`, `fid`) VALUES (:tid, :uid, :reply, :fid);", $params, $ExecState);
			if($ExecState===TRUE){header("Location: index.php?page=forum&sec=threads&fid=".$GLOBALS['vars']['fid']."&tid=".$GLOBALS['vars']['tid']);}else{$GLOBALS['ERROR'][] = "failed to add new reply.";}
		}
		
	
			
	}
	
	
	
?>