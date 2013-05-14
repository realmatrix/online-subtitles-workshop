<?php

	function widget_login(){
		return widget_login_content();
	}

	function widget_login_options(){
		$options = array(
		"show"=>array(), //show widget on this pages only - leave blank to show on all pages
		"hide"=>array(), // hide widget on this pages
		"loggedin"=>"no", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
		);
		return $options;
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