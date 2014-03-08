<div class="row">
	<div class="col-md-11">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Login</h3>
		  </div>
		  <div class="panel-body">

<!-- login form -->
<div class="login-container">		
						<div id="login"> <!-- keep login form inside div with id="login" -->
						<form method="post" action="index.php">

<div class="form-group">
<div class="col-lg-13">
<input type="text" class="form-control" id="login-username" name="username" placeholder="{LoginUsername}" />
</div>
</div>

<div class="form-group">
<div class="col-lg-13">
<input type="password" class="form-control" id="login-password" name="password" placeholder="{LoginPassword}" />
</div>
</div>

<div class="btn-toolbar">
<a href="?page=user&sec=register" class="btn btn-primary pull-right">{LoginOrRegister}</a> 
<button type="submit" class="btn btn-primary pull-right">{LoginSubmit}</button>
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

