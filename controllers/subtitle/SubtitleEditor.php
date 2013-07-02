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
				  array("{CDTitle}", "cd title here"),
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
			$counter = 0;
			for ($i=0; $i < count($AllLines); $i++) {
				$counter++;
				$pindex = $counter;
				$counter++;
				$Taindex= $counter;
				$id = $AllLines[$i]['id'];
				$LineNumber = $AllLines[$i]['line'];
				$Start = $AllLines[$i]['start'];
				$End = $AllLines[$i]['end'];
				$Text = $AllLines[$i]['text'];
				$Transcript = $AllLines[$i]['TranscribedText'];
				if($Transcript==""){$Transcript = "...";}
				$res .="<a name='line".$LineNumber."'></a>"; 
				$res .= "<div id='dline".$LineNumber."'>";
				$res .= self::PrepareText($Text);
				$res .= "<div class='ltime'>";
				$res .= self::PrepareStart($id, $LineNumber, $Start);
				$res .= self::PrepareEnd($id, $LineNumber, $End);
				$res .= "</div>";
				$res .= self::PrepareTransscript($id, $pindex, $Taindex, $LineNumber, $Transcript);
				$res .= "</div>";
			}
			return $res;
		}

		function PrepareText($Text){
			$res = "<div class='otext' >".$Text."</div>";
			return $res;
		}
		
		function PrepareStart($lineid, $LineNumber, $Start){
			$res = "<div class='lstart'>";
			$res .= " <p class='pstart' id='pstart".$LineNumber."'";
			$res .= " onclick='ShowHide(&quot;tlstart".$LineNumber."&quot, &quot;pstart".$LineNumber."&quot;);'>".$Start."</p>";
			$res .= " <input type='text' id='tlstart".$LineNumber."' class='tlstart' value='".$Start."'";
			$res .= " onblur='ShowHide(&quot;pstart".$LineNumber."&quot;, &quot;tlstart".$LineNumber."&quot;);";
			$res .= " SaveSubtitle(&quot;start&quot;, &quot;pstart".$LineNumber."&quot;, &quot;tlstart".$LineNumber."&quot;, &quot;".$GLOBALS['vars']['sid']."&quot;, &quot;".$GLOBALS['vars']['cid']."&quot;, &quot;".$lineid."&quot;);'";
			$res .= " />";
			$res .= "</div>";
			return $res;
		}
		
		function PrepareEnd($lineid, $LineNumber, $End){
			$res = "<div class='lend'><p class='pend' id='pend".$LineNumber."'";
			$res .= " onclick='ShowHide(&quot;tlend".$LineNumber."&quot, &quot;pend".$LineNumber."&quot;);'>".$End."</p>";
			$res .= " <input type='text' id='tlend".$LineNumber."' class='tlend' value='".$End."'";
			$res .= " onblur='ShowHide(&quot;pend".$LineNumber."&quot;, &quot;tlend".$LineNumber."&quot;);";
			$res .= " SaveSubtitle(&quot;end&quot;, &quot;pend".$LineNumber."&quot;, &quot;tlend".$LineNumber."&quot;, &quot;".$GLOBALS['vars']['sid']."&quot;, &quot;".$GLOBALS['vars']['cid']."&quot;, &quot;".$lineid."&quot;);'";
			$res .= " />";
			$res .= "</div>";
			return $res;
		}
		
		function PrepareTransscript($lineid, $pindex, $tindex, $LineNumber, $Transcript){
			$res = "<div class='ltext'><p tabindex=".$pindex." id='ptrans".$LineNumber."' class='ptransscript'";
			$res .= " onclick='ShowHide(&quot;ttransscript".$LineNumber."&quot;, &quot;ptrans".$LineNumber."&quot;);'";
			$res .= " onfocus='ShowHide(&quot;ttransscript".$LineNumber."&quot;, &quot;ptrans".$LineNumber."&quot;);'>".$Transcript."</p>";
			$res .= " <textarea tabindex=".$tindex." class='tatransscript' id='ttransscript".$LineNumber."'";
			$res .= " onblur='ShowHide(&quot;ptrans".$LineNumber."&quot;, &quot;ttransscript".$LineNumber."&quot;);";
			$res .= " SaveSubtitle(&quot;text&quot;, &quot;ptrans".$LineNumber."&quot;, &quot;ttransscript".$LineNumber."&quot;, &quot;".$GLOBALS['vars']['sid']."&quot;, &quot;".$GLOBALS['vars']['cid']."&quot;, &quot;".$lineid."&quot;)';>".$Transcript;
			$res .= "</textarea>";
			$res .= "</div>";
			return $res;
		}		

	
			
	}
	
	
	
?>