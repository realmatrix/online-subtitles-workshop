<?php

	class CViewThread{
	
		function ViewThread(){
			return self::ViewThread_content();
		}
	
		function ViewThread_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function ViewThread_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function ViewThread_content(){
			$thread = self::GetThread();
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("forum_ViewThread_title")),
				  array("{ThreadTitle}", $thread[0]['title']),
				  array("{ThreadContent}", $thread[0]['content']),
				  array("{replies}", self::GetReplies()),
				 );
			 
		return $content;
		}
		
		function GetThread(){
			$params = array(
				array(":tid", $GLOBALS['vars']['tid'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `forumthreads` WHERE `id` = :tid", $params);
			return $res;
		}
		
		function GetReplies(){
			$params = array(
				array(":tid", $GLOBALS['vars']['tid'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `forumreplies` WHERE `tid` = :tid", $params);
			$content = "";
			for ($i=0; $i < count($res); $i++) { 
				$content.="<div class='thread-reply'>";
				$content.="<div class='reply-user'>".self::GetUsernameByID($res[$i]['uid'])."</div>";
				$content.="<div class='reply-date'>".$res[$i]['date']."</div>";
				$content.="<div class='reply-content'>".$res[$i]['reply']."</div>";
				$content.="</div>";
			}
			return $content;
		}
		
		function GetUsernameByID($id){
			$UserInfo = $GLOBALS['system']->GetUserInfo("", $id);
			return $UserInfo[0]['username'];
		}
		
	
			
	}
	
	
	
?>