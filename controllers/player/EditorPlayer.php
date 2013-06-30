<?php

	class CEditorPlayer{
			
		function EditorPlayer(){
			return self::EditorPlayer_content();
		}
	
		function EditorPlayer_hooks(){
			$array = array(
				array("search", "search")
			);
			return $array;
		}
			
		function EditorPlayer_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditorPlayer_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("player_EditorPlayer_title")),
				 );
			 
		return $content;
		}
		
	
			
	}
	
	
	
?>