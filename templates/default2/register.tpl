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





















<form method="post" action="{S_UCP_ACTION}" id="register">

<div class="panel">
	<div class="inner"><span class="corners-top"><span></span></span>

	<h2>{SITENAME} - {L_REGISTRATION}</h2>

	<fieldset class="fields2">
	<!-- IF ERROR --><dl><dd class="error">{ERROR}</dd></dl><!-- ENDIF -->
	<!-- IF L_REG_COND -->
		<dl><dd><strong>{L_REG_COND}</strong></dd></dl>
	<!-- ENDIF -->
	<dl>
		<dt><label for="username">{L_USERNAME}:</label><br /><span>{L_USERNAME_EXPLAIN}</span></dt>
		<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="{USERNAME}" class="inputbox autowidth" title="{L_USERNAME}" /></dd>
	</dl>
	<dl>
		<dt><label for="email">{L_EMAIL_ADDRESS}:</label></dt>
		<dd><input type="text" tabindex="2" name="email" id="email" size="25" maxlength="100" value="{EMAIL}" class="inputbox autowidth" title="{L_EMAIL_ADDRESS}" /></dd>
	</dl>
	<dl>
		<dt><label for="email_confirm">{L_CONFIRM_EMAIL}:</label></dt>
		<dd><input type="text" tabindex="3" name="email_confirm" id="email_confirm" size="25" maxlength="100" value="{EMAIL_CONFIRM}" class="inputbox autowidth" title="{L_CONFIRM_EMAIL}" /></dd>
	</dl>
	<dl>
		<dt><label for="new_password">{L_PASSWORD}:</label><br /><span>{L_PASSWORD_EXPLAIN}</span></dt>
		<dd><input type="password" tabindex="4" name="new_password" id="new_password" size="25" value="{PASSWORD}" class="inputbox autowidth" title="{L_NEW_PASSWORD}" /></dd>
	</dl>
	<dl>
		<dt><label for="password_confirm">{L_CONFIRM_PASSWORD}:</label></dt>
		<dd><input type="password" tabindex="5" name="password_confirm" id="password_confirm" size="25" value="{PASSWORD_CONFIRM}" class="inputbox autowidth" title="{L_CONFIRM_PASSWORD}" /></dd>
	</dl>

	<hr />

	<dl>
		<dt><label for="lang">{L_LANGUAGE}:</label></dt>
		<dd><select name="lang" id="lang" onchange="change_language(this.value); return false;" tabindex="6" title="{L_LANGUAGE}">{S_LANG_OPTIONS}</select></dd>
	</dl>
	<dl>
		<dt><label for="tz">{L_TIMEZONE}:</label></dt>
		<dd><select name="tz" id="tz" tabindex="7" class="autowidth">{S_TZ_OPTIONS}</select></dd>
	</dl>

	<!-- IF .profile_fields -->
		<dl><dd><strong>{L_ITEMS_REQUIRED}</strong></dd></dl>

	<!-- BEGIN profile_fields -->
		<dl>
			<dt><label<!-- IF profile_fields.FIELD_ID --> for="{profile_fields.FIELD_ID}"<!-- ENDIF -->>{profile_fields.LANG_NAME}:<!-- IF profile_fields.S_REQUIRED --> *<!-- ENDIF --></label>
			<!-- IF profile_fields.LANG_EXPLAIN --><br /><span>{profile_fields.LANG_EXPLAIN}</span><!-- ENDIF -->
			<!-- IF profile_fields.ERROR --><br /><span class="error">{profile_fields.ERROR}</span><!-- ENDIF --></dt>
			<dd>{profile_fields.FIELD}</dd>
		</dl>
	<!-- END profile_fields -->
	<!-- ENDIF -->

	</fieldset>
	<span class="corners-bottom"><span></span></span></div>
</div>
<!-- IF CAPTCHA_TEMPLATE -->
	<!-- DEFINE $CAPTCHA_TAB_INDEX = 8 -->
	<!-- INCLUDE {CAPTCHA_TEMPLATE} -->
<!-- ENDIF -->

<!-- IF S_COPPA -->


<div class="panel">
	<div class="inner"><span class="corners-top"><span></span></span>

	<h4>{L_COPPA_COMPLIANCE}</h4>

	<p>{L_COPPA_EXPLAIN}</p>
	<span class="corners-bottom"><span></span></span></div>
</div>
<!-- ENDIF -->

<div class="panel">
	<div class="inner"><span class="corners-top"><span></span></span>

	<fieldset class="submit-buttons">
		{S_HIDDEN_FIELDS}
		<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp;
		<input type="submit" tabindex="9" name="submit" id="submit" value="{L_SUBMIT}" class="button1 default-submit-action" />
		{S_FORM_TOKEN}
	</fieldset>

	<span class="corners-bottom"><span></span></span></div>
</div>
</form>