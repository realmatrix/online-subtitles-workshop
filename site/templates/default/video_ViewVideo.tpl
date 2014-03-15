<script>
var thumbimg = document.getElementById("imgvideothumbnail");
thumbimg.onerror = function () { 
    this.style.display = "none";
   }
    function StarHover(id, total){
    	for (var i=1;i<=total;i++)
		{ 
		document.getElementById("vr-star"+i).src = "{TemplatePath}/tmp/images/star_empty.png";
		}
    	for (var i=1;i<=id;i++)
		{ 
		document.getElementById("vr-star"+i).src = "{TemplatePath}/tmp/images/star_full.png";
		}
    }
    function StarDefault(value, total){
    	for (var i=1;i<=total;i++)
		{ 
		document.getElementById("vr-star"+i).src = "{TemplatePath}/tmp/images/star_empty.png";
		}
    	for (var i=1;i<=value;i++)
		{ 
		document.getElementById("vr-star"+i).src = "{TemplatePath}/tmp/images/star_full.png";
		}
    }
</script>


<style>
	.video-rate{
		padding-left: 0px;
	}
	.video-rate-li{
		display:inline-block;
		width: 24px;
		height: 24px;
		margin: 0 0 0 0;
		padding: 0 0 0 0;
	}

	.viewvidieo-infocontainer-raterow{
		/*margin-top: 4px;*/
		/*padding-left: 2px;*/
		border-style: none;
	}
	.viewvidieo-infocontainer-raterowtd{
		border-width: 0px;
		border-style: none;
	}
	.viewvideo-rateresult-row{
		width: 100%;
		text-align: center;
		vertical-align: middle;
		border-width: 1px;
		border-style: solid;
		border-color: #DFE8EE;
		margin-top: 5px;
	}
	.viewvideo-rateresult-on, .viewvideo-rateresult-off{
		width: 16px;
		height: 16px;
	}
	.viewvideo-rateresult-off{
		content: url("{TemplatePath}/tmp/images/star_empty2.png");
	}
	.viewvideo-rateresult-on{
		content: url("{TemplatePath}/tmp/images/star_full2.png");
	}
	
</style>

<div class="row">
	<div class="panel panel-primary col-md-13">
	  <!-- Default panel contents -->
	  <div class="panel-heading">{VideoTitle}</div>
	  <!-- Table -->
	  <table class="table table-striped">
	  	<tbody>
	  		<tr>
	  			<td rowspan="12" class="col-md-3">
				  	<div class="thumnail-container"><img id='imgvideothumbnail' class='video-thumbnail' src="uploads/thumbnails/video/{thumbnail}" /></div>
				  	<div class="viewvideo-rateresult-row">{RateResult}</div>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-2"><label>{OtherTitle}</label></td>
	  			<td>{VideoOtherTitle}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-2"><label>{Country}</label></td>
	  			<td>{VideoCountry}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-2"><label>{Genre}</label></td>
	  			<td>{VideoGenre}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-2"><label>{ReleaseDate}</label></td>
	  			<td>{VideoReleaseDate}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-2"><label>{Casting}</label></td>
	  			<td>{VideoCasting}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-2"><label>{Director}</label></td>
	  			<td>{VideoDirector}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-2"><label>{Length}</label></td>
	  			<td>{VideoLength} Minutes</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-2"><label>{Category}</label></td>
	  			<td>{VCategory}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-2"><label>{SubtitlesCount}</label></td>
	  			<td>{VSubtitlesCount}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-2"><label>{CreatedBy}</label></td>
	  			<td>{VCreatedBy}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-2"><label>{Views}</label></td>
	  			<td>{VViews}</td>
	  		</tr>
			<tr>
			<td colspan="3" class="col-md-13">
				<div class='viewvidieo-infocontainer-raterow'>
							<div style='float:left;'>
								<ul class='video-rate'>
									   <li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=1"><img src='{TemplatePath}/tmp/images/star_empty.png' id='vr-star1' onmouseover="StarHover(1, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
									--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=2"><img src='{TemplatePath}/tmp/images/star_empty.png' id='vr-star2' onmouseover="StarHover(2, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
									--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=3"><img src='{TemplatePath}/tmp/images/star_empty.png' id='vr-star3' onmouseover="StarHover(3, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
									--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=4"><img src='{TemplatePath}/tmp/images/star_empty.png' id='vr-star4' onmouseover="StarHover(4, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
									--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=5"><img src='{TemplatePath}/tmp/images/star_empty.png' id='vr-star5' onmouseover="StarHover(5, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
									--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=6"><img src='{TemplatePath}/tmp/images/star_empty.png' id='vr-star6' onmouseover="StarHover(6, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
									--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=7"><img src='{TemplatePath}/tmp/images/star_empty.png' id='vr-star7' onmouseover="StarHover(7, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
									--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=8"><img src='{TemplatePath}/tmp/images/star_empty.png' id='vr-star8' onmouseover="StarHover(8, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
									--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=9"><img src='{TemplatePath}/tmp/images/star_empty.png' id='vr-star9' onmouseover="StarHover(9, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li><!--
									--><li class='video-rate-li'><a href="index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=rate&val=10"><img src='{TemplatePath}/tmp/images/star_empty.png' id='vr-star10' onmouseover="StarHover(10, 10);" onmouseout="StarDefault({rate}, 10);" /></a></li>
								</ul>
							</div>
							<div style='float:right'>
							<a href='index.php?page=video&sec=view&vid={vid}&ssec=ViewVideo&h=fav'>
							<img src='{TemplatePath}/tmp/images/favorites-add.png' alt='add to favourites'/>
							</a>
							</div>
				</div>
			</td>
			</tr>
	  	</tbody>
	  </table>
	</div>
</div>





<script>
	StarDefault({rate}, 10);
</script>