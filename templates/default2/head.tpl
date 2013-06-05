<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0063)https://www.phpbb.com/styles/demo/3.0/board/index.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML dir="ltr" lang="en-gb" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
	{SystemHeader}
<META content="text/html; charset=UTF-8" http-equiv="content-type">
<META content="text/css" http-equiv="content-style-type">
<META content="en-gb" http-equiv="content-language">
<META content="no" http-equiv="imagetoolbar">
<META name="resource-type" content="document">
<META name="distribution" content="global">
<META name="keywords" content="">
<META name="description" content="">
<TITLE>{SiteName}</TITLE>
<LINK title="Feed - phpBB 3.0.x Styles Demo Board" rel="alternate" 
type="application/atom+xml" href="http://www.phpbb.com/styles/demo/3.0/board/feed.php"><LINK 
title="Feed - News" rel="alternate" type="application/atom+xml" href="http://www.phpbb.com/styles/demo/3.0/board/feed.php?mode=news"><LINK 
title="Feed - New Topics" rel="alternate" type="application/atom+xml" href="http://www.phpbb.com/styles/demo/3.0/board/feed.php?mode=topics"><LINK 
title="Feed - Active Topics" rel="alternate" type="application/atom+xml" href="http://www.phpbb.com/styles/demo/3.0/board/feed.php?mode=topics_active"><!--
	phpBB style name: Absolution
	Based on style:   prosilver (this is the default phpBB3 style)
	Original author:  Tom Beddard ( http://www.subBlue.com/ )
	Modified by:      Christian Bullock ( http://www.ChristianBullock.com/ )

-->
<SCRIPT type="text/javascript">
// <![CDATA[
	var jump_page = 'Enter the page number you wish to go to:';
	var on_page = '';
	var per_page = '';
	var base_url = '';
	var style_cookie = 'phpBBstyle';
	var style_cookie_settings = '; path=styles/demo/3.0/board/; domain=.phpbb.com';
	var onload_functions = new Array();
	var onunload_functions = new Array();

	

	/**
	* Find a member
	*/
	function find_username(url)
	{
		popup(url, 760, 570, '_usersearch');
		return false;
	}

	/**
	* New function for handling multiple calls to window.onload and window.unload by pentapenguin
	*/
	window.onload = function()
	{
		for (var i = 0; i < onload_functions.length; i++)
		{
			eval(onload_functions[i]);
		}
	};

	window.onunload = function()
	{
		for (var i = 0; i < onunload_functions.length; i++)
		{
			eval(onunload_functions[i]);
		}
	};

// ]]>
</SCRIPT>

<SCRIPT type="text/javascript" src="phpBB%203_0_x%20Styles%20Demo%20Board%20•%20Index%20page_php_files/forum_fn.js"></SCRIPT>

<SCRIPT type="text/javascript" src="phpBB%203_0_x%20Styles%20Demo%20Board%20•%20Index%20page_php_files/jquery-1.7.1.min.js"></SCRIPT>

<SCRIPT type="text/javascript" src="phpBB%203_0_x%20Styles%20Demo%20Board%20•%20Index%20page_php_files/jquery.tipsy.js"></SCRIPT>

<SCRIPT type="text/javascript" src="phpBB%203_0_x%20Styles%20Demo%20Board%20•%20Index%20page_php_files/jquery.hoverIntent.min.js"></SCRIPT>

<SCRIPT type="text/javascript" src="phpBB%203_0_x%20Styles%20Demo%20Board%20•%20Index%20page_php_files/jquery.cookie.js"></SCRIPT>

<SCRIPT type="text/javascript" src="phpBB%203_0_x%20Styles%20Demo%20Board%20•%20Index%20page_php_files/jquery.collapse.js"></SCRIPT>

<SCRIPT type="text/javascript">
// <![CDATA[
$(function(){
    $([window, document]).blur(function(){
        $('ul.drop').css({display: 'none'});
    });
    $("#nav ul li").hoverIntent(function(){
			$(this).children("ul").slideDown();
        },function(){
            $(this).children("ul").slideUp();
    });
});
// ]]>
</SCRIPT>
<LINK title="printonly" rel="stylesheet" type="text/css" href="{TemplatePath}/tmp/print.css" 
media="print"><LINK rel="stylesheet" type="text/css" href="{TemplatePath}/tmp/style.css" 
media="screen, projection"><LINK title="A" rel="stylesheet" type="text/css" 
href="{TemplatePath}/tmp/normal.css">
<LINK title="A+" rel="alternate stylesheet" type="text/css" href="{TemplatePath}/tmp/medium.css">
<LINK title="A++" rel="alternate stylesheet" type="text/css" href="{TemplatePath}/tmp/large.css"><!--[if IE]><LINK 
rel="stylesheet" type="text/css" href="{TemplatePath}/tmp/ie.css"><![endif]-->
<META name="GENERATOR" content="MSHTML 9.00.8112.16484">
<link rel="stylesheet" type="text/css" href="{TemplatePath}/tmp/table.css">
</HEAD>