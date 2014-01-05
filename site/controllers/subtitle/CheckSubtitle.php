<?php

	class CCheckSubtitle{
			
		function CheckSubtitle(){
			return self::CheckSubtitle_content();
		}
	
		function CheckSubtitle_hooks(){
			$array = array(
				array("select", "CheckSelected"),
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
				  array("{lid}", $GLOBALS['vars']['lid']),
				  array("{LineChoices}", self::GetLineChoices()),
				  array("{OriginalLine}", self::GetOriginalLine()),
				  array("{linenumber}", self::GetLineNumber()),
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
				if($res[$i]['checked']==1){$class = "subtitleline-checked";}else{$class = "subtitleline-notchecked";}
				$lines .= "<option class='".$class."' value='".$res[$i]['id']."'>".$res[$i]['line']."</option>";
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
				$choices .= "<div class='checksubtitle-options'><input type='radio' class='checksubtitle-radio' id='checksubtitle-tl".$res[$i]['id']."' name='tlid' value='".$res[$i]['id']."'><label class='checksubtitle-radio-label' for='checksubtitle-tl".$res[$i]['id']."'>".nl2br($res[$i]['text'])."</label></div>";
			}
			return $choices;
		}
		
		function GetOriginalLine(){
			if($GLOBALS['vars']['lid']!=""){
				$LineInfo = self::GetLineInfo();
				return nl2br($LineInfo[0]['text']);
			}else{
				return "";
			}
		}
		
		function CheckSelected(){
			$args = array(
				array(":tlid", $GLOBALS['vars']['tlid'], "str")
			);
			$transcription = $GLOBALS['COMMON']->db_query("SELECT * FROM `transcriptions` WHERE `id` = :tlid", $args);
			$args = array(
				array(":checked", 1, "str"),
				array(":text", $transcription[0]['text'], "str"),
				array(":lid", $GLOBALS['vars']['lid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("UPDATE `subtitlescontent` SET `checked`=:checked,`checked_text`=:text WHERE `id` = :lid", $args);
		}
		
		function GetLineNumber(){
			if($GLOBALS['vars']['lid']!=""){
				$LineInfo = self::GetLineInfo();
				return nl2br($LineInfo[0]['line']);
			}else{
				return "";
			}
		}
	
			
	}
	
	
	
?>