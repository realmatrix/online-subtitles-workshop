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

<div class="row">
	<div class="col-lg-13">

<div class="panel panel-default panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">{title}</div>

  <!-- Table -->
<!-- user subtitles -->
<form method="post" action="index.php">
	<table class="table table-usersubtitles table-striped table-hover">

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
	</div>

	<button class="btn btn-primary">{delete}</button>
	<!-- <input type="hidden" name="dataonly" value="yes"/> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getcontroller" value="subtitle"/> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getsection" value="UserSubtitles"/> --> <!-- uncomment if using ajax -->
	<input type="hidden" name="page" value="subtitle" /> <!-- comment if using ajax -->
	<input type="hidden" name="sec" value="list" /> <!-- comment if using ajax -->
	<input type="hidden" name="ssec" value="UserSubtitles"/>
	<input type="hidden" name="h" value="DeleteSubtitles"/>
</form>
<!-- end user subtitles -->	
		
	</div>
</div>

