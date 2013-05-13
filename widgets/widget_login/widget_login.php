<?php

	function widget_login(){
		return widget_login_content();
	}
	
	function widget_login_content(){
		$content = file_get_contents("widgets/widget_login/login.tpl");
		$content = str_replace("{LoginUsername}", $GLOBALS['lang']['login_username'], $content);
		$content = str_replace("{LoginPassword}", $GLOBALS['lang']['login_password'], $content);		
		$content = str_replace("{LoginOrRegister}", $GLOBALS['lang']['login_orregister'], $content);
		$content = str_replace("{LoginSubmit}", $GLOBALS['lang']['login_submit'], $content);
		return $content;
	}	
?>