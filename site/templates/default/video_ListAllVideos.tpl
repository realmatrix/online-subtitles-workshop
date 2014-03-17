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

<div class="row col-lg-13 text-center">
	<ul class="pagination">
	  <li><a href="index.php?page=video&sec=archive&a=">ALL</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=a">A</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=b">B</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=c">C</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=d">D</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=e">E</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=f">F</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=g">G</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=h">H</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=i">I</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=j">J</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=k">K</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=l">L</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=m">M</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=n">N</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=o">O</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=p">P</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=q">Q</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=r">R</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=s">S</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=t">T</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=u">U</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=v">V</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=w">W</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=x">X</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=y">Y</a></li>
	  <li><a href="index.php?page=video&sec=archive&a=z">Z</a></li>
	</ul>
</div>


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