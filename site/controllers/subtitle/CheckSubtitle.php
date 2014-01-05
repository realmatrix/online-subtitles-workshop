<?php

	class CCheckSubtitle{
			
		function CheckSubtitle(){
			return self::CheckSubtitle_content();
		}
	
		function CheckSubtitle_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function CheckSubtitle_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function CheckSubtitle_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_CheckSubtitle_title")),
				  array("{CheckSubtitleLines}", self::GetLines()),
				  array("{page}", $GLOBALS['vars']['page']),
				  array("{sec}", $GLOBALS['vars']['sec']),
				  array("{sid}", $GLOBALS['vars']['sid']),
				  array("{cid}", $GLOBALS['vars']['cid']),
				  array("{LineChoices}", self::GetLineChoices()),
				  array("{OriginalLine}", self::GetOriginalLine()),
				 );
			 
		return $content;
		}
		
		function GetLines(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid']),
				array(":cid", $GLOBALS['vars']['cid']),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `subtitlescontent` WHERE `sid` = :sid and `cid` = :cid", $args);
			$lines = "";
			for ($i=0; $i < count($res); $i++) { 
				$lines .= "<option value='".$res[$i]['id']."'>".$res[$i]['line']."</option>";
			}
			return $lines;
		}
		
		function GetLineInfo(){
			$args = array(
				array(":lid", $GLOBALS['vars']['lid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `subtitlescontent` WHERE `id` = :lid", $args);
			return $res;
		}
		
		function GetLineChoices(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
				array(":lid", $GLOBALS['vars']['lid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `transcriptions` WHERE `sid` = :sid and `cid` = :cid and `lid` = :lid", $args);
			$choices = "";
			for ($i=0; $i < count($res); $i++) { 
				$choices .= "<label><input type='radio' name='tlid' value='".$res[$i]['id']."'>".$res[$i]['text']."</label>";
			}
			return $choices;
		}
		
		function GetOriginalLine(){
			if($GLOBALS['vars']['lid']!=""){
				$LineInfo = self::GetLineInfo();
				return $LineInfo[0]['text'];
			}else{
				return "";
			}
		}
	
			
	}
	
	
	
?>