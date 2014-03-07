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
 
        </nav>
      </div>
<!-- navbar end -->
    	
        <div class="container">



            <div class="row">

                <div class="col-md-8">
                    <p>col1</p>
                </div>

                <div class="col-md-4">
                    <p>col2</p>
                </div>

            </div>

        </div>
        
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