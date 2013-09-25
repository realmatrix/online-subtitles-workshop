<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
{SystemHeader}
  <title>{SiteName}</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Box HTML Code - www.PSDGraphics.com</title>
<link href="{TemplatePath}/files/login/login-box.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div>{SystemError} <!-- required to show error messages --></div>
<div style="padding: 100px 0 0 250px;">
<div id="login"> <!-- keep the login form inside div with id="login" -->
<div id="login-box">
<H2>Login</H2>
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
<br />
<br />
<form id="loginform" method="post" action="index.php">
<div id="login-box-name" style="margin-top:20px;">{LoginUsername}:</div><div id="login-box-field" style="margin-top:20px;"><input name="username" class="form-login" title="Username" value="" size="30" maxlength="2048" /></div>
<div id="login-box-name">{LoginPassword}:</div><div id="login-box-field"><input name="password" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></div>
<br />
<span class="login-box-options"><input type="checkbox" name="1" value="1"> Remember Me <a href="#" style="margin-left:30px;">Forgot password?</a></span>
<br />
<br />
<a href="javascript:{}" onclick="document.getElementById('loginform').submit(); return false;"><img src="{TemplatePath}/files/login/images/login-btn.png" width="103" height="42" style="margin-left:90px;" /></a>
<input type="hidden" name="login" value="yes" />
<input type="hidden" name="page" value="login" />
</form>
</div>
</div>
</div>
{SystemSuccess}	<!-- required to show success messages keep under the registration form -->
</body>
</html>
