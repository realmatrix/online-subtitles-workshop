<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML dir="ltr" lang="en-gb" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
	{SystemHeader}

	<script src='{TemplatePath}/files/apps/jquery/jquery-2.0.0.js'></script>
	<script type='text/javascript' charset='utf-8' src='{TemplatePath}/files/apps/jquery/jquery.collapse.js'></script>
	<script type='text/javascript' charset='utf-8' src='{TemplatePath}/files/apps/jquery/jquery.tipsy.js'></script>
	<script type='text/javascript' charset='utf-8' src='{TemplatePath}/files/apps/jquery/jquery.hoverIntent.min.js'></script>
	<script type='text/javascript' src='{TemplatePath}/files/apps/DataTables-1.9.4/media/js/jquery.dataTables.js'></script>
	<script type='text/javascript' charset='utf-8' src='{TemplatePath}/files/apps/DataTables-1.9.4/extras/TableTools/media/js/ZeroClipboard.js'></script>
	<script type='text/javascript' charset='utf-8' src='{TemplatePath}/files/apps/DataTables-1.9.4/extras/TableTools/media/js/TableTools.js'></script>
	
	<script>
	function processFormGet(formId, divid) { 
	//your validation code
	$.ajax( {
	        type: 'GET',
	        url: 'index.php',
	        data: $('#'+formId).serialize(), 
	        success: function(data) {
	            $('#divid').html(data);
	        }
	    } );
	}
	</script>
	
	<script>
	function processFormPOST(formId, divid) { 
	//your validation code
	$.ajax( {
	        type: 'POST',
	        url: 'index.php',
	        data: $('#'+formId).serialize(), 
	        success: function(data) {
	            $('#divid').html(data);
	        }
	    } );
	}
	</script>
	
<META content="text/html; charset=UTF-8" http-equiv="content-type">
<META content="text/css" http-equiv="content-style-type">
<META content="no" http-equiv="imagetoolbar">
<META name="resource-type" content="document">
<META name="keywords" content="">
<META name="description" content="{PageDescription}">
<TITLE>{SiteName} - {PageTitle}</TITLE>

<SCRIPT type="text/javascript">
// <![CDATA[
	var jump_page = 'Enter the page number you wish to go to:';
	var on_page = '';
	var per_page = '';
	var base_url = '';
	var onload_functions = new Array();
	var onunload_functions = new Array();

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
<!-- Including the Lobster font from Google's Font Directory -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
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