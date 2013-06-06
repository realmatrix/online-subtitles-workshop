<style>
	#submitnewvideo input[type=text], input[type=file]{
		width:100%;
		margin:5px;
	}
</style>
<br /><br />
<div>
<DIV class="catglow" style="width:90%; margin: 0 auto;">
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
    <TD class="forumdetails">
    	
    	


<!-- add video form -->
<form name="submitnewvideo" id="submitnewvideo" method="post" action="index.php">
	<label for="VideoType" id="label-VideoType">ADD A NEW</label>
	<select name="VideoType" id="VideoType">
		<option></option>
		{VideoType}
	</select>
	<label for="VideoCategory" id="label-VideoCategory">Category</label>
	<select name="VideoCategory" id="VideoCategory">
		<option></option>
		{VideoCategory}
	</select>
	<label for="VideoLanguage" id="label-VideoLanguage">Language</label>
	<select name="VideoLanguage" id="VideoLanguage">
		<option></option>
		{VideoLanguage}
	</select>
	<br />
	<label for="VideoTitle" id="label-VideoTitle">Video Title</label>
	<input type="text" name="VideoTitle" id="VideoTitle" value=""/>
	<br />
	<label for="ThumbnailImage" id="label-VideoImage">Thumbnail Image</label>
	<input type="file" name="ThumbnailImage"/>
	<br />
	<label for="LargeImage" id="label-VideoImage">Large Image</label>
	<input type="file" name="LargeImage"/>
	<br />	
	<div style="width:100%; text-align: center;">
		<input type="submit" id="forum-submit" value="submit" onclick="$.post('server.php', $('#submitnewvideo').serialize())"/>
	</div>
	<input type="hidden" name="dataonly" id="dataonly" value="yes"/>
	<input type="hidden" name="getcontroller" id="getcontroller" value="video"/>
	<input type="hidden" name="getsection" id="getsection" value="AddVideo"/>
	<input type="hidden" name="ssec" id="ssec" value="AddVideo"/>
	<input type="hidden" name="h" id="h" value="SubmitVideo"/>
</form>
<!-- end add video form -->		


   	 
    </TD>
	</TR>
	</TBODY>
	</TABLE>
	</DIV></div>
</div>
<br /><br />




























