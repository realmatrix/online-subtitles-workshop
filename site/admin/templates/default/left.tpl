		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="index.php?page=users&sec=manage"><i class="icon-user"></i><span class="hidden-tablet"> Manage users</span></a></li>
						<li><a class="ajax-link" href="index.php?page=videos&sec=manage"><i class="icon-film"></i><span class="hidden-tablet"> Manage videos</span></a></li>
						<li><a class="ajax-link" href="index.php?page=subtitles&sec=manage"><i class="icon-list-alt"></i><span class="hidden-tablet"> Manage subtitles</span></a></li>
						<li><a class="ajax-link" href="index.php?page=groups&sec=manage"><i class="icon-th-large"></i><span class="hidden-tablet"> Manage groups</span></a></li>
						<li><a class="ajax-link" href="index.php?page=forums&sec=manage"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage forums</span></a></li>
						<li><a class="ajax-link" href="index.php?page=main&sec=phpinfo"><i class="icon-info-sign"></i><span class="hidden-tablet"> PHP info</span></a></li>
						
						<li class="nav-header hidden-tablet">System Configuration</li>
						<li><a class="ajax-link" href="index.php?page=system&sec=settings"><i class="icon-wrench"></i><span class="hidden-tablet"> System settings</span></a></li>
						<li><a class="ajax-link" href="index.php?page=system&sec=features"><i class="icon-cog"></i><span class="hidden-tablet"> System features</span></a></li>
						<li><a class="ajax-link" href="index.php?page=widgets&sec=manage"><i class="icon-th-list"></i><span class="hidden-tablet"> Widgets</span></a></li>
						<li><a class="ajax-link" href="index.php?page=language&sec=manage"><i class="icon-flag"></i><span class="hidden-tablet"> Languages</span></a></li>
						<li><a class="ajax-link" href="index.php?page=pm&sec=manage"><i class="icon-inbox"></i><span class="hidden-tablet"> Private message settings</span></a></li>
						<li><a class="ajax-link" href="index.php?page=post&sec=settings"><i class="icon-edit"></i><span class="hidden-tablet"> Post settings</span></a></li>
						<li><a class="ajax-link" href="index.php?page=feed&sec=settings"><i class="icon-globe"></i><span class="hidden-tablet"> Feed settings</span></a></li>
						<li><a class="ajax-link" href="index.php?page=seo&sec=settings"><i class="icon-star"></i><span class="hidden-tablet"> SEO settings</span></a></li>
						<li><a class="ajax-link" href="index.php?page=registser&sec=settings"><i class="icon-pencil"></i><span class="hidden-tablet"> Registeration settings</span></a></li>
						<li><a class="ajax-link" href="index.php?page=spam&sec=settings"><i class="icon-remove"></i><span class="hidden-tablet"> Spam settings</span></a></li>

						<li class="nav-header hidden-tablet">System Communications</li>
						<li><a class="ajax-link" href="index.php?page=email&sec=settings"><i class="icon-envelope"></i><span class="hidden-tablet"> E-mail settings</span></a></li>
						<li><a class="ajax-link" href="index.php?page=jabber&sec=settings"><i class="icon-repeat"></i><span class="hidden-tablet"> Jabber settings</span></a></li>
						
						<li class="nav-header hidden-tablet">System Operations</li>
						<li><a class="ajax-link" href="index.php?page=backup&sec=backup"><i class="icon-hdd"></i><span class="hidden-tablet"> Backup / Rstore</span></a></li>
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