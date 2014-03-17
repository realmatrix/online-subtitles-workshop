<style>
	#searchtitle {width: 100%;}
	.field {text-align: center;}
</style>

<div class="container">
<div class="row">
	<div class="col-md-13">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">{title}</h3>
		  </div>
		  <div class="panel-body">
		  	
<!-- video search --->

<!-- video search end -->		  
	
		  </div>
		</div>
	</div>
</div>
</div>




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





<div style="width: 99%;">
<!-- advanced search form -->
<table style="width: 99%;">
	<form id="advancedsearch" action="index.php" method="post">
		<tr><td style="width: 100%;">
		<label for="VideoTitle">{VideoTitle}</label>
		<input type="text" name="VideoTitle" id="searchtitle" value="{vthistory}"/>
		</td></tr>
		<tr><td>
		<select name="language">
			<option>{Language}</option>
			{SearchLanguage}
		</select>
		<select name="category">
			<option>{Category}</option>
			{SearchCategory}
		</select>
		<select name="genre">
			<option>{Genre}</option>
			{SearchGenre}
		</select>
		<select name="country">
			<option>{Country}</option>
			{SearchCountry}
		</select>
		<select name="year">
			<option>{Year}</option>
			{SearchYear}
		</select>
		<select name="status">
			<option>{Status}</option>
			{SearchStatus}
		</select>
		</td></tr>
		<tr><td style="text-align: center;">
			<input type="reset" value="{reset}"/>
			<input type="submit" value="{submit}" />
		</td></tr>	
	<!-- <input type="hidden" name="dataonly" value="yes" /> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getcontroller" value="search" /> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getsection" value="AdvancedSearch" /> --> <!-- uncomment if using ajax -->
	<input type="hidden" name="page" value="search" /> <!-- comment if using ajax -->
	<input type="hidden" name="sec" value="advanced" /> <!-- comment if using ajax -->
	<input type="hidden" name="ssec" value="SearchResults" />
	<input type="hidden" name="h" value="search" />
		</form>
</table>
<!-- end advanced search form -->	
</div>





	</SPAN></TD>
	</TR>
	</TBODY>
	</TABLE>
</DIV></div>

<br>