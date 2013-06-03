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
				

						<div id="login"> <!-- keep login form inside div with id="login" -->
						<form method="post" action="index.php">
							<table cellspacing="0" cellpadding="1" style="width:100%;">
								<tr>
						<td><p>{LoginUsername}</p></td><td><input type="text" name="username" style="width:100%;"/></td>
						</tr><tr>
						<td><p>{LoginPassword}</p></td><td><input type="password" name="password" style="width:100%;"/></td>
						</tr><tr>
							<td></td>
							<td>
						<input type="submit" value="{LoginSubmit}" class="SubmitButton"/>
						<input type="hidden" name="login" value="yes" />
						<input type="hidden" name="page" value="login" />
						<a href="?page=register">{LoginOrRegister}</a>
						</td>
						</tr>
						</table>
						</form>
						</div>
				
				
			</div>
		</div>
<!-- end login form -->		
	</body>
</html>



<br>