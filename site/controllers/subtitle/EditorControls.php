<?php

	class CEditorControls{
			
		function EditorControls(){
			return self::EditorControls_content();
		}
	
		function EditorControls_hooks(){
			$array = array(
				array("autotranslate", "AutoTranslate"),
				array("updatedone", "UpdateLineState"),
				array("deleteline", "DeleteLine"),
				array("addline", "AddLine"),
			);
			return $array;
		}
			
		function EditorControls_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditorControls_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_EditorControls_title")),
				  array("{sid}", $GLOBALS['vars']['sid']),
				  array("{cid}", $GLOBALS['vars']['cid']),
				  array("{DoneOptions}", self::LineSelectOptions()),
				  array("{DeleteOptions}", self::LineSelectOptions()),
				  array("{AddLineOptions}", self::LineSelectOptions()),
				 );
			 
		return $content;
		}
		
		function GetLines(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
				array(":from", $GLOBALS['vars']['from'], "str"),
				array(":to", $GLOBALS['vars']['to'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `SubtitlesContent` WHERE `sid` = :sid and `cid` = :cid and line between :from and :to", $args);
			return $res;
		}

		function GetAllLines(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `SubtitlesContent` WHERE `sid` = :sid and `cid` = :cid ORDER BY line ASC", $args);
			return $res;
		}
				
		function AutoTranslate(){
			$SubtitleInfo = $GLOBALS['COMMON']->GetSubtitleInfo($GLOBALS['vars']['sid']);
			$VideoInfo = $GLOBALS['COMMON']->GetVideoInfo($SubtitleInfo[0]['vid']);
			$from = $VideoInfo[0]['language'];
			$from = $GLOBALS['COMMON']->GetLanguageById($from);
			$from = $from[0]['iso639code'];
			$to = $SubtitleInfo[0]['language'];
			$to = $GLOBALS['COMMON']->GetLanguageById($to);
			$to = $to[0]['iso639code'];
			$lines = self::GetLines();
			for ($i=0; $i < count($lines); $i++) {
				$text = $lines[$i]['text'];
				//$text = str_replace(array("\r\n","\r","\n"),"<*>", $text);
				$text = urlencode($text);
				$translation = file_get_contents("http://glosbe.com/gapi/translate?from=".$from."&dest=".$to."&format=json&phrase=".$text."&pretty=true");
				echo $translation;
			}
			//print_r($lines);
			$translation = file_get_contents("http://glosbe.com/gapi/translate?from=".$from."&dest=".$to."&format=json&phrase=ماذا&pretty=true");
			//echo $translation;
		}
		
		function LineSelectOptions(){
			$lines = self::GetAllLines();
			$res = "";
			for ($i=0; $i < count($lines); $i++) { 
				$res .= "<option value='".$lines[$i]['line']."'>".$lines[$i]['line']."</option>";
			}
			return $res;
		}

		function UpdateLineState(){
			if($GLOBALS['vars']['from']==""){$GLOBALS['ERROR'][]="no 'from' value was selected.";}
			if($GLOBALS['vars']['to']==""){$GLOBALS['vars']['to']=$GLOBALS['vars']['from'];}
			if($GLOBALS['vars']['from']>$GLOBALS['vars']['to'] and $GLOBALS['vars']['to']!=""){$GLOBALS['ERROR'][]="'from' value can't be greater than 'to' value.";}
			if($GLOBALS['vars']['state']=="done"){$value=1;}
			if($GLOBALS['vars']['state']=="notdone"){$value=0;}
			if(count($GLOBALS['ERROR'])>0){return FALSE;}
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
				array(":from", $GLOBALS['vars']['from'], "str"),
				array(":to", $GLOBALS['vars']['to'], "str"),
				array(":value", $value, "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("UPDATE `SubtitlesContent` SET `done` = :value WHERE `sid` = :sid and `cid` = :cid and `line` BETWEEN :from AND :to;", $args);
		}
		
		function DeleteLine(){
			if($GLOBALS['vars']['line']==""){$GLOBALS['ERROR'][]="select line to delete";}
			if(count($GLOBALS['ERROR'])>0){return FALSE;}
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
				array(":line", $GLOBALS['vars']['line'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("DELETE FROM `SubtitlesContent` WHERE `sid` = :sid and `cid` = :cid and `line` = :line", $args, $ExecState);
			self::ArrangeLines();
			if($ExecState===TRUE){$GLOBALS['SUCCESS'][]="Line deleted successfully.";}else{$GLOBALS['ERROR'][]="Failed to delete line.";}
		}
		
		function AddLine(){
			$AllLines = self::GetAllLines();
			$LastLine = end($AllLines);
			if($GLOBALS['vars']['option']==1){
				$start=self::ChangeTiming($LastLine['end'], 1); 
				$end=self::ChangeTiming($LastLine['end'], 2);
				}
			if($GLOBALS['vars']['option']==2){
				$start=self::ChangeTiming($AllLines[0]['start'], -2); 
				$end=self::ChangeTiming($AllLines[0]['start'], -1);
				}
			//if($GLOBALS['vars']['option']==3 or $GLOBALS['vars']['option']==4){self::GetLineInfo(1);}
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":uid", $_SESSION['id'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
				array(":line", "0", "str"),
				array(":start", $start, "str"),
				array(":end", $end, "str"),
				array(":text", "new line", "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("INSERT INTO `SubtitlesContent` (`sid`, `uid`, `cid`, `line`, `start`, `end`, `text`, `checked`, `done`) VALUES (:sid, :uid, :cid, :line, :start, :end, :text, '0', '0');", $args, $ExecState);
			self::ArrangeLines();
			if($ExecState===TRUE){$GLOBALS['SUCCESS'][]="New line added successfully.";}else{$GLOBALS['ERROR'][]="failed to add new line.";}
		}
		
		function ChangeTiming($time, $value){
			$t = explode(":", $time);
			$h = $t[0];
			$m = $t[1];
			$sm = explode(",", $t[2]);
			$s = $sm[0];
			$ms = $sm[1];
			$ms = $ms + $value;
			if($ms>999){$ms = $ms-999; $s = $s+1;}
			if($s>60){$s = $s-60; $m = $m+1;}
			if($m>60){$m = $m+60; $h = $h+1;}
			if($ms<0){$ms = 1000-$ms; $s = $s-1;}
			if($s<0){$s = 60-$s; $m = $m-1;}
			if($m<0){$m = 60-$m; $h = $h-1;}			
			$time = $h.":".$m.":".$s.",".$ms;
			return $time;
		}
		
	function ArrangeLines(){
		$args = array(
			array(":sid", $GLOBALS['vars']['sid'], "str"),
			array("cid", $GLOBALS['vars']['cid'], "str"),
		);
		$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `SubtitlesContent` WHERE `sid` = :sid and `cid` = :cid ORDER BY start ASC", $args);
		for ($i=0; $i < count($res); $i++) {
			$LineNumber = $i + 1; 
			$args = array(
				array(":id", $res[$i]['id'], "str"),
				array(":line", $LineNumber, "str"),
			);
			$GLOBALS['COMMON']->db_query("UPDATE `SubtitlesContent` SET `line` = :line WHERE `id` = :id ;", $args);
		}
	}
		

	
			
	}
	
	
	
?>