<?php

	class CDownloadSubtitle{
			
		function DownloadSubtitle(){
			return self::DownloadSubtitle_content();
		}
	
		function DownloadSubtitle_hooks(){
			$array = array(
				array("test", "test"),
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
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>