<?php

	class CFaqList{
			
		function FaqList(){
			return self::FaqList_content();
		}
	
		function FaqList_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function FaqList_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function FaqList_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("faq_FaqList_title")),
				 );
			 
		return $content;
		}
		

		

	
			
	}
	
	
	
?>