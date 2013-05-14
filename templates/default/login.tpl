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
	<div>{SystemError} <!-- required to show error messages --></div>
<div id="login"> <!-- keep the login form inside div with id="login" -->
	<div class="wrapper">	
		<form class="form1" action="index.php" method="post">

			<div class="formtitle">Login to your account</div>

			<div class="input">
				<div class="inputtext">{LoginUsername}: </div>
				<div class="inputcontent">

					<input type="text" name="username"/>

				</div>
			</div>

			<div class="input nobottomborder">
				<div class="inputtext">{LoginPassword}: </div>
				<div class="inputcontent">

					<input type="password" name="password"/>
					<br/><a href="#">Forgot password?</a>

				</div>
			</div>

			<div class="buttons">

				<input class="orangebutton" type="submit" value="{LoginSubmit}" />

				<input class="greybutton" type="submit" value="Cancel" />

			</div>
			<input type="hidden" name="login" value="yes" />
			<input type="hidden" name="page" value="login" />
		</form>


	</div>	


</div>
{SystemSuccess}	<!-- required to show success messages keep under the registration form -->
</body>
</html>