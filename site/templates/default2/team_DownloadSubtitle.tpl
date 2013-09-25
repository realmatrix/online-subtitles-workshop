<style>
	.radiodl{
		height: 15px;
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



<!-- editor controls -->
<div id="editorcontrols" style="width: 99%;">


	<form method="post" action="index.php">
			<label><input class="radiodl" type="radio" name="type" value="0" checked="">download original subtitle file </label><br />
			<label><input class="radiodl" type="radio" name="type" value="1" checked="checked">download my lines only </label><br />
			<label><input class="radiodl" type="radio" name="type" value="2">download my lines and latest edited </label><br />
			<label><input class="radiodl" type="radio" name="type" value="3">download checked lines </label><br />
			<div style="width: 100%; text-align: center;"><input type="submit" value="Download" /></div>
			
	<input type="hidden" name="sid" value="{sid}" />		
	<input type="hidden" name="cid" value="{cid}" />
	<input type="hidden" name="dl" value="yes" />
	<!-- <input type="hidden" name="dataonly" value="yes" /> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getcontroller" value="subtitle" /> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getsection" value="DownloadSubtitle" /> --> <!-- uncomment if using ajax -->
	<input type="hidden" name="page" value="subtitle" /> <!-- comment if using ajax -->
	<input type="hidden" name="sec" value="edit" /> <!-- comment if using ajax -->
	<input type="hidden" name="ssec" value="DownloadSubtitle" />
	<input type="hidden" name="h" value="DlSubtitle" />
	</form>


</div>
<!-- end editor controls -->	



	</SPAN></TD>
	</TR>
	</TBODY>
	</TABLE>
</DIV></div>

<br>