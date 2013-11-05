<?php

	class Wwidget_QuickLinks{
		
		function widget_QuickLinks(){
			return self::widget_QuickLinks_render();
		}
	
		function widget_QuickLinks_options(){
			$options = array(
			"show"=>array(), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"yes", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_QuickLinks_render(){
			$array = array(
				array("{AddVideo}", $GLOBALS['COMMON']->l('widget_quicklinks_addvideo')),
				array("{AddTeam}", $GLOBALS['COMMON']->l('widget_quicklinks_addteam')),
				array("{Logout}", $GLOBALS['COMMON']->l('widget_quicklinks_logout')),
				array("{PMS}", $GLOBALS['COMMON']->l('widget_quicklinks_pms')),
				array("{UserCp}", $GLOBALS['COMMON']->l('widget_quicklinks_UserCp')),
			);
			return $array;
		}	
		
	}


?>