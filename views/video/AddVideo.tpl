<div id="add-new-video"> <!-- begin add video content-->

<form method="get" id="submitnewvideo" action="index.php">
<div id="addvideo-select"> <!-- begin select boxs -->
<div id="addvideo-type">{VideoType}<select id="type">{types}</select></div>
<div id="addvideo-categories">{VideoCategory}<select>{categories}</select></div>
<div id="addvideo-language">{VideoLanguage} <select>{languages}</select></div>
</div> <!-- end select boxs -->

<div id="addvideo-title"><input id="title" type="text" name="title" /></div>


<div id="addvideo-picture"><img id="addvideo-image" /></div>
<a href="#" onclick="document.getElementById('title').innerHTML = document.getElementById('type').value;">test link</a>
<input id="submit" type="submit" value="submit" />
</form>

</div> <!-- end add video content-->



{form}
