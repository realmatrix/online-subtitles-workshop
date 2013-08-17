<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  {SystemHeader}
  <title>{SiteName}</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="{TemplatePath}/files/css/style2.css" type="text/css" />
</head>
<body>
{SystemError}	<!-- required to show error messages -->
<div id="register"> <!-- keep the registration form inside div with id="register" -->
	<div class="wrapper">


		<form class="form2" action="index.php" method="post">

			<div class="formtitle">Register</div>

			<div class="input">
				<div class="inputtext">{username}: </div>
				<div class="inputcontent">

					<input type="text" name="username"/>

				</div>
			</div>

			<div class="input">
				<div class="inputtext">{password}: </div>
				<div class="inputcontent">

					<input type="password" name="password"/>

				</div>
			</div>

			<div class="input">
				<div class="inputtext">{password2}: </div>
				<div class="inputcontent">

					<input type="password" name="password2"/>

				</div>
			</div>

			<div class="input">
				<div class="inputtext">{email}: </div>
				<div class="inputcontent">

					<input type="text" name="email"/>

				</div>
			</div>

			<div class="inputtextbox nobottomborder">
				<div class="inputtext">{birthyear}: </div>
				<div class="inputcontent">

					<select name="birth" style="width:210px;">{birthselect}</select>

				</div>
			</div>

			<div class="buttons">

				<input class="orangebutton" type="submit" value="{submit}" />

			</div>
		<input type="hidden" name="register" value="yes" />
		<input type="hidden" name="page" value="register" />
		</form>

	</div>	
</div>
{SystemSuccess}	<!-- required to show success messages keep under the registration form -->
</body>
</html>

