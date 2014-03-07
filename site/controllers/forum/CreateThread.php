<?php

	class CCreateThread{
	
		function CreateThread(){
			return self::CreateThread_content();
		}
	
		function CreateThread_hooks(){
			$array = array(
				array("add", "AddThread")
			);
			return $array;
		}
			
		function CreateThread_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function CreateThread_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("forum_CreateThread_title")),
				  array("{cat}", $GLOBALS['vars']['cat']),
				  array("{fid}", $GLOBALS['vars']['fid']),
				 );
			 
		return $content;
		}
		
		function AddThread(){
			$params = array(
				array(":fid", $GLOBALS['vars']['fid'], "str"),
				array(":title", $GLOBALS['vars']['title'], "str"),
				array(":content", $GLOBALS['vars']['content'], "str"),
				array(":cat", $GLOBALS['vars']['cat'], "str"),
				array(":uid", $_SESSION['id'], "str"),
			);
			$res = $GLOBALS['system']->db_query("INSERT INTO `forumthreads` (`forum`, `title`, `content`, `uid`, `cat`) VALUES (:fid, :title, :content, :uid, :cat);", $params, $ExecState);
			if($ExecState===TRUE){header("Location: index.php?page=forum&sec=threads&cat=".$GLOBALS['vars']['cat']."&fid=".$GLOBALS['vars']['fid']);}else{$GLOBALS['ERROR'][] = "failed to add new thread.";}
		}
		

	
			
	}
	
	
	
?>