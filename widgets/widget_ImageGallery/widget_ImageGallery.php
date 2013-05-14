<?php

	function widget_ImageGallery(){
		return widget_ImageGallery_content();
	}
	
	function widget_ImageGallery_options(){
		$options = array(
		"show"=>array("home",), //show widget on this pages only - leave blank to show on all pages
		"hide"=>array(), // hide widget on this pages
		"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
		);
		return $options;
	}
	
	function widget_ImageGallery_content(){
		$content = file_get_contents("widgets/widget_ImageGallery/ImageGallery.htm");
		return $content;
	}	
?>