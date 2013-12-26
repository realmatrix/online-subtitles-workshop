<script>
var thumbimg = document.getElementById("imgvideothumbnail");
thumbimg.onerror = function () { 
    this.style.display = "none";
   }
    function StarHover(id, total){
    	for (var i=1;i<=total;i++)
		{ 
		document.getElementById("vr-star"+i).src = "templates/default2/tmp/images/star_empty.png";
		}
    	for (var i=1;i<=id;i++)
		{ 
		document.getElementById("vr-star"+i).src = "templates/default2/tmp/images/star_full.png";
		}
    }
    function StarDefault(value, total){
    	for (var i=1;i<=total;i++)
		{ 
		document.getElementById("vr-star"+i).src = "templates/default2/tmp/images/star_empty.png";
		}
    	for (var i=1;i<=value;i++)
		{ 
		document.getElementById("vr-star"+i).src = "templates/default2/tmp/images/star_full.png";
		}
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
		width: 24px;
		height: 24px;
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
						   <li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=1"><img src='templates/default2/tmp/images/star_empty.png' id='vr-star1' onmouseover="StarHover(1, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
						--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=2"><img src='templates/default2/tmp/images/star_empty.png' id='vr-star2' onmouseover="StarHover(2, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
						--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=3"><img src='templates/default2/tmp/images/star_empty.png' id='vr-star3' onmouseover="StarHover(3, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
						--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=4"><img src='templates/default2/tmp/images/star_empty.png' id='vr-star4' onmouseover="StarHover(4, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
						--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=5"><img src='templates/default2/tmp/images/star_empty.png' id='vr-star5' onmouseover="StarHover(5, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
						--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=6"><img src='templates/default2/tmp/images/star_empty.png' id='vr-star6' onmouseover="StarHover(6, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
						--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=7"><img src='templates/default2/tmp/images/star_empty.png' id='vr-star7' onmouseover="StarHover(7, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
						--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=8"><img src='templates/default2/tmp/images/star_empty.png' id='vr-star8' onmouseover="StarHover(8, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
						--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=9"><img src='templates/default2/tmp/images/star_empty.png' id='vr-star9' onmouseover="StarHover(9, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
						--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=10"><img src='templates/default2/tmp/images/star_empty.png' id='vr-star10' onmouseover="StarHover(10, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li>
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