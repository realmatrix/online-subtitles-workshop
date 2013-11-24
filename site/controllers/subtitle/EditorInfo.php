<?php

	class CEditorInfo{
			
		function EditorInfo(){
			return self::EditorInfo_content();
		}
	
		function EditorInfo_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function EditorInfo_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditorInfo_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_EditorInfo_title")),
				 );
			 
		return $content;
		}
		

		

	
			
	}
	
	
	
?>