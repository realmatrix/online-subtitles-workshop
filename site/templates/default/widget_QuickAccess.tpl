





<div class="row">
	<div class="col-md-11">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">{title}</h3>
		  </div>
		  <div class="panel-body">
<div id="QuickAccess">

<div class="form-group">
	<label class="control-label">{Videos}</label>	
	<form method="get" action="index.php">
	<select class="form-control" name="vid" onchange="this.form.submit()">
	<option value="">select video to open</option>
	{CVideos}
	</select>
	<input type="hidden" name="page" value="video" />
	<input type="hidden" name="sec" value="view" />
	</form>		  
</div>

<div class="form-group">
	<label class="control-label">{Subtitles}</label>
	<form method="get" action="index.php">
	<select  class="form-control" name="sid" onchange="this.form.submit()">
	<option value="">select subtitle to open</option>
	{CSubtitles}
	</select>
	<input type="hidden" name="page" value="subtitle" />
	<input type="hidden" name="sec" value="edit" />
	</form>
</div>

<div class="form-group">
	<label class="control-label">{Check}</label>
	<form method="get" action="index.php">
	<select  class="form-control" name="sid" onchange="this.form.submit()">
	<option value="">select subtitle to check</option>
	{CCheck}
	</select>
	<input type="hidden" name="page" value="subtitle" />
	<input type="hidden" name="sec" value="check" />
	</form>
</div>

<div class="form-group">
	<label class="control-label">{ManageSubtitles}</label>
	<form method="get" action="index.php">
	<select  class="form-control" name="sid" onchange="this.form.submit()">
	<option value="">select subtitle to open</option>
	{CMSubtitles}
	</select>
	<input type="hidden" name="page" value="subtitle" />
	<input type="hidden" name="sec" value="manage" />
	</form>
</div>
				
<div class="form-group">
	<label class="control-label">{TeamSubtitles}</label>
	<form method="get" action="index.php">
	<select class="form-control" name="sid" onchange="this.form.submit()">
	<option value="">select subtitle to open</option>
	</select>
	<input type="hidden" name="page" value="" />
	<input type="hidden" name="sec" value="" />
	</form>
</div>

<div class="form-group">
	<label class="control-label">{FavouriteVideos}</label>
	<form method="get" action="index.php">
	<select class="form-control" name="vid" onchange="this.form.submit()">
	<option value="">select video to open</option>
	{CFavouriteVideos}
	</select>
	<input type="hidden" name="page" value="video" />
	<input type="hidden" name="sec" value="view" />
	</form>			
</div>

</div>
		  </div>
		</div>
	</div>
</div>





