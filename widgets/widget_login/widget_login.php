<?php

	function widget_login(){
		return widget_login_content();
	}
	
	function widget_login_content(){
		$content = file_get_contents("widgets/widget_login/login.tpl");
		return $content;
	}	
?>