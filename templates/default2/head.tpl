<!DOCTYPE html>  
<html lang="en">  
<head>  
{SystemHeader}
<meta charset="utf-8">  
<title>{SiteName}</title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<meta name="description" content="Example of Fixed Layout with Twitter Bootstrap version 2.0 from w3resource.com">  
<!-- Le styles -->  
<link href="{TemplatePath}/files/bootstrap/css/bootstrap.css" rel="stylesheet">  
<link href="{TemplatePath}/files/bootstrap/css/example-fixed-layout.css" rel="stylesheet">  
<script type="text/javascript" src="{TemplatePath}/files/bootstrap/js/bootstrap.js"></script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->  
<!--[if lt IE 9]>  
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>  
<![endif]-->  
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
</head>  
<body>  

<!-- header -->
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <a class="brand" href="#">{SiteName}</a>
		<ul class="nav">
		  <li class="active">
		    <a href="#">Home</a>
		  </li>
		  <li><a href="#">Link</a></li>
		  <li><a href="#">Link</a></li>
		</ul>
<form class="navbar-search pull-left">
  <input type="text" class="search-query" placeholder="Search">
</form>
  </div>
</div>
<!-- end header -->  

<div id="text-2" class="widget-wrapper widget_text">
<div class="widget-title">Text Widget</div>
<div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac magna eu lectus mattis eleifend dapibus ullamcorper orci. Maecenas sit amet ligula quam, nec lobortis libero. Vivamus feugiat dolor ac justo dictum congue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
</div>



<div class="span4">
<button class="btn btn-primary" style="width:100%;">test headding</button>
</div>
<br><br><br><br><br><br>

<!-- Le javascript  
================================================== -->  
<!-- Placed at the end of the document so the pages load faster -->  
<script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-transition.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-alert.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-modal.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-dropdown.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-scrollspy.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-tab.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-tooltip.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-popover.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-button.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-collapse.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-carousel.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-typeahead.js"></script>  
</body>  
</html>  

 
 

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