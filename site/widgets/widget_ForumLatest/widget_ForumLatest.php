<?php

	class Wwidget_ForumLatest{
		
		function widget_ForumLatest(){
			return self::widget_ForumLatest_render();
		}
		
		function widget_ForumLatest_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}		
	
		function widget_ForumLatest_options(){
			$options = array(
			"show"=>array("home"), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_ForumLatest_render(){
			$array = array(
				//array("{LatestTopicsTitle}", $GLOBALS['COMMON']->l('widget_ForumLatest_LatestTopics')),
				array("{LatestPost}", self::GetLatestReplies()),
				array("{LatestTopic}", self::GetLatestThreads()),
			);	
			return $array;
		}
		
		function GetLatestReplies(){
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `forumreplies` order by `id` desc limit 10", array());
			$content = "";
			for ($i=0; $i < count($res); $i++) { 
				$content.="<div class='latest-replies'><a href='index.php?page=forum&sec=threads&fid=".$res[$i]['fid']."&tid=".$res[$i]['tid']."'>".self::GetThreadTitleByID($res[$i]['tid'])."</a></div>";
			}
			return $content;
		}
		
		function GetThreadTitleByID($tid){
			$params = array(
				array(":tid", $tid, "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `forumthreads` WHERE `id` = :tid", $params);
			return $res[0]['title'];
		}
		
		function GetLatestThreads(){
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `forumthreads` order by `id` desc limit 10", array());
			$content = "";
			for ($i=0; $i < count($res); $i++) { 
				$content.="<div class='latest-threads'><a href='index.php?page=forum&sec=threads&fid=".$res[$i]['forum']."&tid=".$res[$i]['tid']."'>".$res[$i]['title']."</a></div>";
			}
			return $content;
		}
		

		
	}

	
?>