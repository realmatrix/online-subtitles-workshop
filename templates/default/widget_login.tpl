<html>
	<head>
<script src="apps/jquery/jquery-1.9.1.js"></script>
<link href="templates/default/files/css/style.css" media="all" rel="stylesheet" type="text/css">
<link href="templates/default/files/jquery-ui/css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script src="templates/default/files/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
<meta charset="utf-8">
<script type="text/javascript">
$(function(){
$('#loginbox').tabs();
});
</script>
	</head>
	
	<body>
<!-- login form -->
		<div id="loginbox">
			<ul>
				<li><a href="#tabs-1">Login</a></li>
			</ul>
			<div id="tabs-1">
				{content}
			</div>
		</div>
<!-- end login form -->		
	</body>
</html>



