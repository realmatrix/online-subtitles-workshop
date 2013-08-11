<?php

	class CDownloadSubtitle{
			
		function DownloadSubtitle(){
			return self::DownloadSubtitle_content();
		}
	
		function DownloadSubtitle_hooks(){
			$array = array(
				array("DlSubtitle", "download"),
			);
			return $array;
		}
			
		function DownloadSubtitle_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function DownloadSubtitle_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_DownloadSubtitle_title")),
				  array("{sid}", $GLOBALS['vars']['sid']),
				  array("{cid}", $GLOBALS['vars']['cid']),
				 );
			 
		return $content;
		}
		
		function download(){
			if($GLOBALS['vars']['type']=="1"){$content = self::GetUserLines();}
			$file = $GLOBALS['COMMON']->GetTmpDir()."/test.srt.gz";
			$data = $content;
			$gzdata = gzencode($data, 9);
			file_put_contents($file, $gzdata);
			header("location:".$file);
		}
		
		function GetUserLines(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
			);
			$SubtitleContent = $GLOBALS['COMMON']->db_query("SELECT * FROM `SubtitlesContent` WHERE `sid` = :sid AND `cid` = :cid ", $args);
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
				array(":uid", $_SESSION['id'], "str"),
			);
			$UserLines = $GLOBALS['COMMON']->db_query("SELECT * FROM `Transcriptions` WHERE `sid` = :sid AND `cid` = :cid AND `uid` = :uid ", $args);
			echo count($UserLines);
			$UserTranscriptions = array();
			for ($i=0; $i < count($AllUserTranscptions); $i++) {
				$UserTranscriptions[$AllUserTranscptions[$i]['lid']] = $AllUserTranscptions[$i]['text']; 
			}
		}
		

	
			
	}
	
	
	
?>