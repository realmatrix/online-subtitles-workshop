<?php

	class Wwidget_NewsLetter{
		
		function widget_NewsLetter(){
			return self::widget_NewsLetter_content();
		}
	
		function widget_NewsLetter_options(){
			$options = array(
			"show"=>array(), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
			
		function widget_NewsLetter_content(){
			$content = file_get_contents("widgets/widget_NewsLetter/NewsLetter.tpl");
			$array = array(
				array("{NewsLetterName}", $GLOBALS['lang']['widget_newsletter_name']),
				array("{NewsLetterEmail}", $GLOBALS['lang']['widget_newsletter_email']),
				array("{NewsLetterSubmit}", $GLOBALS['lang']['widget_newsletter_submit']),
			);
			$data = Common::RenderData($content, $array);
			return $data;
		}
		
	}

	
?>