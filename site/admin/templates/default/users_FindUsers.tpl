<script>

function DeleteUser(username, id){
	if (confirm('Are you sure you want to delete user '+username+'?')) {
	    // Save it!
	    window.location = "index.php?page=users&sec=find&ssec=FindUsers&h=deleteuser&username="+username+"&uid="+id;
	} else {
	    // Do nothing!
	}
}
</script>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Members</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Username</th>
								  <th>Date registered</th>
								  <th>Role</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							{SearchResult}
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->