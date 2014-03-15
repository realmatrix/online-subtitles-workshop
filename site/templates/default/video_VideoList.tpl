<style type="text/css">
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
<!-- video list -->

	<table class="table table-usersubtitles table-striped table-hover">

		<thead>
			<th class="text-center">#</th>
			<th class="text-left">Title</th>
			<th class="text-center">Views</th>
			<th class="text-center">Subtitle</th>
			<th class="text-center">Edit</th>
		</thead>
		{TableRows}
	</table>
</div>

<button type="submit" class="btn btn-primary pull-left" onclick="window.location = 'index.php?page=video&sec=add';">Add Video</button> 

<!-- end video list -->	
	</div>
</div>



