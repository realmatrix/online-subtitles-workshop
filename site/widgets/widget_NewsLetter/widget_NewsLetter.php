<?php

	class Wwidget_NewsLetter{
		
		function widget_NewsLetter(){
			return self::widget_NewsLetter_render();
		}
		
		function widget_NewsLetter_install(){
			
		}
		
		function widget_NewsLetter_schema(){

		}
		
		function widget_NewsLetter_info(){
			$info = array(
			'name' => 'News Letter',
			'description' => 'widget description',
			'by' => 'RealMatrix',
			'date' => '2014-14-1',
			'version' => '1.0',
			);
			return $info;
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
			"loggedin"=>"no", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_NewsLetter_render(){
			$array = array(
				array("{NewsLetterName}", $GLOBALS['system']->l('widget_newsletter_name')),
				array("{NewsLetterEmail}", $GLOBALS['system']->l('widget_newsletter_email')),
				array("{NewsLetterSubmit}", $GLOBALS['system']->l('widget_newsletter_submit')),
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
			$res = $GLOBALS['system']->db_query("INSERT INTO `newsletter` (`name`, `email`) VALUES (:name, :email);", $args, $ExecState);
			if($ExecState === TRUE){$GLOBALS['SUCCESS'][]="email added successfully.";}else{$GLOBALS['ERROR'][]=$ExecState;}
		}
		
	}

	
?>