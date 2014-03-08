<style>
	.login-container input{
		margin-bottom: 2px;
	}
</style>

<div class="row">
	<div class="col-md-11">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Manage Account</h3>
		  </div>
		  <div class="panel-body">

<!-- login form -->
<div class="login-container" style="width: 97%;">		
						<div id="login"> <!-- keep login form inside div with id="login" -->
						<form method="post" action="index.php">

						<label for="username" style="width: 100%;">{LoginUsername}</label>
						<input type="text" name="username" style="width:100%;"/>
						<label for="password" style="width: 100%;">{LoginPassword}</label>
						<input type="password" name="password" style="width:100%;"/>
						<div style="width: 100%; text-align: right;">
						<input type="submit" value="{LoginSubmit}" class="SubmitButton"/>
						<a href="?page=user&sec=register">{LoginOrRegister}</a>
						</div>
							<input type="hidden" name="page" value="user">
							<input type="hidden" name="sec" value="login">
							<input type="hidden" name="ssec" value="UserLogin">
							<input type="hidden" name="h" value="login">
						</form>
						</div>
</div>		
<!-- end login form -->		   	 

		  </div>
		</div>
	</div>
</div>













	

