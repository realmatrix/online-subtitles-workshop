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
			
				
		function AddSubtitle_content(){
				$content = array
				  (
				  array("{title}", "Add Subtitle"),
				 );
			 
		return $content;
		}
		
		
	}
	
	
	
?>