<style>
	#submitnewsubtitle input[type=text], input[type=file]{
		width: 100%;
		margin: 5px;
	}
	#submitnewsubtitle textarea{
		width: 100%;
	}
</style>
<div>
<DIV class="catglow" style="width:100%;">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	{AddSubtitle}                
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
    	
    	


<!-- add subtitle form -->
<div id="div-submitnewsubtitle">
	
<form name="submitnewsubtitle" id="submitnewsubtitle" method="post" action="index.php">
<table style="width: 100%;">
	<tr>
		<td style="width: 20%;">{ReleaseName}</td>
		<td style="width: 80%;"><input type="text" name="ReleaseName" /></td>
	</tr>
	<tr>
		<td>{Version}</td>
		<td>
			<input type="text" name="version" />
		</td>
	</tr>
	<tr>
		<td>{Country}</td>
		<td>
			<select name="Country">
				<option></option>
				{SubtitleCountry}
			</select>
		</td>
	</tr>
	<tr>
		<td>{Language}</td>
		<td>
			<select name="Language">
				<option></option>
				{SubtitleLanguages}
			</select>
		</td>
	</tr>
	<tr>
		<td>{Fps}</td>
		<td>
			<select name="fpssec">
				<option></option>
				{SubtitleFPSsec}
			</select>
			<select name="fpsmilsec">
				<option></option>
				{SubtitleFPSmilsec}
			</select>
		</td>
	</tr>
	<tr>
		<td>{Format}</td>
		<td>
			<select name="format">
				<option></option>
				{SubtitleFormats}
			</select>
		</td>
	</tr>
	<tr>
		<td>{NoCDs}</td>
		<td>
			<select name="cds">
				<option></option>
				{SubtitleCDS}
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;">
			<input type="submit" value="{submit}" />
		</td>
	</tr>	
</table>
	<input type="hidden" name="vid" value="{vid}" />
	<!-- <input type="hidden" name="dataonly" value="yes"/> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getcontroller" value="subtitle"/> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getsection" value="Addsubtitle"/> --> <!-- uncomment if using ajax -->
	<input type="hidden" name="page" value="subtitle" /> <!-- comment if using ajax -->
	<input type="hidden" name="sec" value="add" /> <!-- comment if using ajax -->
	<input type="hidden" name="ssec" value="Addsubtitle"/>
	<input type="hidden" name="h" value="SubmitSubtitle"/>
</form>

</div>
<!-- end add subtitle form -->		


   	 
    </TD>
	</TR>
	</TBODY>
	</TABLE>
	</DIV></div>
{RefreshSubtitles}
</div>
<br />


























