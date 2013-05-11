<!--
{widget_shoutbox}
-->

	<!-- start right col -->	
	<div id="right-col">


<!-- login form -->
		<div id="loginbox">
			<ul>
				<li><a href="#tabs-1">Login</a></li>
			</ul>
			<div id="tabs-1">
						<div id="login"> <!-- keep login form inside div with id="login" -->
						<form method="post" action="index.php">
							<table cellspacing="0" cellpadding="1">
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

<br>

<!-- shout box widget -->
		<div id="ShoutBox">
			<ul>
				<li><a href="#tabs-1">Shout Box</a></li>
			</ul>
			<div id="tabs-1">
				{widget_shoutbox}
			</div>
		</div>
<!-- end shout box widget -->

	
	</div>
	<!-- end right col -->
	
</div>


<div style="clear:both;"></div>
<div style="clear:both;"></div>
</center>