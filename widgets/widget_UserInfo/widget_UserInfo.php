<?php

	function widget_UserInfo(){
		return widget_UserInfo_content();
	}

	function widget_UserInfo_options(){
		$options = array(
		"show"=>array(), //show widget on this pages only - leave blank to show on all pages
		"hide"=>array(), // hide widget on this pages
		"loggedin"=>"yes", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
		);
		return $options;
	}
		
	function widget_UserInfo_content(){
		$content = file_get_contents("widgets/widget_UserInfo/UserInfo.tpl");
		$content = str_replace("{WelcomeBack}", $GLOBALS['lang']['login_welcomeback'], $content);
		$content = str_replace("{UserName}", $_SESSION['username'], $content);
		return $content;
	}	
?>