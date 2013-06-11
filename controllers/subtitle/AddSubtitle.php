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
				 );
			 
		return $content;
		}
		
		
	}
	
	
	
?>