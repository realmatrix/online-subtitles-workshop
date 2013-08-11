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
			header("Content-type: text/plain");
			header("Content-Disposition: attachment; filename=savethis.txt");
			$content = "This is some text...\n";
			print $content;
	
			header_remove("Content-Disposition");
			header_remove("Content-type");
			
		}
		

	
			
	}
	
	
	
?>