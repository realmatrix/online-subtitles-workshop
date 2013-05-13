<?php

	function widget_shoutbox(){
		return widget_shoutbox_content();
	}

	function widget_shoutbox_options(){
		$options = array(
		"show"=>array(), //show widget on this pages only - leave blank to show on all pages
		"hide"=>array(), // hide widget on this pages
		"loggedin"=>"both", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "both" for both states
		);
		return $options;
	}
	
	function widget_shoutbox_content(){
		$content = file_get_contents("widgets/widget_shoutbox/chatango.htm");
		return $content;
	}	
?>