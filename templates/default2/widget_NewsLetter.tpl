<html>
	<head>
<script src="apps/jquery/jquery-1.9.1.js"></script>
<link href="templates/default/files/css/style.css" media="all" rel="stylesheet" type="text/css">
<link href="templates/default/files/jquery-ui/css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script src="templates/default/files/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
<meta charset="utf-8">
<script type="text/javascript">
$(function(){
$('#NewsLetter').tabs();
});
</script>
	</head>
	
	<body>
		<div id="NewsLetter">
			<ul>
				<li><a href="#tabs-1">Subscribe To NewsLetter</a></li>
			</ul>
			<div id="tabs-1">



		<script>
			function inputFocus(i){
			    if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
			}
			function inputBlur(i){
			    if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
			}
		</script>

		<form method="get" action="index.php">			
			<table cellspacing="0" cellpadding="1" style="width:100%;">
				<tr><td><input type="text" name="name" value="{NewsLetterName}" style="width:100%;color:#888;" onfocus="inputFocus(this)" onblur="inputBlur(this)" /></td></tr>
				<tr><td><input type="text" name="email" value="{NewsLetterEmail}" style="width:100%;color:#888;" onfocus="inputFocus(this)" onblur="inputBlur(this)" /></td></tr>
				<tr><td><input type="submit" value="{NewsLetterSubmit}" /></td></tr>
			</table>
			<input type="hidden" name="NewsSubscribe" value="yes"/>
		</form>



			</div>
		</div>	
	</body>
</html>



<br>
