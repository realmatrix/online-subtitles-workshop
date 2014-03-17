<style>
	#submitnewsubtitle input[type=text], input[type=file]{
		width: 100%;
		margin: 5px;
	}
	#submitnewsubtitle textarea{
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


<div class="row">
	<div class="col-md-13">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">{AddSubtitle}</h3>
		  </div>
		  <div class="panel-body">
		  	
<!-- add subtitle -->
<!-- add subtitle form -->
<div id="div-submitnewsubtitle">
	
<form class="well-sm" name="submitnewsubtitle" id="submitnewsubtitle" method="post" action="index.php">
	
	<!--
	<label>{Video}</label>
	{VideoTitle}
	-->
	
	<label for="ReleaseName">{ReleaseName}</label>
	<input class="form-control" type="text" name="ReleaseName" />
	
	<label for="version">{Version}</label>
	<input class="form-control" type="text" name="version" />
	
	<label for="Country">{Country}</label>
	<select class="form-control" name="Country"><option></option>{SubtitleCountry}</select>
	
	<label for="Language">{Language}</label>
	<select class="form-control" name="Language"><option></option>{SubtitleLanguages}</select>
	
	<label for="format">{Format}</label>
	<select class="form-control" name="format"><option></option>{SubtitleFormats}</select>
	
	<label for="cds">{NoCDs}</label>
	<select class="form-control" name="cds"><option></option>{SubtitleCDS}</select>

	<br />

	<label>{Fps}</label>	
	<select name="fpssec"><option></option>{SubtitleFPSsec}</select>
	<select name="fpsmilsec"><option></option>{SubtitleFPSmilsec}</select>
	
	<br /><br />

	<div class="col-md-13 text-center">
		<button type="submit" class="btn btn-primary">{submit}</button>	
	</div>	
	
	
	<input type="hidden" name="vid" value="{vid}" />
	<input type="hidden" name="page" value="video" />
	<input type="hidden" name="sec" value="view" />
	<input type="hidden" name="ssec" value="AddSubtitle"/>
	<input type="hidden" name="h" value="SubmitSubtitle"/>
</form>

</div>
<!-- end add subtitle form -->		
<!-- add subtitle end -->

		  </div>
		</div>
	</div>
</div>
{RefreshSubtitles}

