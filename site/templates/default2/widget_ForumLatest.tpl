  <style>
    /* Example Styles for Demo */
    .etabs { margin: 0; padding: 0; }
    .tab { display: inline-block; zoom:1; *display:inline; background: #eee; border: solid 1px #999; border-bottom: none; -moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0; }
    .tab a { font-size: 14px; line-height: 2em; display: block; padding: 0 10px; outline: none; }
    .tab a:hover { text-decoration: underline; }
    .tab.active { background: #fff; padding-top: 6px; position: relative; top: 1px; border-color: #666; }
    .tab a.active { font-weight: bold; }
    .tab-container .panel-container { background: #fff; border: solid #666 1px; padding: 10px; -moz-border-radius: 0 4px 4px 4px; -webkit-border-radius: 0 4px 4px 4px; }
    .panel-container { margin-bottom: 10px; }
  </style>

  <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container').easytabs();
    });
  </script>  


<div id="tab-container" class='tab-container'>
 <ul class='etabs'>
   <li class='tab'><a href="#tabs1-html">Latest Post</a></li>
   <li class='tab'><a href="#tabs1-js">Latest Topics</a></li>
   <li class='tab'><a href="#tabs1-css">Top Topics</a></li>
 </ul>
 <div class='panel-container'>


  <div id="tabs1-html">
    <h2>HTML Markup for these tabs</h2>
    <!-- content -->
  </div>
  <div id="tabs1-js">
    <h2>JS for these tabs</h2>
    <!-- content -->
  </div>
  <div id="tabs1-css">
    <h2>CSS Styles for these tabs</h2>
    <!-- content -->
  </div>


 </div>
</div>


  
{LatestTopic}
{LatestPost}
{TopTopics}
