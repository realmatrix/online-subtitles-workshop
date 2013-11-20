<?php

	class CManageWidgets{
			
		function ManageWidgets(){
			return self::ManageWidgets_content();
		}
	
		function ManageWidgets_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ManageWidgets_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ManageWidgets_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_ManageWidgets_title")),
				 );
			 
		return $content;
		}
		
	
			
			
	}
	
	
	
?>