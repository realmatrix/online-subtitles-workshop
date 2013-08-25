<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Control Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="{TemplatePath}/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="{TemplatePath}/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="{TemplatePath}/css/charisma-app.css" rel="stylesheet">
	<link href="{TemplatePath}/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='{TemplatePath}/css/fullcalendar.css' rel='stylesheet'>
	<link href='{TemplatePath}/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='{TemplatePath}/css/chosen.css' rel='stylesheet'>
	<link href='{TemplatePath}/css/uniform.default.css' rel='stylesheet'>
	<link href='{TemplatePath}/css/colorbox.css' rel='stylesheet'>
	<link href='{TemplatePath}/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='{TemplatePath}/css/jquery.noty.css' rel='stylesheet'>
	<link href='{TemplatePath}/css/noty_theme_default.css' rel='stylesheet'>
	<link href='{TemplatePath}/css/elfinder.min.css' rel='stylesheet'>
	<link href='{TemplatePath}/css/elfinder.theme.css' rel='stylesheet'>
	<link href='{TemplatePath}/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='{TemplatePath}/css/opa-icons.css' rel='stylesheet'>
	<link href='{TemplatePath}/css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="{TemplatePath}/img/favicon.ico">
		
</head>

<body>
	<div>{SystemError} <!-- required to show error messages --></div>
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to Admin Control Panel</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Please login with your Username and Password.
					</div>
					
					<div id="login">
					<form class="form-horizontal" action="index.php" method="post">
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Login</button>
							</p>
						</fieldset>
						<input type="hidden" name="login" value="yes" />
						<input type="hidden" name="page" value="login" />
					</form>
					</div>
					
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="{TemplatePath}/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="{TemplatePath}/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="{TemplatePath}/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="{TemplatePath}/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="{TemplatePath}/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="{TemplatePath}/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="{TemplatePath}/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="{TemplatePath}/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="{TemplatePath}/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="{TemplatePath}/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="{TemplatePath}/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="{TemplatePath}/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="{TemplatePath}/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="{TemplatePath}/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="{TemplatePath}/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="{TemplatePath}/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='{TemplatePath}/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='{TemplatePath}/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="{TemplatePath}/js/excanvas.js"></script>
	<script src="{TemplatePath}/js/jquery.flot.min.js"></script>
	<script src="{TemplatePath}/js/jquery.flot.pie.min.js"></script>
	<script src="{TemplatePath}/js/jquery.flot.stack.js"></script>
	<script src="{TemplatePath}/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="{TemplatePath}/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="{TemplatePath}/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="{TemplatePath}/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="{TemplatePath}/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="{TemplatePath}/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="{TemplatePath}/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="{TemplatePath}/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="{TemplatePath}/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="{TemplatePath}/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="{TemplatePath}/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="{TemplatePath}/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="{TemplatePath}/js/charisma.js"></script>
	
{SystemSuccess}	<!-- required to show success messages keep under the registration form -->		

	<script>
		$(document).ready(function () {
		        $('head').append('<link id="bs-css" href="{TemplatePath}/css/bootstrap-cerulean.css" rel="stylesheet"><style type="text/css"> body {padding-bottom: 40px;}.sidebar-nav {padding: 9px 0;}</style><link href="{TemplatePath}/css/bootstrap-responsive.css" rel="stylesheet"><link href="{TemplatePath}/css/charisma-app.css" rel="stylesheet"><link href="{TemplatePath}/css/jquery-ui-1.8.21.custom.css" rel="stylesheet"><link href="{TemplatePath}/css/fullcalendar.css" rel="stylesheet"><link href="{TemplatePath}/css/fullcalendar.print.css" rel="stylesheet"  media="print"><link href="{TemplatePath}/css/chosen.css" rel="stylesheet"><link href="{TemplatePath}/css/uniform.default.css" rel="stylesheet"><link href="{TemplatePath}/css/colorbox.css" rel="stylesheet"><link href="{TemplatePath}/css/jquery.cleditor.css" rel="stylesheet"><link href="{TemplatePath}/css/jquery.noty.css" rel="stylesheet"><link href="{TemplatePath}/css/noty_theme_default.css" rel="stylesheet"><link href="{TemplatePath}/css/elfinder.min.css" rel="stylesheet"><link href="{TemplatePath}/css/elfinder.theme.css" rel="stylesheet"><link href="{TemplatePath}/css/jquery.iphone.toggle.css" rel="stylesheet"><link href="{TemplatePath}/css/opa-icons.css" rel="stylesheet"><link href="{TemplatePath}/css/uploadify.css" rel="stylesheet"><!-- The HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><!-- The fav icon --><link rel="shortcut icon" href="{TemplatePath}/img/favicon.ico">');
		});
	</script>
	
</body>
</html>
