						<div id="login"> <!-- keep login form inside div with id="login" -->
						<form method="post" action="index.php">
							<table cellspacing="0" cellpadding="1" style="width:100%;">
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