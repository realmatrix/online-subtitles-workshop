<style>
	.login-container input{
		margin-bottom: 2px;
	}
</style>
<DIV class="catglow">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	Login                
</DIV>
</DIV>
</DIV>
<DIV class="trigger active">
</DIV>
<DIV class="collapsethis">
<TABLE class="cat" cellSpacing="0" cellPadding="0" width="100%">
  <TBODY>
  <TR>
    <TD class="forumdetails">
    	
    	


<!-- login form -->
<div class="login-container" style="width: 97%;">		
						<div id="login"> <!-- keep login form inside div with id="login" -->
						<form method="post" action="index.php">

						<label for="username" style="width: 100%;">{LoginUsername}</label>
						<input type="text" name="username" style="width:100%;"/>
						<label for="password" style="width: 100%;">{LoginPassword}</label>
						<input type="password" name="password" style="width:100%;"/>

						<input type="submit" value="{LoginSubmit}" class="SubmitButton"/>
						<input type="hidden" name="login" value="yes" />
						<input type="hidden" name="page" value="login" />
						<a href="?page=register">{LoginOrRegister}</a>
				
						</form>
						</div>
</div>		
<!-- end login form -->		   	 
    </TD>
	</TR>
	</TBODY>
	</TABLE>
	</DIV></div>

<br>














	

