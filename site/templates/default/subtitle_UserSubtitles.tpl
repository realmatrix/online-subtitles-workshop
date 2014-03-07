<style>
	.table-usersubtitles td:nth-child(1){
		text-align: center;
	}
	.table-usersubtitles td:nth-child(2){
		text-align: left;
	}
	.table-usersubtitles td:nth-child(3){
		text-align: center;
	}
	.table-usersubtitles td:nth-child(4){
		text-align: center;
	}
	.table-usersubtitles td:nth-child(5){
		text-align: center;
	}
	.table-usersubtitles td:nth-child(6){
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



<!-- user subtitles -->
<div id="usersubtitles" style="width: 99%;">
<form method="post" action="index.php">
	<table class="table-usersubtitles" style="width: 100%;">

		<thead>
			<th style="text-align: center;">{del}</th>
			<th style="text-align: left;">{releasename}</th>
			<th style="text-align: center;">{version}</th>
			<th style="text-align: center;">{language}</th>
			<th style="text-align: center;">{manage}</th>
			<th style="text-align: center;">{edit}</th>
		</thead>
		{tablerows}
	</table>
<br />
	<input type="submit" value="{delete}"/>
	<!-- <input type="hidden" name="dataonly" value="yes"/> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getcontroller" value="subtitle"/> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getsection" value="UserSubtitles"/> --> <!-- uncomment if using ajax -->
	<input type="hidden" name="page" value="subtitle" /> <!-- comment if using ajax -->
	<input type="hidden" name="sec" value="list" /> <!-- comment if using ajax -->
	<input type="hidden" name="ssec" value="UserSubtitles"/>
	<input type="hidden" name="h" value="DeleteSubtitles"/>
</form>
</div>
<!-- end user subtitles -->	



	</SPAN></TD>
	</TR>
	</TBODY>
	</TABLE>
</DIV></div>

<br>