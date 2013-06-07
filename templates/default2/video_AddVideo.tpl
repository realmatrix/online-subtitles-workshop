<script type='text/javascript' src='apps/jquery/jquery-1.9.1.js'></script> 
<script>
function processForm(formId, divID) { 
//your validation code
alert($("#"+formId).serialize());
$.ajax( {
        type: 'POST',
        url: 'index.php',
        data: $("#"+formId).serialize(), 
        success: function(data) {
            $("#"+divID).html(data);
        }
    } );
}
</script>

<style>
	#submitnewvideo input[type=text], input[type=file]{
		width: 100%;
		margin: 5px;
	}
	#submitnewvideo textarea{
		width: 100%;
	}
</style>
<br /><br />
<div>
<DIV class="catglow" style="width:90%; margin: 0 auto;">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	{title}                
</DIV>
</DIV>
</DIV>
<DIV class="trigger active">
</DIV>
<DIV class="collapsethis">
<TABLE class="cat" cellSpacing="0" cellPadding="0" width="100%">
  <TBODY>
  <TR>
    <TD class="forumdetails">
    	
    	


<!-- add video form -->
<div id="div-submitnewvideo">
<form name="submitnewvideo" id="submitnewvideo" action="#" onsubmit="processForm('submitnewvideo','div-submitnewvideo'); return false;">
	
	<label for="VideoType" id="label-VideoType">ADD A NEW</label>
	<select name="VideoType" id="VideoType">
		<option></option>
		{VideoType}
	</select>
	
	<label for="VideoCategory" >Category</label>
	<select name="VideoCategory" id="VideoCategory">
		<option></option>
		{VideoCategory}
	</select>
	
	<label for="VideoLanguage">Language</label>
	<select name="VideoLanguage" id="VideoLanguage">
		<option></option>
		{VideoLanguage}
	</select>
	
	<br />
	<label for="VideoTitle">Video Title</label>
	<input type="text" name="VideoTitle" id="VideoTitle" value=""/>
	
	<br />
	<label for="VideoOtherTitle">Video Other Title</label>
	<input type="text" name="VideoOtherTitle" id="VideoOtherTitle" value=""/>
	
	<br />
	<label for="countries" >Country</label>
	<select name="country" id="country">
		<option></option>
		{Countries}
	</select>
	
	<br />
	<label for="Genres">Genres</label>
        <div style="overflow: auto; width: 100%; height: 80px; border: 1px solid #336699; padding-left: 5px">
            <input type="checkbox" name="genres" value="1"> Genre 1<br>
            <input type="checkbox" name="genres" value="2"> Genre 2<br>
            <input type="checkbox" name="genres" value="3"> Genre 3<br>
            <input type="checkbox" name="genres" value="4"> Genre 4<br>
            <input type="checkbox" name="genres" value="5"> Genre 5<br>
            <input type="checkbox" name="genres" value="6"> Genre 6<br>
            <input type="checkbox" name="genres" value="7"> Genre 7<br>
            <input type="checkbox" name="genres" value="8"> Genre 8<br>
            <input type="checkbox" name="genres" value="9"> Genre 9<br>
            <input type="checkbox" name="genres" value="10"> Genre 10<br>
        </div>

	<br />
	<label for="ReleaseDate" >Release Date</label>
	<select name="rd-month" id="rd-month"><option></option>{rd-month}</select>
	<select name="rd-day" id="rd-day"><option></option>{rd-day}</select>
	<select name="rd-year" id="rd-year"><option></option>{rd-year}</select>
	
	<br />
	<label for="casting">Casting</label>
	<input type="text" name="casting" id="casting" value=""/>

	<br />
	<label for="director">Director</label>
	<input type="text" name="director" id="director" value=""/>

	<label for="length" >Length</label>
	<select name="length" id="length">
		<option></option>
	{length}</select>	minute(s)
	
	<br />
	<label for="tags">Casting</label>
	<input type="text" name="tags" id="tags" value=""/>

	<br />
	<label for="synopsis">Synopsis</label>
	<textarea id="synopsis" name="synopsis" rows="5"></textarea>
		
    <br />
	<label for="ThumbnailImage" id="label-VideoImage">Thumbnail Image</label>
	<input type="file" name="ThumbnailImage"/>
	
	<br />
	<label for="LargeImage" id="label-VideoImage">Large Image</label>
	<input type="file" name="LargeImage"/>
	
	<br />	
	<div style="width:100%; text-align: center;">
		<input type="submit" id="forum-submit" value="submit" />
	</div>
	<input type="hidden" name="dataonly" id="dataonly" value="yes"/>
	<input type="hidden" name="getcontroller" id="getcontroller" value="video"/>
	<input type="hidden" name="getsection" id="getsection" value="AddVideo"/>
	<input type="hidden" name="ssec" id="ssec" value="AddVideo"/>
	<input type="hidden" name="h" id="h" value="SubmitVideo"/>
</form>
</div>
<!-- end add video form -->		


   	 
    </TD>
	</TR>
	</TBODY>
	</TABLE>
	</DIV></div>
</div>
<br /><br />




























