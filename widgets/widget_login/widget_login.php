<?php

	class Wwidget_login{
		function widget_login(){
			return self::widget_login_content();
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
			$array = array(
				array("{LoginUsername}", $GLOBALS['lang']['login_username']),
				array("{LoginPassword}", $GLOBALS['lang']['login_password']),
				array("{LoginOrRegister}", $GLOBALS['lang']['login_orregister']),
				array("{LoginSubmit}", $GLOBALS['lang']['login_submit']),
			);
			$data = Common::RenderData($content, $array);
			return $data;
		}
	}

	
?>