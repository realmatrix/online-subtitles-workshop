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
				$index = $i + 1;
				$id = $AllLines[$i]['id'];
				$LineNumber = $AllLines[$i]['line'];
				$Start = $AllLines[$i]['start'];
				$End = $AllLines[$i]['end'];
				$Text = $AllLines[$i]['text'];
				$Transcript = $AllLines[$i]['TranscribedText'];
				if($Transcript==""){$Transcript = "...";}
				$res .="<a name='line".$LineNumber."'></a>"; 
				$res .= "<div id='dline".$LineNumber."'>";
				$res .= "<div class='otext'>".$Text."</div>";
				$res .= "<div class='ltime'>";
				$res .= "<div class='lstart'>
				<p class='pstart' id='pstart".$LineNumber."'  onclick='ShowHide(&quot;tlstart".$LineNumber."&quot, &quot;pstart".$LineNumber."&quot;);'>".$Start."</p><input type='text' id='tlstart".$LineNumber."' class='tlstart' value='".$Start."'></div>";
				$res .= "<div class='lend'><p class='pend' id='pend".$LineNumber."' onclick='ShowHide(&quot;tlend".$LineNumber."&quot, &quot;pend".$LineNumber."&quot;);'>".$End."</p><input type='text' id='tlend".$LineNumber."' class='tlend' value='".$End."'></div>";
				$res .= "</div>";
				$res .= "<div class='ltext'><p tabindex=".$index." id='ptrans".$LineNumber."' class='ptransscript' onclick='ShowHide(&quot;ttransscript".$LineNumber."&quot;, &quot;ptrans".$LineNumber."&quot;);' onfocus='ShowHide(&quot;ttransscript".$LineNumber."&quot;, &quot;ptrans".$LineNumber."&quot;);'>".$Transcript."</p><textarea class='tatransscript' id='ttransscript".$LineNumber."'>".$Transcript."</textarea></div>";
				$res .= "</div>";
			}
			return $res;
		}

		function PrepareText(){
			
		}
		
		function PrepareStart(){
			
		}
		
		function PrepareEnd(){
			
		}
		
		function PrepareTransscript(){
			
		}		

	
			
	}
	
	
	
?>