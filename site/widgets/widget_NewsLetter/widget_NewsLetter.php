<?php

	class Wwidget_NewsLetter{
		
		function widget_NewsLetter(){
			return self::widget_NewsLetter_render();
		}
		
		function widget_NewsLetter_hooks(){
			$array = array(
				array("add", "AddUser")
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
		
		function AddUser(){
			if(!filter_var($GLOBALS['vars']['email'], FILTER_VALIDATE_EMAIL)){
				$GLOBALS['ERROR'][]="invalid email address.";
				return false;
			}
			$args = array(
				array(":name", $GLOBALS['vars']['name'], "str"),
				array(":email", $GLOBALS['vars']['email'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("INSERT INTO `NewsLetter` (`name`, `email`) VALUES (:name, :email);", $args, $ExecState);
			if($ExecState === TRUE){$GLOBALS['SUCCESS'][]="email added successfully.";}else{$GLOBALS['ERROR'][]=$ExecState;}
		}
		
	}

	
?>