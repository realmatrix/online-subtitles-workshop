
<!DOCTYPE HTML> 
<!-- Diapo is a Pixedelic free jQuery slideshow | Manuel Masia (designer and developer) --> 
<html> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
    <title>Diapo | A Pixedelic free jQuery slideshow</title> 
 
<meta name="viewport" content="width=960">    
    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Styles
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    
<link rel='stylesheet' id='style-css'  href='templates/default2/files/diapo/diapo.css' type='text/css' media='all'> 
<script type='text/javascript' src='templates/default2/files/diapo/scripts/jquery.min.js'></script>
<!--[if !IE]><!--><script type='text/javascript' src='templates/default2/files/diapo/scripts/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
<script type='text/javascript' src='templates/default2/files/diapo/scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='templates/default2/files/diapo/scripts/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='templates/default2/files/diapo/scripts/diapo.js'></script> 

<script>
$(function(){
	$('.pix_diapo').diapo();
});

</script>

<style>
section {
	display: block;
	overflow: hidden;
	position: relative;
}
.button {
	background: #014464;
	background: -moz-linear-gradient(top, #0D658E, #0C577A 50%, #014D71 51%, #003E5C);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #0E658E), color-stop(.5, #0C577A), color-stop(.5, #014D71), to(#003E5C)); 
	border: 1px solid #368DBE;
	border-top: 1px solid #c3d6df;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	-moz-box-shadow: 0 1px 3px black;
	-webkit-box-shadow: 0 1px 3px black;
	box-shadow: 0 1px 3px black;
	color: white;
	display: block;
	font-size: 12px;
	font-weight: bold;
	height: 30px;
	line-height: 30px;
	padding: 5px 20px;
	text-align: center;
	text-decoration: none;
	text-shadow: 1px 1px 1px black;
	text-transform: uppercase;
	width: auto;
}
.button2 {
	background: #d9ae00;
	background: -moz-linear-gradient(top, #b28b06, #9c7705 50%, #9c7705 51%, #5c4100);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #b28b06), color-stop(.5, #9c7705), color-stop(.5, #9c7705), to(#5c4100)); 
	border: 1px solid #c7a60c;
	border-top: 1px solid #e5d51f;
}
.button3 {
	background: #ffd838;
	background: -moz-linear-gradient(top, #edbf21, #c89b0f 50%, #9c7705 51%, #906706);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #edbf21), color-stop(.5, #c89b0f), color-stop(.5, #c89b0f), to(#906706)); 
	border: 1px solid #c7a60c;
	border-top: 1px solid #e5d51f;
}
</style>
 
</head> 
<body> 
    <section> 
    
    	<div style="overflow:hidden; width:100%; margin: 0px auto; padding:0 20px;"> 
                <div class="pix_diapo">

                    <div data-thumb="templates/default2/files/diapo/images/thumbs/megamind1048.jpg">
                        <img src="templates/default2/files/diapo/images/slides/megamind1048.jpg">
                        <div class="caption elemHover fromLeft">
                            This is a simple sliding image with caption. You can have more than one caption and decide the layout of the caption via css.
                        </div>
                    </div>
                    
                    <div data-thumb="templates/default2/files/diapo/images/thumbs/megamind_07.jpg">
                        <img src="templates/default2/files/diapo/images/slides/megamind_07.jpg"> 
                        <div class="caption elemHover fromRight" style="bottom:65px; padding-bottom:5px; color:#ff0; text-transform:uppercase">
                            Here you can see two captions.
                        </div>
                        <div class="caption elemHover fromLeft" style="padding-top:5px;">
                            The first are loaded immediately before than the second one
                        </div>
                    </div>
                    
                    <div data-thumb="templates/default2/files/diapo/images/thumbs/wall-e.jpg" data-time="7000">
                        <img src="templates/default2/files/diapo/images/slides/wall-e.jpg">
                        <div class="elemHover caption fromLeft" style="bottom:70px; width:auto; -webkit-border-top-right-radius: 6px; -webkit-border-bottom-right-radius: 6px; -moz-border-radius-topright: 6px; -moz-border-radius-bottomright: 6px; border-top-right-radius: 6px; border-bottom-right-radius: 6px;">
                            You can also get the same effect as the caption with:
                        </div>
                        <div class="elemHover button fromTop" data-easing="easeOutExpo" style="left:388px; bottom:78px;">
                            A button
                        </div>
                        <div class="elemHover button button2 fromBottom" data-easing="easeOutExpo" style="left:512px; bottom:78px;">
                            Or two buttons
                        </div>
                        <div class="elemHover fadeIn" style="left:600px; bottom:auto; top:0; padding-top:50px; color:#ff0; font-size:13px; line-height:20px; width:auto; -webkit-border-top-right-radius: 6px; -webkit-border-bottom-right-radius: 6px; -moz-border-radius-topright: 6px; -moz-border-radius-bottomright: 6px; border-top-right-radius: 6px; border-bottom-right-radius: 6px; background:url(images/demo/arrow_caption.png) no-repeat 230px 30px">
                            Or any other html element...<br>
                            and you can decide the transition time of any slide
                        </div>
                    </div>
                    
                    <div data-thumb="templates/default2/files/diapo/images/thumbs/up-official-trailer-fake.jpg">
                        <iframe width="940" height="470" src="http://www.youtube.com/embed/qas5lWp7_R0?wmode=transparent&autoplay=0" data-fake="images/slides/up-official-trailer-fake.jpg" frameborder="0" allowfullscreen></iframe>
                        <div class="elemHover caption fromLeft elemToHide" style="bottom: 350px; width:auto; -webkit-border-top-right-radius: 6px; -webkit-border-bottom-right-radius: 6px; -moz-border-radius-topright: 6px; -moz-border-radius-bottomright: 6px; border-top-right-radius: 6px; border-bottom-right-radius: 6px; left:0">
                            You can also display videos, but it requires a "fake image"... read the documentation please
                        </div>
                    </div>
                    
                    <div data-thumb="templates/default2/files/diapo/images/thumbs/big_buck_bunny.jpg" data-time="7000">
                        <div style="position:absolute; top:0; left:0; width:900px; height:430px; padding:20px; background:#fff; color:#222;">
                        	<div style="float:left; width:300px;">
                                <p><br><br>You can display any html element directly in the slider, but pay attention, with many elements the transition effect could be slowed.<br>
                                In this case you can see a Vimeo video and a price table</p>
                                <iframe src="http://player.vimeo.com/video/1084537?title=0&amp;byline=0&amp;portrait=0&amp;color=f0bc00&amp;autoplay=0" data-fake="images/slides/big_buck_bunny.jpg" width="300" height="169" frameborder="0"></iframe>
                            </div>

                        </div>
                    </div>
                    
                    
                    <div data-thumb="templates/default2/files/diapo/images/thumbs/ratatouille2.jpg">
                        <img src="templates/default2/files/diapo/images/slides/ratatouille2.jpg">
                    </div>
                    
               </div><!-- #pix_diapo -->
                
        </div>
    
    
    </section> 
 
    </body> 
</html>