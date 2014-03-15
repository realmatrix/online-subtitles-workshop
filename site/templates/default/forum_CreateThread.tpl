<div class="row">
	<div class="col-md-13">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">{title}</h3>
		  </div>
		  <div class="panel-body">


<!-- create thread -->
<div id="editorcontrols">

	<form class="well-sm" method='post' action='index.php'>
		<label for="title">Title:</label>
		<input class="form-control" type='text' name='title' />
		
		<label for="content">Content:</label>
		<textarea rows="10" class="form-control" name='content'></textarea>
		
		<br />
		
		<button type="submit" class="btn btn-primary pull-right">submit</button>

		<input type='hidden' name='page' value='forum' />
		<input type='hidden' name='sec' value='threads' />
		<input type='hidden' name='ssec' value='CreateThread' />
		<input type='hidden' name='h' value='add' />
		<input type='hidden' name='cat' value='{cat}' />
		<input type='hidden' name='fid' value='{fid}' />
	</form>


</div>
<!-- end create thread -->	


		  </div>
		</div>
	</div>
</div>




