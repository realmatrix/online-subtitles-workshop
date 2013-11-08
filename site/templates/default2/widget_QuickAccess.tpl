<style>
	.QuickAccessSelect{
		width: 100%;
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

	


		<div id="QuickAccess" style="width: 99%;">

		
			{Videos}
			
			<form method="get" action="index.php">
			<select class="QuickAccessSelect" name="vid" onchange="this.form.submit()">
			<option value="">select video to open</option>
			{CVideos}
			</select>
			<input type="hidden" name="page" value="video" />
			<input type="hidden" name="sec" value="view" />
			</form>		  


			{Subtitles}
			
			<form method="get" action="index.php">
			<select  class="QuickAccessSelect" name="sid" onchange="this.form.submit()">
			<option value="">select subtitle to open</option>
			{CSubtitles}
			</select>
			<input type="hidden" name="page" value="subtitle" />
			<input type="hidden" name="sec" value="edit" />
			</form>


			{ManageSubtitles}
			
			<form method="get" action="index.php">
			<select  class="QuickAccessSelect" name="sid" onchange="this.form.submit()">
			<option value="">select subtitle to open</option>
			{CMSubtitles}
			</select>
			<input type="hidden" name="page" value="subtitle" />
			<input type="hidden" name="sec" value="manage" />
			</form>
						

			{TeamSubtitles}
			
			<form method="get" action="index.php">
			<select class="QuickAccessSelect" name="sid" onchange="this.form.submit()">
			<option value="">select subtitle to open</option>
			</select>
			<input type="hidden" name="page" value="" />
			<input type="hidden" name="sec" value="" />
			</form>
		

			{FavouriteVideos}
			
			<form method="get" action="index.php">
			<select class="QuickAccessSelect" name="vid" onchange="this.form.submit()">
			<option value="">select video to open</option>
			</select>
			<input type="hidden" name="page" value="" />
			<input type="hidden" name="sec" value="" />
			</form>			


		</div>	
	
	
	
	
	
	</SPAN></TD>
	</TR>
	</TBODY>
	</TABLE>
</DIV></div>


<br>












