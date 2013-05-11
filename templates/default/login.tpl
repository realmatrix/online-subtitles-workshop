<html>
<head>
<title>{SiteName}</title>
{SystemHeader}
</head>
<body>

{SystemError}	<!-- required to show error messages -->

<div id="login"> <!-- keep login form inside div with id="login" -->
<form method="post" action="index.php">
{LoginUsername}<input type="text" name="username" />
{LoginPassword}<input type="password" name="password" />
<input type="submit" value="{LoginSubmit}" />
<input type="hidden" name="login" value="yes" />
<input type="hidden" name="page" value="login" />
</form>
</div>

{SystemSuccess}	<!-- required to show success messages keep under the registration form -->

</body>
</html>