<html>
<head>
{SystemHeader}
</head>
<body>



<div id="add-new-video"> <!-- begin add video content-->

<form method="get" action="index.php" onsubmit="$.get('http://www.msn.com', function(data){$('#SystemAjax_video_AddVideo').html(data);alert('Load was performed.');});">
<div id="addvideo-select"> <!-- begin select boxs -->
<div id="addvideo-type">{VideoType}<select>{types}</select></div>
<div id="addvideo-categories">{VideoCategory}<select>{categories}</select></div>
<div id="addvideo-language">{VideoLanguage} <select>{languages}</select></div>
</div> <!-- end select boxs -->

<div id="addvideo-title"><input type="text" name="title" /></div>


<div id="addvideo-picture"><img id="addvideo-image" /></div>

<input type="submit" value="submit" />
</form>

</div> <!-- end add video content-->




</body>
</html>

