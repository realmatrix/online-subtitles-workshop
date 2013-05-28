<?php

	class Wwidget_QuickLinks{
		
		function widget_QuickLinks(){
			return self::widget_QuickLinks_content();
		}
	
		function widget_QuickLinks_options(){
			$options = array(
			"show"=>array(), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"yes", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
			
		function widget_QuickLinks_content(){
			$render = array(
				array("{AddVideo}", $GLOBALS['lang']['widget_quicklinks_addvideo']),
				array("{Logout}", $GLOBALS['lang']['widget_quicklinks_logout']),
			);
			$content = file_get_contents("widgets/widget_QuickLinks/QuickLinks.tpl");
			$res = common::RenderData($content, $render);
			return $res;
		}	
		
	}


?>