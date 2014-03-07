<!DOCTYPE html>
<html>
    <head>
{SystemHeader}
        <title>{SiteName} - {PageTitle}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <META content="text/html; charset=UTF-8" http-equiv="content-type">
		<META content="text/css" http-equiv="content-style-type">
		<META name="resource-type" content="document">
		<META name="keywords" content="">
		<META name="description" content="{PageDescription}">
		
        <!-- Bootstrap CSS -->
        <LINK rel="stylesheet" type="text/css" href="{TemplatePath}/css/bootstrap.css">
		<LINK rel="stylesheet" type="text/css" href="{TemplatePath}/css/bootstrap-theme.css">
		<LINK rel="stylesheet" type="text/css" href="{TemplatePath}/css/style.css">
		
		<!-- Glyphicons -->
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		
        <!-- To better visualize the columns -->
        <style>
        .row > div {
            background-color: #dedef8;
            box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;
        }
        </style>


	
    </head>
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
                <li><a href="index.php?page=info&sec=about">About us</a></li>
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

	
        <div class="container"><!-- container start -->



            <div class="row">

                <div class="col-md-8">
                    {widget_FeaturedVideos}
                </div>

                <div class="col-md-4">
                    {widget_ForumLatest}
                </div>

            </div>

<!-- top10 widget start -->
<div class="row">
{widget_top10}
</div>
<!-- top 10 widget end -->


<!-- statistics start -->
<div class="row">
	<div class="col-md-13">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Statistics</h3>
		  </div>
		  <div class="panel-body">
In total there are <STRONG>{TotalOnline}</STRONG> users 
online :: {OnlineRegistered} registered, {OnlineHidden} hidden and {OnlineGuests} guests <BR><BR>Registered 
users: {TotalRegistered} registered users<BR><BR>
Total videos <STRONG>{TotalVideos}</STRONG> • Total subtitles 
<STRONG>{TotalSubtitles}</STRONG> • Total members <STRONG>{TotalUsers}</STRONG> • Our newest member 
<STRONG><A href="#">{LatestUser}</A></STRONG>
		  </div>
		</div>
	</div>
</div>
<!-- statistics end-->
        </div><!-- container end -->
        

        
<!-- footer start -->
    <div id="footer">
      <div class="container" align="center">

Powered by <A href="#">Online Subtitles Workshop</A> 
<br /> <a href="index.php?page=sitemap&sec=sitemap">Sitemap</a> <a href="index.php?page=sitemap&sec=xhtml">XHTML</a> <a href="index.php?page=sitemap&sec=rss">RSS</a> <a href="index.php?page=sitemap&sec=wap2">WAP2</a>
<br />generated in {LoadTime} seconds  

      </div>
    </div>
<!-- footer end -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{TemplatePath}/js/jquery-2.1.0.js"></script>
 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{TemplatePath}/js/bootstrap.js"></script>
    <script src="{TemplatePath}/js/script.js"></script>
    </body>
</html>