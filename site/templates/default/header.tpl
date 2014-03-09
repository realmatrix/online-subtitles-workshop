    <body>
    	
<!-- navbar start -->
      <div class="row">
        <nav class="navbar navbar-inverse" role="navigation">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">&nbsp;&nbsp;<b>{SiteName}</b></a></li>
            <li><a href="index.php">&nbsp;&nbsp;<i class="icon-home"></i> Home</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#"><i class="icon-download"></i> Downloads</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#"><i class="icon-list"></i> Subtitles</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#"><i class="icon-film"></i> Videos</a></li>
            <li class="divider-vertical"></li>
            <li><a href="index.php?page=forum&sec=forums"><i class="icon-th"></i> Forums</a></li> 
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon-search"></i> Search<b class="caret"></b></a>
 
              <ul class="dropdown-menu">
                <li><a href="#"></a></li>
                <li><a href="index.php?page=search&sec=advanced">Search Subtitles</a></li>
                <li role="presentation" class="divider"></li>
                <li><a href="index.php?page=search&sec=advanced">Search Videos</a></li>
              </ul>
            </li>
          </ul>
          
          
          <ul class="nav navbar-nav">
          	<li class="divider-vertical"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon-star"></i> More<b class="caret"></b></a>
 
              <ul class="dropdown-menu">
                <li><a href="#"></a></li>
                <li><a href="index.php?page=message&sec=contact">Contact Us</a></li>
                <li role="presentation" class="divider"></li>
                <li><a href="index.php?page=info&sec=about">About us</a></li>
                <li role="presentation" class="divider"></li>
                <li><a href="index.php?page=faq&sec=list">FAQ</a></li>
              </ul>
            </li>
 		</ul>
 
 
        </nav>
      </div>
<!-- navbar end -->

<!-- breadcrubms widget start -->
	{widget_breadcrumbs}
<!-- breadcrumbs widget end -->

<!-- system messages start-->
	{SystemError}
	{SystemSuccess}	
<!-- system messages end -->    
