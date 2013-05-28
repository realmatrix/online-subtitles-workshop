<html>
	<head>
<script src="apps/jquery/jquery-1.9.1.js"></script>
<link href="templates/default/files/css/style.css" media="all" rel="stylesheet" type="text/css">
<link href="templates/default/files/jquery-ui/css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script src="templates/default/files/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
<meta charset="utf-8">
<script type="text/javascript">
$(function(){
$('#ShoutBox').tabs();
});
</script>
	</head>
	
	<body>
<!-- shout box widget -->
		<div id="ShoutBox">
			<ul>
				<li><a href="#tabs-1">Shout Box</a></li>
			</ul>
			<div id="tabs-1">
				{content}
			</div>
		</div>
<!-- end shout box widget -->	
	</body>
</html>
