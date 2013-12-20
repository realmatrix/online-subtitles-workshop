  <style>
    /* Example Styles for Demo */
    .etabs { margin: 0; padding: 0; }
    .tab { display: inline-block; zoom:1; *display:inline; background: #eee; border: solid 1px #999; border-bottom: none; -moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0; }
    .tab a { background: url("templates/default2/tmp/images/cathead-m.gif") repeat-x left top; /*font-size: 14px;*/ line-height: 2em; display: block; padding: 0 10px; outline: none; color: white;}
    .tab a:hover { text-decoration: none; }
    .tab.active { background: url("templates/default2/tmp/images/cathead-m.gif") repeat-x left top; /*background: #fff;*/ padding-top: 6px; position: relative; top: 1px; border-color: #666; }
    .tab a.active { font-weight: bold; }
    .tab-container .panel-container { background: #fff; border: solid #666 1px; padding: 10px; -moz-border-radius: 0 4px 4px 4px; -webkit-border-radius: 0 4px 4px 4px; border-color: rgb(215, 229, 242) rgb(215, 229, 242);}
    /*.panel-container { margin-bottom: 10px; }*/
    .tab-containr-wrap{padding: 3px; background: rgb(255, 255, 255); border-width: 1px; border-style: solid; border-color: rgb(215, 229, 242) rgb(215, 229, 242);}
  </style>

  <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container4').easytabs();
    });
  </script>  


<div id="tab-container4" class='tab-container'>

 <ul class='etabs'>
   <li class='tab'><a href="#tabs4-a">All Videos</a></li>
   <li class='tab'><a href="#tabs4-b">Movies</a></li>
   <li class='tab'><a href="#tabs4-c">TV Shows</a></li>
   <li class='tab'><a href="#tabs4-d">Trailers</a></li>
 </ul>
 <div class='tab-containr-wrap'>
 <div class='panel-container'>


  <div id="tabs4-a">
	{AllVideos}
  </div>
  <div id="tabs4-b">
	{Movies}
  </div>
  <div id="tabs4-c">
	{TvShows}
  </div>
  <div id="tabs4-d">
	{Trailers}
  </div>


 </div>
</div>
</div>


  



