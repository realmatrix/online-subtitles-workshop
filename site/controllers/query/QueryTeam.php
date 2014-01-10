<?php

	class CQueryTeam{

	public static $query = "";
			
		function QueryTeam(){
			return self::QueryTeam_content();
		}
	
		function QueryTeam_hooks(){
			$array = array(
				array("get", "GetChat"),
				array("set", "SetChat"),
			);
			return $array;
		}
			
		function QueryTeam_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function QueryTeam_content(){
				$content = array
				  (
				  array("{query}", self::$query), 
				 );
			 
		return $content;
		}
		
		function GetChat(){
			$params = array(
				array("sid", $GLOBALS['vars']['sid']),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `teamchat` WHERE `sid` = :sid", $params);
			$chat = "";
			for ($i=0; $i < count($res); $i++) { 
				$chat.="<div class='chat-line-container'>";
				$chat.="<div class='chat-name-message'><span class='chat-username'>".$res[$i]['username']."</span>";
				$chat.="<span class='chat-text'>".self::ReplaceTags($res[$i]['text'])."</span></div>";
				$chat.="<div class='chat-date'>".date("D M j, h:i:sA", strtotime($res[$i]['date']))."</div>";
				$chat.="</div>";
			}
			self::$query = $chat;
		}
		
		function ReplaceTags($text){
			$text = str_replace("[b]", "<b>", $text);
			$text = str_replace("[/b]", "</b>", $text);
			$text = str_replace("[i]", "<i>", $text);
			$text = str_replace("[/i]", "</i>", $text);
			$text = str_replace("[u]", "<u>", $text);
			$text = str_replace("[/u]", "</u>", $text);
			$text = str_replace("[s]", "<img class='teamchatsmile-", $text);
			$text = str_replace("[/s]", "' >", $text);
			return $text;
		}
		
		function SetChat(){
			$params = array(
				array(":uid", $_SESSION['id'], "str"),
				array(":username", $_SESSION['username'], "str"),
				array(":text", $GLOBALS['vars']['text'], "str"),
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":date", date('Y-m-d H:i:s'), "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("INSERT INTO `teamchat`(`date`, `uid`, `text`, `sid`, `username`) VALUES (:date, :uid, :text, :sid, :username);", $params, $ExecState);
			self::DeleteOldLines();
			//if($ExecState===TRUE){echo "success";}else{echo "failed";}
			//echo $res;
		}

		function DeleteOldLines(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("DELETE FROM teamchat where sid = :sid ORDER BY id DESC LIMIT 30, 1000", $args);
		}

	
			
	}
	
	
	
?>