<html>
<head>
<title>{SiteName}</title>
{SystemHeader}
</head>
<body>

{SystemError}	<!-- required to show error messages -->

<div id="register"> <!-- keep the registration form inside div with id="register" -->
<form method="post" action="index.php">
{username}<input type="text" name="username" />
{password}<input type="password" name="password" />
{password2}<input type="password" name="password2" />
{email}<input type="text" name="email" />
{birthyear}<select name="birth">{birthselect}</select>
<input type="submit" value="{submit}" />
<input type="hidden" name="register" value="yes" />
<input type="hidden" name="page" value="register" />
</form>
</div>

{SystemSuccess}	<!-- required to show success messages keep under the registration form -->

</body>
</html>