<style>
.editlanguage-key{
	width: 20%;
}
.editlanguage-text{
	width: 80%;
}
</style>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit Language</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					
					
					<div class="box-content">
						<form class="form-horizontal" method="post" action="index.php">
							<fieldset>

<!--							
							  <div class="control-group">
								<label class="control-label" for="selectError">Select Language</label>
								<div class="controls">
								  <select id="selectError" name="lang" class="span6" data-rel="chosen" onchange="this.form.submit()">
										{SelectLangTables}
								  </select>
								</div>
							  </div>
-->


	


					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  <th class='editlanguage-key'>Key</th>
									  <th class='editlanguage-text'>Value</th>                                        
								  </tr>
							  </thead>   
							  <tbody>
									{TableContent}                              
							  </tbody>
						 </table>       
					</div>




							  

							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
								<button class="btn">Cancel</button>
							  </div>

							  
							</fieldset>
							<input type="hidden" name="page" value="{page}"/>
							<input type="hidden" name="sec" value="{sec}"/>
							<input type="hidden" name="ssec" value="EditLanguage"/>
							<input type="hidden" name="h" value="save"/>
							<input type="hidden" name="lang" value="{lang}">
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->