<?php

	function widget_ImageGallery(){
		return widget_ImageGallery_content();
	}
	
	function widget_ImageGallery_content(){
		$content = file_get_contents("widgets/widget_ImageGallery/ImageGallery.htm");
		return $content;
	}	
?>