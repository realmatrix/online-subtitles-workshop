<style>
	#myElement{
		width: 100%;
	}
</style>

<script type="text/javascript" src="apps/jwplayer/jwplayer.js"></script>
<div id="myElement">Loading the player...</div> 
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
		"playlist.position": "right",
		 "playlist.size": 312, 
		 height: 400, 
		 width: '100%',
	 }); 
</script>