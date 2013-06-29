<?php

	class CSubtitleUploader{
			
		function SubtitleUploader(){
			return self::SubtitleUploader_content();
		}
	
		function SubtitleUploader_hooks(){
			$array = array(
				array("UploadSubtitle", "UploadSubtitle"),
			);
			return $array;
		}
			
		function SubtitleUploader_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SubtitleUploader_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_title")),
				  array("{sid}", $GLOBALS['vars']['sid']),
				  array("{cd}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_cd")),
				  array("{cdtitle}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_CDTitle")),
				  array("{subtitletext}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_SubtitleText")),
				  array("{subtitlefile}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_SubtitleFile")),
				  array("{note}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_note")),
				  array("{submit}", $GLOBALS['COMMON']->l("subtitle_SubtitleUploader_submit")),
				 );
			 
		return $content;
		}
		
		function UploadSubtitle(){
			include "include/SubtitleParser.php";
			$parser = new Subtitleparser;
			$content = $parser->convert_srt($filename);
		}
	
			
	}
	
	
	
?>