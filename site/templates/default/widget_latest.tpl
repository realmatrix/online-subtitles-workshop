  <style>

.LatestStatrtedSubtitles-container{
	width: 100%;
}
.LatestStatrtedSubtitles-row{
		width: 49.6%;
		border-style: solid;
		border-width: 1px;
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		height: 60px;
		line-height: 20px;
		margin-bottom: 2px;
		text-overflow: ellipsis;
		display: inline-block;
}
.LatestStatrtedSubtitles-row-even{margin-right: 2px;}
.LatestStatrtedSubtitles-row-odd{}
.LatestStatrtedSubtitles-row-row{
	width: 100%;
	float: left;
	height: 20px;
}
.LatestStatrtedSubtitles-cell{
	float: left;
	text-overflow: ellipsis;
	height: 20px;
	display: block;
	overflow: hidden;
	word-wrap: break-word;
	word-break: break-all;
	text-overflow: ellipsis;
}
.LatestStatrtedSubtitles-title:before, .LatestStatrtedSubtitles-version:before, .LatestStatrtedSubtitles-language:before, .LatestStatrtedSubtitles-progress:before, .LatestStatrtedSubtitles-by:before, .LatestStatrtedSubtitles-team:before, .LatestStatrtedSubtitles-join:before{
	content: url("{TemplatePath}/tmp/sbBullet.bmp");
	padding-left: 4px;
	padding-right: 2px;
}
.LatestStatrtedSubtitles-title{width: 100%; font-weight: bold;}
.LatestStatrtedSubtitles-version{width: 33.3%; }
.LatestStatrtedSubtitles-language{width: 33.3%;}
.LatestStatrtedSubtitles-progress{width: 33.3%;}
.LatestStatrtedSubtitles-by{width: 33.3%;}
.LatestStatrtedSubtitles-team{width: 33.3%;}
.LatestStatrtedSubtitles-join{width: 33.3%;}

#tabs1-a, #tabs1-b, #tabs1-c, #tabs1-d{
	min-height: 100%;
}
  </style>


  <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container2').easytabs();
    });
  </script>  

<div class="row">
	<div class="col-md-13">
		
<ul id="latest" class="nav nav-tabs">
  <li class="active"><a href="#latest-tab1" data-toggle="tab">Latest Started Translations</a></li>
  <li class="panel-primary"><a href="#latest-tab2" data-toggle="tab">Latest Added Subtitles</a></li>
  <li class=""><a href="#latest-tab3" data-toggle="tab">Latest New Versions</a></li>
  <li class=""><a href="#latest-tab4" data-toggle="tab">Finished Translations</a></li>
</ul>
 
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="latest-tab1">
    	{StartedTranslations}
	<div style='clear:left;'></div>
  </div>
  <div class="tab-pane fade" id="latest-tab2">
    	{AddedSubtitles}
	<div style='clear:left;'></div>
  </div>
  <div class="tab-pane fade" id="latest-tab3">
    	{NewVersions}
	<div style='clear:left;'></div>
  </div>
  <div class="tab-pane fade" id="latest-tab4">
    	{FinishedTranslations}
	<div style='clear:left;'></div>
  </div>
</div>

	</div>
</div>

<br />