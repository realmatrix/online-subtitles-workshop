<script>
$(document).ready(function(){
     var photo = $("#photo").val();
    $.post("upload.php",{photo:photo},function(data){
      $("#status").html(data);
     });
});
</script>
<DIV class="catglow" style="width:100%;">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	{UploadThumbnail}                
</DIV>
</DIV>
</DIV>
<DIV class="trigger active">
</DIV>
<DIV class="collapsethis">

<TABLE class="cat" cellSpacing="0" cellPadding="0" width="100%">
  <TBODY>
  <TR>
    <TD class="forumdetails"><SPAN class="forum-descriptions">


<div id="div-synopsis">
	max width 210 max height 280
	<p id="status"></p>
	<form id="form1" enctype="multipart/formdata">
	<input type="file" id="photo" name="photo" />
	<input type="submit" id="save" name="save" value="Upload" />
	
	<input type="hidden" name="vid" value="{vid}" />
	<input type="hidden" name="dataonly" id="dataonly" value="yes"/>
	<input type="hidden" name="getcontroller" id="getcontroller" value="subtitle"/>
	<input type="hidden" name="getsection" id="getsection" value="Addsubtitle"/>
	<input type="hidden" name="ssec" id="ssec" value="Addsubtitle"/>
	<input type="hidden" name="h" id="h" value="Submitsubtitle"/>
		
	</form>
</div>


</td>
</tr>
</tbody>
</table>

</DIV>
</div>
<br>


