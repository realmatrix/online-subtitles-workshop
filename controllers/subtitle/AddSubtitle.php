<?php

	class CAddSubtitle{

		
		function AddSubtitle(){
			return self::AddSubtitle_content();
		}
	
		function AddSubtitle_hooks(){
			$array = array(
			);
			return $array;
		}
			
		function AddSubtitle_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function AddSubtitle_content(){
				$content = array
				  (
				  array("{vid}", $_GET['vid']),
				  array("{AddSubtitle}", $GLOBALS['lang']['subtitle_AddSubtitle_AddSubtitle']),
				  array("{ReleaseName}", $GLOBALS['lang']['subtitle_AddSubtitle_ReleaseName']),
				  array("{Language}", $GLOBALS['lang']['subtitle_AddSubtitle_Language']),
				  array("{Version}", $GLOBALS['lang']['subtitle_AddSubtitle_Version']),
				  array("{Fps}", $GLOBALS['lang']['subtitle_AddSubtitle_FPS']),
				  array("{Format}", $GLOBALS['lang']['subtitle_AddSubtitle_Format']),
				  array("{NoCDs}", $GLOBALS['lang']['subtitle_AddSubtitle_CDS']),
				  array("{submit}", $GLOBALS['lang']['subtitle_AddSubtitle_Submit']),
				 );
			 
		return $content;
		}
		
		
	}
	
	
	
?>