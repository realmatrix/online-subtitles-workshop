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
			if($GLOBALS['vars']['type']=="0"){$content = self::GetOriginalLines();}
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
			$SubtitleContent = $GLOBALS['COMMON']->db_query("SELECT * FROM `subtitlescontent` WHERE `sid` = :sid AND `cid` = :cid ", $args);
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
				array(":uid", $_SESSION['id'], "str"),
			);
			$UserLines = $GLOBALS['COMMON']->db_query("SELECT * FROM `transcriptions` WHERE `sid` = :sid AND `cid` = :cid AND `uid` = :uid ", $args);
			//echo count($UserLines);
			$UserTranscriptions = array();
			for ($i=0; $i < count($UserLines); $i++) {
				$UserTranscriptions[$UserLines[$i]['lid']] = $UserLines[$i]['text']; 
			}
			$res = "";
			for ($i=0; $i < count($SubtitleContent); $i++) { 
				$res.=$SubtitleContent[$i]['line']."\r\n";
				$res.=$SubtitleContent[$i]['start']." --> ".$SubtitleContent[$i]['end']."\r\n";
				$res.=$UserTranscriptions[$SubtitleContent[$i]['id']]."\r\n\r\n";
			}
			return $res;
		}

		function GetOriginalLines(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
			);
			$SubtitleContent = $GLOBALS['COMMON']->db_query("SELECT * FROM `subtitlescontent` WHERE `sid` = :sid AND `cid` = :cid ", $args);
			$res = "";
			for ($i=0; $i < count($SubtitleContent); $i++) { 
				$res.=$SubtitleContent[$i]['line']."\r\n";
				$res.=$SubtitleContent[$i]['start']." --> ".$SubtitleContent[$i]['end']."\r\n";
				$res.=$SubtitleContent[$i]['text']."\r\n\r\n";
			}
			return $res;
		}
		

	
			
	}
	
	
	
?>