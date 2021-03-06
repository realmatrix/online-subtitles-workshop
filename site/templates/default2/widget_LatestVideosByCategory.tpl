  <style>
    .etabs { margin: 0; padding: 0; }
    .tab {vertical-align: bottom; display:inline-block; zoom:1; *display:inline; background: #eee; border: solid 1px #0A3D72; border-bottom: none; -moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0;}
    .tab a {height: 36px; background: url("templates/default2/tmp/images/cathead-m.gif") repeat-x left top; /*font-size: 14px;*/ line-height: 3em; display: block; padding: 0 10px; outline: none; color: white;}
    .tab a:hover { text-decoration: none; color: #F88017;}
    .tab.active { height: 36px; background: url("templates/default2/tmp/images/cathead-m.gif") repeat-x left top; /*background: #fff;*/ /*padding-top: 2px;*/ position: relative; top: 1px; border-color: #666;}
    .tab a.active { /*font-weight: bold;*/ color: #F88017;}
    .tab-container .panel-container { background: #fff; border: solid #666 1px; padding: 2px; -moz-border-radius: 0 4px 4px 4px; -webkit-border-radius: 0 4px 4px 4px; border-color: rgb(215, 229, 242) rgb(215, 229, 242);}
    .panel-container { margin-bottom: 0px; }
    .tab-containr-wrap{background-color: #EBF4FC; margin-bottom: 10px; padding: 5px; border-width: 1px; border-style: solid; border-color: rgb(215, 229, 242) rgb(215, 229, 242);}

	#tabs4-a, #tabs4-b, #tabs4-c, #tabs4-d{
		/*clear: left;*/
	}
	.widget-latestvideos-all, .widget-latestvideos-movies, .widget-latestvideos-tv, .widget-latestvideos-trailer{
		/*clear: left;*/
	}
	.widget-latestvideos-all-cell, .widget-latestvideos-movies-cell, .widget-latestvideos-tv-cell, .widget-latestvideos-trailer-cell{
		width: 49.5%;
		border-style: solid;
		border-width: 1px;
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		height: 117px;
		line-height: 30px;
		margin-right: 2px;
		margin-bottom: 2px;
		text-overflow: ellipsis;
		float: left;
	}
	
	.widget-latestvideos-all-cell a, .widget-latestvideos-movies-cell a, .widget-latestvideos-trailer-cell a, .widget-latestvideos-tv-cell a {
		text-decoration: none;
		padding-left: 1px;
		padding-right: 1px;
		font-weight: bold;
	}
	.widget-latestvideos-all-thubmnail, .widget-latestvideos-movies-thubmnail, .widget-latestvideos-tv-thubmnail, .widget-latestvideos-trailer-thubmnail{
		width: 77px;
		height: 113px;
		float: left;
		margin: 1px 1px 1px 1px;
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		border-width: 1px;
		border-style: solid;
	}
	.widget-latestvideos-all-thubmnailimg, .widget-latestvideos-movies-thubmnailimg, .widget-latestvideos-tv-thubmnailimg, .widget-latestvideos-trailer-thubmnailimg{
		width: 77px;
		height: 113px;
	}
	.widget-lateestvideos-all-videoinfo{
		display: block;
		float: left;
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		border-width: 1px;
		border-style: solid;
		margin: 1px;
		width: 252px;
		height: 113px;
	}
	.widget-lateestvideos-all-videoinfo div, .widget-lateestvideos-movies-videoinfo div, .widget-lateestvideos-tv-videoinfo div, .widget-lateestvideos-trailer-videoinfo div{
		width: 100%;
		height: 24px;
		vertical-align: middle;
		margin-left: 1px;
		line-height: 24px;
	}
	.widget-latestvideos-all-rateresult-off, .widget-latestvideos-movies-rateresult-off, .widget-latestvideos-tv-rateresult-off, .widget-latestvideos-trailer-rateresult-off{
		content: url("templates/default2/tmp/images/star_empty2.png");
	}
	.widget-latestvideos-all-rateresult-on, .widget-latestvideos-movies-rateresult-on, .widget-latestvideos-tv-rateresult-on, .widget-latestvideos-trailer-rateresult-on{
		content: url("templates/default2/tmp/images/star_full2.png");
	}
  </style>

  <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container4').easytabs();
    });
  </script>  


<div id="tab-container4" class='tab-container'>

 <ul class='etabs'>
   <li class='tab'><a href="#tabs4-a">All Videos</a></li><!--
   --><li class='tab'><a href="#tabs4-b">Movies</a></li><!--
   --><li class='tab'><a href="#tabs4-c">TV Shows</a></li><!--
   --><li class='tab'><a href="#tabs4-d">Trailers</a></li>
 </ul>
 <div class='tab-containr-wrap'>
 <div class='panel-container'>


  <div id="tabs4-a">
	{AllVideos}
	<div style='clear:left;'></div>
  </div>
  <div id="tabs4-b">
	{Movies}
	<div style='clear:left;'></div>
  </div>
  <div id="tabs4-c">
	{TvShows}
	<div style='clear:left;'></div>
  </div>
  <div id="tabs4-d">
	{Trailers}
	<div style='clear:left;'></div>
  </div>


 </div>
</div>
</div>


  



