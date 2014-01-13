			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Add New User</h2>
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
							  <span class="input-xlarge uneditable-input">{tusername}</span>
							  </div>
							 </div>

							 <div class="control-group">
							  <label class="control-label" for="typeahead">Password </label>
							  <div class="controls">
								<input type="password" name="password" value="{tpassword}" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
							  </div>
							 </div>

							 <div class="control-group">
							  <label class="control-label" for="typeahead">Password again</label>
							  <div class="controls">
								<input type="password" name="password2" value="{tpassword2}" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
							  </div>
							 </div>

							 <div class="control-group">
							  <label class="control-label" for="typeahead">Email </label>
							  <div class="controls">
								<input type="text" name="email" value="{temail}" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
							  </div>
							 </div>
							  							  
							  <div class="control-group">
								<label class="control-label" for="selectError">User group</label>
								<div class="controls">
								  <select name="group" class="span3" id="selectError" data-rel="chosen">
										{UserGroups}
								  </select>
								</div>
							  </div>
							  
							  
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add user</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						  <input type="hidden" name="page" value="{page}">
						  <input type="hidden" name="sec" value="{sec}">
						  <input type="hidden" name="ssec" value="AddUsers">
						  <input type="hidden" name="h" value="add">
						  <input type="hidden" name="username" value="{tusername}">
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->