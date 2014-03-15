<div class="row">
	<div class="panel panel-primary col-md-13">
	  <!-- Default panel contents -->
	  <div class="panel-heading">{title}</div>
	  <!-- Table -->
	  <table class="table table-striped">
	  	<tbody>
	  		<tr>
	  			<td class="col-md-3"><label>Subtitle Lines:</label></td>
	  			<td>{TotalLines}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-3"><label>Finished Lines:</label></td>
	  			<td>{FinishedLines}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-3"><label>Checked Lines:</label></td>
	  			<td>{CheckedLines}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-3"><label>Team Members:</label></td>
	  			<td>{TeamMembers}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-3"><label>Finished Progress:</label></td>
	  			<td>
					<div class="progress">
					  <div class="progress-bar" role="progressbar" aria-valuenow="{FinishedProgress}" aria-valuemin="0" aria-valuemax="100" style="width: {FinishedProgress}%;">
					    {FinishedProgress}%
					  </div>
					</div>
				</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-3"><label>Checked Progress:</label></td>
	  			<td>
					<div class="progress">
					  <div class="progress-bar" role="progressbar" aria-valuenow="{CheckedProgress}" aria-valuemin="0" aria-valuemax="100" style="width: {CheckedProgress}%;">
					    {CheckedProgress}%
					  </div>
					</div> 
	  			</td>
	  		</tr>
	  	</tbody>
	  </table>
	</div>
</div>


