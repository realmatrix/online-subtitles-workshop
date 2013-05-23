<!doctype html>
<html>
<head>
{SystemHeader}
<title>{SiteName}</title>
<link href="rss.php" rel="alternate" title="RSS" type="application/atom+xml" />
<script type="text/javascript" src="js/scripts.js"></script>
<link rel="stylesheet" type="text/css" href="{TemplatePath}/required/demo_table_jui.css">
		<style type="text/css" media="screen">
			@import "/media/css/site_jui.ccss";
			@import "{TemplatePath}/required/demo_table_jui.css";			
			/*
			 * Override styles needed due to the mix of three different CSS sources! For proper examples
			 * please see the themes example in the 'Examples' section of this site
			 */
			.dataTables_info { padding-top: 0; }
			.dataTables_paginate { padding-top: 0; }
			.css_right { float: right; }
			#example_wrapper .fg-toolbar { font-size: 0.8em }
			#theme_links span { float: left; padding: 2px 10px; }
			
		</style>
<link href="{TemplatePath}/files/css/style.css" media="all" rel="stylesheet" type="text/css">
<link href="{TemplatePath}/files/jquery-ui/css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script src="{TemplatePath}/files/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
<meta charset="utf-8">
<script type="text/javascript">
$(function(){
$('#loginbox').tabs();
$('#test').tabs();
$('#footer').tabs();
$('#ShoutBox').tabs();
});
</script>
</head>
