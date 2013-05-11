<?php

	function widget_shoutbox(){
		return widget_shoutbox_content();
	}
	
	function widget_shoutbox_content(){
		$content = file_get_contents("widgets/widget_shoutbox/chatango.htm");
		return $content;
	}	
?>