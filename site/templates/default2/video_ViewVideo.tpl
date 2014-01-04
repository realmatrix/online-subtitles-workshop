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
	#viewvideo-infocontainer{
		width: 100%;
	}
	.viewvidieo-infocontainer-row{
		width: 100%;
		height: 32px;
		clear: both;
		display: table;
		margin-bottom: 2px;
	}
	
	.viewvidieo-infocontainer-row div{
		border-width: 1px;
		border-style: solid;
		border-color: #DFE8EE;
		height: 32px;
		vertical-align: middle;
		display: table-cell;
		line-height: 32px;
		padding-left: 2px;
		padding-right: 2px;
	}

	.viewvideo-infocontainer-left{
		float: left;
		width: 27%;
		font-weight: bold;
		background-color: #F5FBFE;
		margin-right: 2px;
	}
	.viewvideo-infocontainer-right{
		float: right;
		width: 70%;
	}
	.viewvidieo-infocontainer-raterow{
		margin-top: 4px;
		padding-left: 2px;
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


<div id='viewvideo-infocontainer'>
	<div class='viewvidieo-infocontainer-row'>
		<div class='viewvideo-infocontainer-left'>{OtherTitle}</div>
		<div class='viewvideo-infocontainer-right'>{VideoOtherTitle}</div>
	</div>
	<div class='viewvidieo-infocontainer-row'>
		<div class='viewvideo-infocontainer-left'>{Country}</div>
		<div class='viewvideo-infocontainer-right'>{VideoCountry}</div>
	</div>
	<div class='viewvidieo-infocontainer-row'>
		<div class='viewvideo-infocontainer-left'>{Genre}</div>
		<div class='viewvideo-infocontainer-right'>{VideoGenre}</div>
	</div>
	<div class='viewvidieo-infocontainer-row'>
		<div class='viewvideo-infocontainer-left'>{ReleaseDate}</div>
		<div class='viewvideo-infocontainer-right'>{VideoReleaseDate}</div>
	</div>
	<div class='viewvidieo-infocontainer-row'>
		<div class='viewvideo-infocontainer-left'>{Casting}</div>
		<div class='viewvideo-infocontainer-right'>{VideoCasting}</div>
	</div>
	<div class='viewvidieo-infocontainer-row'>
		<div class='viewvideo-infocontainer-left'>{Director}</div>
		<div class='viewvideo-infocontainer-right'>{VideoDirector}</div>
	</div>
	<div class='viewvidieo-infocontainer-row'>
		<div class='viewvideo-infocontainer-left'>{Length}</div>
		<div class='viewvideo-infocontainer-right'>{VideoLength} Minutes</div>
	</div>
	<div class='viewvidieo-infocontainer-raterow'>
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
				<a href='index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=fav'>
				<img src='templates/default2/tmp/images/favorites-add.png' alt='add to favourites'/>
				</a>
				</div>
	</div>
</div>






</td>
</tr>
</tbody>
</table>

</DIV>
</div>
<br>
<script>
	StarDefault({rate}, 10);
</script>