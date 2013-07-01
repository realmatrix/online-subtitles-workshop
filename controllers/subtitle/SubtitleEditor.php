<?php

	class CSubtitleEditor{
			
		function SubtitleEditor(){
			return self::SubtitleEditor_content();
		}
	
		function SubtitleEditor_hooks(){
			$array = array(
				array("DeleteSubtitles", "DeleteSubtitles"),
			);
			return $array;
		}
			
		function SubtitleEditor_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SubtitleEditor_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_SubtitleEditor_title")),
				  array("{EditorContent}", self::GetContent()),
				 );
			 
		return $content;
		}
		
		function GetContent(){
			$content = "<div id='editor-SubtitleContent'>";
			$content .= self::GetAllLines();
			$content .= "</div>";
			return $content;
		}
		
		function GetAllLines(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
			);
			$AllLines = $GLOBALS['COMMON']->db_query("SELECT * FROM `SubtitlesContent` WHERE `sid` = :sid and `cid` = :cid", $args);
			$res = "";
			for ($i=0; $i < count($AllLines); $i++) {
				$res .="<a name='line".$AllLines[$i]['line']."'></a>"; 
				$res .= "<div id='dline".$AllLines[$i]['line']."'>";
				$res .= "<div class='otext'>".$AllLines[$i]['text']."</div>";
				$res .= "<div class='ltime'>";
				$res .= "<div class='lstart'><p id='pstart".$AllLines[$i]['line']."'  onclick='ShowHide(&quot;tlstart".$AllLines[$i]['line']."&quot, &quot;pstart".$AllLines[$i]['line']."&quot;);'>".$AllLines[$i]['start']."</p><input type='text' id='tlstart".$AllLines[$i]['line']."' class='tlstart' value='".$AllLines[$i]['start']."'></div>";
				$res .= "<div class='lend'><p id='pend".$AllLines[$i]['line']."' onclick='ShowHide(&quot;tlend".$AllLines[$i]['line']."&quot, &quot;pend".$AllLines[$i]['line']."&quot;);'>".$AllLines[$i]['end']."</p><input type='text' id='tlend".$AllLines[$i]['line']."' class='tlend' value='".$AllLines[$i]['end']."'></div>";
				$res .= "</div>";
				$res .= "<div class='ltext'>".$AllLines[$i]['TranscribedText']."<--</div>";
				$res .= "</div>";
			}
			return $res;
		}
		

	
			
	}
	
	
	
?>