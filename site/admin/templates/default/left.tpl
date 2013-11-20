		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-user"></i><span class="hidden-tablet"> Manage users</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-film"></i><span class="hidden-tablet"> Manage videos</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-list-alt"></i><span class="hidden-tablet"> Manage subtitles</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-th-large"></i><span class="hidden-tablet"> Manage groups</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage forums</span></a></li>
						<li><a class="ajax-link" href="index.php?page=main&sec=phpinfo"><i class="icon-info-sign"></i><span class="hidden-tablet"> PHP info</span></a></li>
						
						<li class="nav-header hidden-tablet">System Configuration</li>
						<li><a class="ajax-link" href="#"><i class="icon-wrench"></i><span class="hidden-tablet"> System settings</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-cog"></i><span class="hidden-tablet"> System features</span></a></li>
						<li><a class="ajax-link" href="index.php?page=widgets&sec=manage"><i class="icon-wrench"></i><span class="hidden-tablet"> Widgets</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-inbox"></i><span class="hidden-tablet"> Private message settings</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-edit"></i><span class="hidden-tablet"> Post settings</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-globe"></i><span class="hidden-tablet"> Feed settings</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-star"></i><span class="hidden-tablet"> SEO settings</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-pencil"></i><span class="hidden-tablet"> Registeration settings</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-remove"></i><span class="hidden-tablet"> Spam settings</span></a></li>
						
						<li class="nav-header hidden-tablet">System Communications</li>
						<li><a class="ajax-link" href="#"><i class="icon-envelope"></i><span class="hidden-tablet"> E-mail settings</span></a></li>
						<li><a class="ajax-link" href="#"><i class="icon-repeat"></i><span class="hidden-tablet"> Jabber settings</span></a></li>
						
						
						
						
						
						
						
						<li><a class="ajax-link" href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a class="ajax-link" href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a class="ajax-link" href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a class="ajax-link" href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a class="ajax-link" href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li class="nav-header hidden-tablet">Sample Section</li>
						<li><a class="ajax-link" href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a class="ajax-link" href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a class="ajax-link" href="grid.html"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
						<li><a class="ajax-link" href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="tour.html"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
						<li><a class="ajax-link" href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="error.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
					<!--<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>-->
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">{page}</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">{sec}</a>
					</li>
				</ul>
			</div>
			
	{SystemError}
	{SystemSuccess}