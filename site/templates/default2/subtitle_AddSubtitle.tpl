<style>
	#submitnewsubtitle input[type=text], input[type=file]{
		width: 96%;
		margin: 5px;
	}
	#submitnewsubtitle textarea{
		width: 100%;
	}
	#div-submitnewsubtitle{
		width: 100%;
	}
	.addsubtitle-infocontainer-row{
		width: 100%;
		height: 32px;
		clear: both;
		display: table;
		margin-bottom: 2px;
	}
	
	.addsubtitle-infocontainer-row div{
		border-width: 1px;
		border-style: solid;
		border-color: #DFE8EE;
		height: 32px;
		vertical-align: middle;
		display: table-cell;
		line-height: 32px;
		padding-left: 2px;
		padding-right: 2px;
	}

	.addsubtitle-infocontainer-left{
		float: left;
		width: 23%;
		font-weight: bold;
		background-color: #F5FBFE;
		margin-right: 1px;
	}
	.addsubtitle-infocontainer-right{
		float: right;
		width: 75%;
	}
	.addsubtitle-infocontainer-singlerow{
		text-align: center;
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
	<div class='addsubtitle-infocontainer-row'>
		<div class='addsubtitle-infocontainer-left'>{Video}</div>
		<div class='addsubtitle-infocontainer-right'>{VideoTitle}</div>
	</div>
	<div class='addsubtitle-infocontainer-row'>
		<div class='addsubtitle-infocontainer-left'>{ReleaseName}</div>
		<div class='addsubtitle-infocontainer-right'><input type="text" name="ReleaseName" /></div>
	</div>
	<div class='addsubtitle-infocontainer-row'>
		<div class='addsubtitle-infocontainer-left'>{Version}</div>
		<div class='addsubtitle-infocontainer-right'><input type="text" name="version" /></div>
	</div>	
	<div class='addsubtitle-infocontainer-row'>
		<div class='addsubtitle-infocontainer-left'>{Country}</div>
		<div class='addsubtitle-infocontainer-right'><select name="Country"><option></option>{SubtitleCountry}</select></div>
	</div>
	<div class='addsubtitle-infocontainer-row'>
		<div class='addsubtitle-infocontainer-left'>{Language}</div>
		<div class='addsubtitle-infocontainer-right'><select name="Language"><option></option>{SubtitleLanguages}</select></div>
	</div>
	<div class='addsubtitle-infocontainer-row'>
		<div class='addsubtitle-infocontainer-left'>{Fps}</div>
		<div class='addsubtitle-infocontainer-right'><select name="fpssec"><option></option>{SubtitleFPSsec}</select><select name="fpsmilsec"><option></option>{SubtitleFPSmilsec}</select></div>
	</div>
	<div class='addsubtitle-infocontainer-row'>
		<div class='addsubtitle-infocontainer-left'>{Format}</div>
		<div class='addsubtitle-infocontainer-right'><select name="format"><option></option>{SubtitleFormats}</select></div>
	</div>
	<div class='addsubtitle-infocontainer-row'>
		<div class='addsubtitle-infocontainer-left'>{NoCDs}</div>
		<div class='addsubtitle-infocontainer-right'><select name="cds"><option></option>{SubtitleCDS}</select></div>
	</div>	
	<div class='addsubtitle-infocontainer-row'>
		<div class='addsubtitle-infocontainer-singlerow'><input type="submit" value="{submit}" /></div>
	</div>	

	<input type="hidden" name="vid" value="{vid}" />
	<!-- <input type="hidden" name="dataonly" value="yes"/> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getcontroller" value="subtitle"/> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getsection" value="Addsubtitle"/> --> <!-- uncomment if using ajax -->
	<input type="hidden" name="page" value="video" /> <!-- comment if using ajax -->
	<input type="hidden" name="sec" value="view" /> <!-- comment if using ajax -->
	<input type="hidden" name="ssec" value="AddSubtitle"/>
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


























