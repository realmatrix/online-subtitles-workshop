<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
  <title>jquery sliders</title>
  <link rel="stylesheet" href="widgets/widget_ImageGallery/style.css" type="text/css" media="screen" />
  <script type="text/javascript">var _siteRoot='index.html',_root='index.html';</script>
  <script type="text/javascript" src="apps/jquery/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="widgets/widget_ImageGallery/js/scripts.js"></script>
  
<style>
	a img {
border : 0;
}
div.wrap {
width : 746px; /*993*/
margin : 0 auto;
text-align : left;
}
div#top div#nav {
float : left;
clear : both;
width : 746px; /*993*/
height : 52px;
margin : 22px 0 0;
}
div#top div#nav ul {
float : left;
width : 453px; /*700*/
height : 52px;
list-style-type : none;
}
div#nav ul li {
float : left;
height : 52px;
}
div#nav ul li a {
border : 0;
height : 52px;
display : block;
line-height : 52px;
text-indent : -9999px;
}
div#headerr {
margin : -1px 0 0;
}
div#video-header {
height : 436px; /*683*/
margin : -1px 0 0;
}
div#headerr div.wrap {
height : 299px;
background : url(images/header-bg.png) no-repeat 50% 0;
}
div#headerr div#slide-holder {
z-index : 40;
width : 746px; /*993*/
height : 299px;
position : absolute;
}
div#headerr div#slide-holder div#slide-runner {
top : 9px;
left : 9px;
width : 726px; /*973*/
height : 278px;
overflow : hidden;
position : absolute;
}
div#headerr div#slide-holder img {
margin : 0;
display : none;
position : absolute;
}
div#headerr div#slide-holder div#slide-controls {
left : 0;
bottom : 228px;
width : 746px; /*973*/
height : 46px;
display : none;
position : absolute;
background : url(images/slide-bg.png) 0 0;
}
div#headerr div#slide-holder div#slide-controls p.text {
float : left;
color : #fff;
display : inline;
font-size : 10px;
line-height : 16px;
margin : 15px 0 0 20px;
text-transform : uppercase;
}
div#headerr div#slide-holder div#slide-controls p#slide-nav {
float : right;
height : 24px;
display : inline;
margin : 11px 15px 0 0;
}
div#headerr div#slide-holder div#slide-controls p#slide-nav a {
float : left;
width : 24px;
height : 24px;
display : inline;
font-size : 11px;
margin : 0 5px 0 0;
line-height : 24px;
font-weight : bold;
text-align : center;
text-decoration : none;
background-position : 0 0;
background-repeat : no-repeat;
}
div#headerr div#slide-holder div#slide-controls p#slide-nav a.on {
background-position : 0 -24px;
}
div#headerr div#slide-holder div#slide-controls p#slide-nav a {
background-image : url(images/silde-nav.png);
}
div#nav ul li a {
background : url(images/nav.png) no-repeat;
}

</style>
 </head>
 <body>
 
  <!--/top-->
  <div id="headerr"><div class="wrap">
   <div id="slide-holder">
<div id="slide-runner">
    <a href=""><img id="slide-img-1" src="widgets/widget_ImageGallery/images/nature-photo.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-2" src="widgets/widget_ImageGallery/images/nature-photo1.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-3" src="widgets/widget_ImageGallery/images/nature-photo2.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-4" src="widgets/widget_ImageGallery/images/nature-photo3.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-5" src="widgets/widget_ImageGallery/images/nature-photo4.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-6" src="widgets/widget_ImageGallery/images/nature-photo4.png" class="slide" alt="" /></a>
	<a href=""><img id="slide-img-7" src="widgets/widget_ImageGallery/images/nature-photo6.png" class="slide" alt="" /></a> 
    <div id="slide-controls">
     <p id="slide-client" class="text"><strong>post: </strong><span></span></p>
     <p id="slide-desc" class="text"></p>
     <p id="slide-nav"></p>
    </div>
</div>
	
	<!--content featured gallery here -->
   </div>
   <script type="text/javascript">
    if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"nature beauty","desc":"nature beauty photography"},{"id":"slide-img-2","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-3","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-4","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-5","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-6","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-7","client":"nature beauty","desc":"add your description here"}];
   </script>
  </div></div><!--/header-->
 </body>
</html>


<br>