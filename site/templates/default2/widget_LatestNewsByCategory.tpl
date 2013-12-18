  <style>
    /* Example Styles for Demo */
    .etabs { margin: 0; padding: 0; }
    .tab { display: inline-block; zoom:1; *display:inline; background: #eee; border: solid 1px #999; border-bottom: none; -moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0; }
    .tab a { /*font-size: 14px;*/ line-height: 2em; display: block; padding: 0 10px; outline: none; }
    .tab a:hover { text-decoration: underline; }
    .tab.active { background: #fff; padding-top: 6px; position: relative; top: 1px; border-color: #666; }
    .tab a.active { font-weight: bold; }
    .tab-container .panel-container { background: #fff; border: solid #666 1px; padding: 10px; -moz-border-radius: 0 4px 4px 4px; -webkit-border-radius: 0 4px 4px 4px; }
    .panel-container { margin-bottom: 10px; }
  </style>

  <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container3').easytabs();
    });
  </script>  


<div id="tab-container3" class='tab-container'>
 <ul class='etabs'>
   <li class='tab'><a href="#tabs3-a">All News</a></li>
   <li class='tab'><a href="#tabs3-b">Category 1</a></li>
   <li class='tab'><a href="#tabs3-c">Category 2</a></li>
   <li class='tab'><a href="#tabs3-d">Category 3</a></li>
   <li class='tab'><a href="#tabs3-e">Category 4</a></li>
 </ul>
 <div class='panel-container'>


  <div id="tabs3-a">
????????
  </div>
  <div id="tabs3-b">
??????????
  </div>
  <div id="tabs3-c">
?????????????
  </div>
  <div id="tabs3-d">
?????????????
  </div>
  <div id="tabs3-e">
?????????????
  </div>  


 </div>
</div>


  



