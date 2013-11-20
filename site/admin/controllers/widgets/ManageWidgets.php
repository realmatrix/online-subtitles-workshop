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
			$widgets = self::ListWidgets();
			print_r($widgets);
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_ManageWidgets_title")),
				 );
			 
		return $content;
		}
		
		function ListWidgets(){
			$res = array();
			if ($handle = opendir('../widgets')) {
			    while (false !== ($entry = readdir($handle))) {
			        if ($entry != "." && $entry != "..") {
			            $res[] = $entry;
			        }
			    }
			    closedir($handle);
			}
			return $res;
		}
		
	
			
			
	}
	
	
	
?>