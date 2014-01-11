<?php

	class CUsersStatistics{
			
		function UsersStatistics(){
			return self::UsersStatistics_content();
		}
	
		function UsersStatistics_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function UsersStatistics_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function UsersStatistics_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_UsersStatistics_title")),
			 );
		return $content;
		}
					
			
	}
	
	
	
?>