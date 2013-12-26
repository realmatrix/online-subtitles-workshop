  <style>
    /* Example Styles for Demo */
    .etabs { margin: 0; padding: 0; }
    .tab {vertical-align: bottom; display:inline-block; zoom:1; *display:inline; background: #eee; border: solid 1px #999; border-bottom: none; -moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0; }
    .tab a {height: 36px; background: url("templates/default2/tmp/images/cathead-m.gif") repeat-x left top; /*font-size: 14px;*/ line-height: 3em; display: block; padding: 0 10px; outline: none; color: white;}
    .tab a:hover { text-decoration: none; color: #F88017;}
    .tab.active { height: 36px; background: url("templates/default2/tmp/images/cathead-m.gif") repeat-x left top; /*background: #fff;*/ /*padding-top: 2px;*/ position: relative; top: 1px; border-color: #666;}
    .tab a.active { /*font-weight: bold;*/ color: #F88017;}
    .tab-container .panel-container { background: #fff; border: solid #666 1px; padding: 10px; -moz-border-radius: 0 4px 4px 4px; -webkit-border-radius: 0 4px 4px 4px; border-color: rgb(215, 229, 242) rgb(215, 229, 242);}
    .panel-container { margin-bottom: 0px; }
    .tab-containr-wrap{margin-bottom: 10px; padding: 5px; background: rgb(255, 255, 255); border-width: 1px; border-style: solid; border-color: rgb(215, 229, 242) rgb(215, 229, 242);}

	.latest-threads-cell{
		width: 49.2%;
		float:left;
		border-style: solid;
		border-width: 1px;
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		height: 30px;
		line-height: 30px;
		margin-left: 2px;
		margin-bottom: 2px;
		padding-left: 1px;
		text-overflow: ellipsis;
	}
	
	.latest-threads-cell a {
		text-decoration: none;
		padding-left: 1px;
		padding-right: 1px;
	}
  </style>


  <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container').easytabs();
    });
  </script>  


<div id="tab-container" class='tab-container'>
 <ul class='etabs'>
   <li class='tab'><a href="#tabs1-html">Latest Topics</a></li>
   <li class='tab'><a href="#tabs1-js">Latest Posts</a></li>
   <li class='tab'><a href="#tabs1-css">Top Topics</a></li>
 </ul>
 <div class='tab-containr-wrap'>
 <div class='panel-container'>


  <div id="tabs1-html">
{LatestTopic}
  <div style='clear:left;'></div>
  </div>
  <div id="tabs1-js">
{LatestPost}
  </div>
  <div id="tabs1-css">
{TopTopics}
  </div>


 </div>
 </div>
</div>


  



