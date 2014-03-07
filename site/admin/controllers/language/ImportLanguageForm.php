<?php

	class CImportLanguageForm{
			
		function ImportLanguageForm(){
			return self::ImportLanguageForm_content();
		}
	
		function ImportLanguageForm_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ImportLanguageForm_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ImportLanguageForm_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_ImportLanguageForm_title")),
			  array("{page}", $GLOBALS['vars']['page']),
			  array("{sec}", $GLOBALS['vars']['sec']),
			  array("{LangName}", $GLOBALS['vars']['lang']),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>