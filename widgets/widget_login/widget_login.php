<?php

	class Wwidget_login{
		function widget_login(){
			return self::widget_login_render();
		}
	
		function widget_login_options(){
			$options = array(
			"show"=>array(), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"no", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_login_render(){
			$array = array(
				array("{LoginUsername}", $GLOBALS['COMMON']->l('login_username')),
				array("{LoginPassword}", $GLOBALS['COMMON']->l('login_password')),
				array("{LoginOrRegister}", $GLOBALS['COMMON']->l('login_orregister')),
				array("{LoginSubmit}", $GLOBALS['COMMON']->l('login_submit')),
			);
			return $array;			
		}
		
	}

	
?>