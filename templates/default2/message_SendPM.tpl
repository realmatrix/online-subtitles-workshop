<style>
	.row{
		width: 100%;
		margin-bottom: 10px;
	}
	.pm-label{
		width: 100%;
	}
	.pm-text{
		width: 100%;
	}
	.pm-textarea{
		width: 99%;
		height: 100px;
	}
	.pm-submit{
		width: 100%;
		text-align: center;
	}
</style>

<DIV class="catglow">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	{title}                
</DIV>
</DIV>
</DIV>
<DIV class="trigger active">
</DIV>
<DIV class="collapsethis">
<TABLE class="cat" cellSpacing="0" cellPadding="0" width="100%">
  <TBODY>
  <TR>
    <TD class="forumdetails"><SPAN class="forum-descriptions">



<!-- Send PM-->
<div id="editorcontrols" style="width: 99%;">


	<form>
		<div class="row">
		<label for="to" class="pm-label">{to}</label>
		<input type="text" name="to"  class="pm-text" />
		</div>
		<div class="row">
		<label for="subject" class="pm-label">{subject}</label>
		<input type="text" name="subject"  class="pm-text" />
		</div>
		<div class="row">
		<label for="message" class="pm-label">{message}</label>
		<textarea name="message" class="pm-textarea"></textarea>
		</div>
		<div class="row">
		<div class="pm-submit"><input type="submit" value="{submit}" /></div>
		</div>	
			<!-- <input type="hidden" name="dataonly" value="yes" /> --> <!-- uncomment if using ajax -->
			<!-- <input type="hidden" name="getcontroller" value="message" /> --> <!-- uncomment if using ajax -->
			<!-- <input type="hidden" name="getsection" value="SendPM" /> --> <!-- uncomment if using ajax -->
			<input type="hidden" name="page" value="message" /> <!-- comment if using ajax -->
			<input type="hidden" name="sec" value="umsg" /> <!-- comment if using ajax -->
			<input type="hidden" name="ssec" value="SendPM" />
			<input type="hidden" name="h" value="SendMessage" />
	</form>


</div>
<!-- end Send PM -->	



	</SPAN></TD>
	</TR>
	</TBODY>
	</TABLE>
</DIV></div>

<br>