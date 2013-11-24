<?php

	class CEditorControls{
			
		function EditorControls(){
			return self::EditorControls_content();
		}
	
		function EditorControls_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function EditorControls_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditorControls_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_EditorControls_title")),
				  array("{sid}", $GLOBALS['vars']['sid']),
				  array("{cid}", $GLOBALS['vars']['cid']),
				 );
			 
		return $content;
		}
		


		

	
			
	}
	
	
	
?>