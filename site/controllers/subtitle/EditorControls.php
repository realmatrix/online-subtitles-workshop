<?php

	class CEditorControls{
			
		function EditorControls(){
			return self::EditorControls_content();
		}
	
		function EditorControls_hooks(){
			$array = array(
				array("autotranslate", "AutoTranslate"),
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
		

	
			
	}
	
	
	
?>