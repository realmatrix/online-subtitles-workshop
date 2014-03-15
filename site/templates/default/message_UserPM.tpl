<div class="row">
	<div class="col-lg-13">

<form method="post" action="index.php">	
		<div class="panel panel-default panel-primary">
		  <!-- Default panel contents -->
		  <div class="panel-heading">{title}</div>
		
			<table class="table table-usersubtitles table-striped table-hover">
		
				<thead>
					<th>#</th>
					<th>{subject}</th>
					<th>{from}</th>
					<th>{date}</th>
					<th>{del}</th>
				</thead>
					{TableRows}
			</table>

		</div>

<button type="submit" class="btn btn-primary pull-left">{submit}</button>

	<input type="hidden" name="page" value="message" />
	<input type="hidden" name="sec" value="list" />
	<input type="hidden" name="ssec" value="UserPM" />
	<input type="hidden" name="h" value="DelMsg" />
	
</form>

	</div>
</div>



