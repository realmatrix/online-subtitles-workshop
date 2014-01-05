<style>
.subtitleline-checked{
	background-color: green;
}
.checksubtitle-row{
	width: 100%;
	clear: left;
}
.checksubtitle-row div{
	float: left;
	border-width: 1px;
	border-style: solid;
	border-color: #DFE8EE;
	height: 32px;
	vertical-align: middle;
	display: table-cell;
	line-height: inherit;
	padding-left: 2px;
	padding-right: 2px;
	margin-bottom: 2px;
}
.checksubtitle-left{
	width: 28%;
	margin-right: 2px;
	font-weight: bold;
	background-color: #F5FBFE;
}
.checksubtitle-right{
	width: 70%;
}
.checksubtitle-singlecell{
	width: 99%;
}
.checksubtitle-singlecell2{
	width: 99%;
	font-weight: bold;
	background-color: #F5FBFE;
	clear: left;
}
.checksubtitle-options{
	width: 99%;
	clear: left;
	border-width: 1px;
	border-style: solid;
	border-color: #DFE8EE;
	padding-left: 2px;
	padding-right: 2px;
	margin-bottom: 2px;
	margin-top: 2px;
	height: 32px;
}
.checksubtitle-radio-label{
	float: left;
}
.checksubtitle-radio{
	float:left
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
<div id="aboutus" style="width: 100%;">

<div class="checksubtitle-row">
<div class="checksubtitle-singlecell">
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
</div>
</div>

<div class="checksubtitle-row">
	<div class="checksubtitle-left">line number:</div> 
	<div class="checksubtitle-right">{linenumber}</div>
</div>
			
<div class="checksubtitle-row">
	<div class="checksubtitle-left">original text:</div> 
	<div class="checksubtitle-right">{OriginalLine}</div>
</div>

<div class="checksubtitle-row">
<div class="checksubtitle-singlecell2">
line translations:
</div>
</div>			
			<form method="get" action="index.php">
			{LineChoices}
			<div style="clear:left;"></div>
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