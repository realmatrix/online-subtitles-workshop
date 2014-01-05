<style>
.subtitleline-checked{
	background-color: green;
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



<!-- check subtitle -->
<div id="aboutus" style="width: 99%;">


			<form method="get" action="index.php">
			Subtitle Line <select  class="CheckSubtitleSelect" name="lid" onchange="this.form.submit()">
			<option value="">select line to check</option>
			{CheckSubtitleLines}
			</select>
			<input type="hidden" name="page" value="{page}" />
			<input type="hidden" name="sec" value="{sec}" />
			<input type="hidden" name="sid" value="{sid}" />
			<input type="hidden" name="cid" value="{cid}" />
			</form>
			
<div>original line:</div> <div>{OriginalLine}</div>

			
			<form method="get" action="index.php">
			{LineChoices}
			
			<input type="submit" value="check" />
			<input type="hidden" name="page" value="{page}" />
			<input type="hidden" name="sec" value="{sec}" />
			<input type="hidden" name="sid" value="{sid}" />
			<input type="hidden" name="cid" value="{cid}" />
			<input type="hidden" name="lid" value="{lid}" />
			<input type="hidden" name="ssec" value="CheckSubtitle" />
			<input type="hidden" name="h" value="select" />
			</form>


</div>
<!-- end check subtitle -->	



	</SPAN></TD>
	</TR>
	</TBODY>
	</TABLE>
</DIV></div>

<br>