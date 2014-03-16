<style type="text/css">
	.video-archive td:nth-child(1){
		text-align: center;
	}
	.video-archive td:nth-child(2){
		text-align: left;
	}
	.video-archive td:nth-child(3){
		text-align: center;
	}
	.video-archive td:nth-child(4){
		text-align: center;
	}
</style>

<div class="container">
<div class="row">
	<div class="col-lg-12">

<div class="panel panel-default panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">{title}</div>

  <!-- Table -->
<!-- video list -->

	<table class="table table-usersubtitles table-striped table-hover video-archive">

		<thead>
			<th class="text-center">#</th>
			<th class="text-left col-md-10">Title</th>
			<th class="text-center">Views</th>
			<th class="text-center">Subtitles</th>
		</thead>
		{TableRows}
	</table>
</div>

<div class="col-lg-13 text-center">
    <ul class="pagination">
    	{pagination}
    </ul>
</div>

<!-- end video list -->	
	</div>
</div>
</div>

<br />