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
							  <label class="control-label" for="typeahead">Language name </label>
							  <div class="controls">
								<input type="text" name="lang" value="lang_{LangName}" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["english"]'>
							  </div>
							</div>
							
						
							<div class="control-group">
							  <label class="control-label" for="fileInput">Language file </label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div> 
							
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Import</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						  <input type="hidden" name="page" value="{page}">
						  <input type="hidden" name="sec" value="{sec}">
						  <input type="hidden" name="ssec" value="ImportLanguage">
						  <input type="hidden" name="h" value="import">
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->