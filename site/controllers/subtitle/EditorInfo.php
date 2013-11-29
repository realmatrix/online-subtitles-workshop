<?php

	class CEditorInfo{
			
		function EditorInfo(){
			return self::EditorInfo_content();
		}
	
		function EditorInfo_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function EditorInfo_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditorInfo_content(){
			$SubtitleContent = self::GetSubtitleContent();
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_EditorInfo_title")),
				  array("{TotalLines}", count($SubtitleContent)),
				  array("{CheckedLines}", count(self::GetChecked())),
				  array("{FinishedLines}", count(self::GetFinished())),
				 );
			 
		return $content;
		}
		
		function GetSubtitleContent(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `SubtitlesContent` WHERE `sid` = :sid and `cid` = :cid", $args);
			return $res;
		}

		function GetChecked(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `SubtitlesContent` WHERE `sid` = :sid and `cid` = :cid and `checked` <> 0", $args);
			return $res;
		}		

		function GetFinished(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `SubtitlesContent` WHERE `sid` = :sid and `cid` = :cid and `done` = 1", $args);
			return $res;
		}		

	
			
	}
	
	
	
?>