<?php

	class Wwidget_NewsLetter{
		
		function widget_NewsLetter(){
			return self::widget_NewsLetter_render();
		}
		
		function widget_NewsLetter_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}		
	
		function widget_NewsLetter_options(){
			$options = array(
			"show"=>array("home"), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_NewsLetter_render(){
			$array = array(
				array("{NewsLetterName}", $GLOBALS['COMMON']->l('widget_newsletter_name')),
				array("{NewsLetterEmail}", $GLOBALS['COMMON']->l('widget_newsletter_email')),
				array("{NewsLetterSubmit}", $GLOBALS['COMMON']->l('widget_newsletter_submit')),
				array("{w}", "widget_NewsLetter"),
			);	
			return $array;
		}
		
	}

	
?>