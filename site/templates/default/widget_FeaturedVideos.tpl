
<script type="text/javascript"> 
	jwplayer("myElement").setup({ 
		flashplayer: "apps/jwplayer/player.swf", 
		playlist: [ 
		{file: "{source0}", image: "uploads/thumbnails/video/{thumbnail0}", title: "{title0}", description: "{description0}"}, 
		{file: "{source1}", image: "uploads/thumbnails/video/{thumbnail1}", title: "{title1}", description: "{description1}"}, 
		{file: "{source2}", image: "uploads/thumbnails/video/{thumbnail2}", title: "{title2}", description: "{description2}"},
		{file: "{source3}", image: "uploads/thumbnails/video/{thumbnail3}", title: "{title3}", description: "{description3}"},
		{file: "{source4}", image: "uploads/thumbnails/video/{thumbnail4}", title: "{title4}", description: "{description4}"},
		{file: "{source5}", image: "uploads/thumbnails/video/{thumbnail5}", title: "{title5}", description: "{description5}"},
		{file: "{source6}", image: "uploads/thumbnails/video/{thumbnail6}", title: "{title6}", description: "{description6}"},
		{file: "{source7}", image: "uploads/thumbnails/video/{thumbnail7}", title: "{title7}", description: "{description7}"},
		{file: "{source8}", image: "uploads/thumbnails/video/{thumbnail8}", title: "{title8}", description: "{description8}"},
		{file: "{source9}", image: "uploads/thumbnails/video/{thumbnail9}", title: "{title9}", description: "{description9}"}, 
		], 
		listbar: {
        position: 'right',
        size: 310
    	},
		"playlist.position": "bottom",
		 "playlist.size": 60, 
		 height: 400, 
		 width: '100%',
	 }); 
</script>





<div class="bs-example col-md-13">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>
        </ol>   
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <img src="uploads/thumbnails/video/{thumbnail0}" alt="Slide 1">
                <div class="carousel-caption">
                  <h2><a href="index.php?page=video&sec=view&vid={id0}">{title0}</a></h2>
                  <p><a href="index.php?page=video&sec=view&vid={id0}">{description0}</a></p>
                </div>
            </div>
            <div class="item">
                <img src="uploads/thumbnails/video/{thumbnail1}" alt="Slide 2">
                <div class="carousel-caption">
                  <h2><a href="index.php?page=video&sec=view&vid={id1}">{title1}</a></h2>
                  <p><a href="index.php?page=video&sec=view&vid={id2}">{description1}</a></p>
                </div>
            </div>
            <div class="item">
                <img src="uploads/thumbnails/video/{thumbnail2}" alt="Slide 3">
                <div class="carousel-caption">
                  <h2><a href="index.php?page=video&sec=view&vid={id2}">{title2}</a></h2>
                  <p><a href="index.php?page=video&sec=view&vid={id2}">{description2}</a></p>
                </div>
            </div>
            <div class="item">
                <img src="uploads/thumbnails/video/{thumbnail3}" alt="Slide 4">
                <div class="carousel-caption">
                  <h2><a href="index.php?page=video&sec=view&vid={id3}">{title3}</a></h2>
                  <p><a href="index.php?page=video&sec=view&vid={id3}">{description3}</a></p>
                </div>
            </div>
            <div class="item">
                <img src="uploads/thumbnails/video/{thumbnail4}" alt="Slide 5">
                <div class="carousel-caption">
                  <h2><a href="index.php?page=video&sec=view&vid={id4}">{title4}</a></h2>
                  <p><a href="index.php?page=video&sec=view&vid={id4}">{description4}</a></p>
                </div>
            </div>
            <div class="item">
                <img src="uploads/thumbnails/video/{thumbnail5}" alt="Slide 6">
                <div class="carousel-caption">
                  <h2><a href="index.php?page=video&sec=view&vid={id5}">{title5}</a></h2>
                  <p><a href="index.php?page=video&sec=view&vid={id5}">{description5}</a></p>
                </div>
            </div>
            <div class="item">
                <img src="uploads/thumbnails/video/{thumbnail6}" alt="Slide 7">
                <div class="carousel-caption">
                  <h2><a href="index.php?page=video&sec=view&vid={id6}">{title6}</a></h2>
                  <p><a href="index.php?page=video&sec=view&vid={id6}">{description6}</a></p>
                </div>
            </div>
            <div class="item">
                <img src="uploads/thumbnails/video/{thumbnail7}" alt="Slide 8">
                <div class="carousel-caption">
                  <h2><a href="index.php?page=video&sec=view&vid={id7}">{title7}</a></h2>
                  <p><a href="index.php?page=video&sec=view&vid={id7}">{description7}</a></p>
                </div>
            </div>
            <div class="item">
                <img src="uploads/thumbnails/video/{thumbnail8}" alt="Slide 9">
                <div class="carousel-caption">
                  <h2><a href="index.php?page=video&sec=view&vid={id8}">{title8}</a></h2>
                  <p><a href="index.php?page=video&sec=view&vid={id8}">{description8}</a></p>
                </div>
            </div>
            <div class="item">
                <img src="uploads/thumbnails/video/{thumbnail9}" alt="Slide 10">
                <div class="carousel-caption">
                  <h2><a href="index.php?page=video&sec=view&vid={id9}">{title9}</a></h2>
                  <p><a href="index.php?page=video&sec=view&vid={id9}">{description9}</a></p>
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>