<?php

	class Cedit{
			
		function edit_sections(){
			$array = array(
				array("subtitle", "SubtitleCDS", $GLOBALS['vars'], TRUE),
				array("subtitle", "SubtitleEditor", $GLOBALS['vars'], self::show()),
				array("subtitle", "EditorControls", $GLOBALS['vars'], self::show()),
			);
			return $array;
		}
		
		function show(){
			if($GLOBALS['vars']['sid']=="" or $GLOBALS['vars']['cid']==""){return FALSE;}else{return TRUE;}
		}	
			
	}

	
?>