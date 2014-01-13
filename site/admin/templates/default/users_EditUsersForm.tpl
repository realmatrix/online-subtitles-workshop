			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit User</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="get" action="index.php">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Username </label>
							  <div class="controls">
								<input type="text" name="username" value="{tusername}" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Edit user</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						  <input type="hidden" name="page" value="{page}">
						  <input type="hidden" name="sec" value="{sec}">
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->