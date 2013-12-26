<script>
var thumbimg = document.getElementById("imgvideothumbnail");
thumbimg.onerror = function () { 
    this.style.display = "none";
}
</script>
<style>
	.table-viewvideo{
		width: 100%;
	}
	.thumnail-container{
		width: 210px; height: 280px; background-color: black; text-align: center;
		text-align: center;
		vertical-align: middle;
	}
	.video-thumbnail{
		max-height: 100%;
		max-width: 100%;
	}
	.video-rate-li{
		display:inline-block;
		width: 32px;
		height: 32px;
		margin: 0 0 0 0;
		padding: 0 0 0 0;
	}
</style>


<DIV class="catglow" style="width:100%;">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	{VideoTitle}                
</DIV>
</DIV>
</DIV>
<DIV class="trigger active">
</DIV>
<DIV class="collapsethis">

<TABLE class="cat" cellSpacing="0" cellPadding="0" width="100%">
  <TBODY>
  <TR>
  	<td><div class="thumnail-container"><img id='imgvideothumbnail' class='video-thumbnail' src="uploads/thumbnails/video/{thumbnail}" /></div></td>
    <TD class="forumdetails" style="width: 100%;"><SPAN class="forum-descriptions">


	<table class='table-viewvideo'>
		<tr>
			<td style="width: 30%;">{OtherTitle}</td>
			<td style="width: 70%;">{VideoOtherTitle}</td>	
		</tr>
		<tr>
			<td>{Country}</td>
			<td>{VideoCountry}</td>	
		</tr>
		<tr>
			<td>{Genre}</td>
			<td>{VideoGenre}</td>	
		</tr>
		<tr>
			<td>{ReleaseDate}</td>
			<td>{VideoReleaseDate}</td>	
		</tr>
		<tr>
			<td>{Casting}</td>
			<td>{VideoCasting}</td>	
		</tr>
		<tr>
			<td>{Director}</td>
			<td>{VideoDirector}</td>	
		</tr>
		<tr>
			<td>{Length}</td>
			<td>{VideoLength} Minutes</td>	
		</tr>
		<tr>
			<td colspan="2">
				<div style='float:left;'>
					<ul class='video-rate'>
						<li class='video-rate-li'><img src='templates/default2/tmp/images/star_empty.png' id='vr-star1' /></li>
						<li class='video-rate-li'><img src='templates/default2/tmp/images/star_empty.png' id='vr-star2' /></li>
						<li class='video-rate-li'><img src='templates/default2/tmp/images/star_empty.png' id='vr-star3' /></li>
						<li class='video-rate-li'><img src='templates/default2/tmp/images/star_empty.png' id='vr-star4' /></li>
						<li class='video-rate-li'><img src='templates/default2/tmp/images/star_empty.png' id='vr-star5' /></li>
						<li class='video-rate-li'><img src='templates/default2/tmp/images/star_empty.png' id='vr-star6' /></li>
						<li class='video-rate-li'><img src='templates/default2/tmp/images/star_empty.png' id='vr-star7' /></li>
						<li class='video-rate-li'><img src='templates/default2/tmp/images/star_empty.png' id='vr-star8' /></li>
						<li class='video-rate-li'><img src='templates/default2/tmp/images/star_empty.png' id='vr-star9' /></li>
						<li class='video-rate-li'><img src='templates/default2/tmp/images/star_empty.png' id='vr-star10' /></li>
					</ul>
				</div>
				<div style='float:right'>
			<img src='templates/default2/tmp/images/favorites-add.png' alt='add to favourites'/>
				</div>
			</td>
		</tr>
	</table>


</td>
</tr>
</tbody>
</table>

</DIV>
</div>
<br>