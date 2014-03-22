<?php

	class Wwidget_login{
		function widget_login(){
			return self::widget_login_render();
		}
		
		function widget_login_install(){
			
		}
		
		function widget_login_schema(){

		}
		
		function widget_login_info(){
			$info = array(
			'name' => 'User Login',
			'description' => 'widget description',
			'by' => 'RealMatrix',
			'date' => '2014-14-1',
			'version' => '1.0',
			);
			return $info;
		}
		
		function widget_login_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
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
				array("{LoginUsername}", $GLOBALS['system']->l('login_username')),
				array("{LoginPassword}", $GLOBALS['system']->l('login_password')),
				array("{LoginOrRegister}", $GLOBALS['system']->l('login_orregister')),
				array("{LoginSubmit}", $GLOBALS['system']->l('login_submit')),
			);
			return $array;			
		}
		
	}

	
?>