<div class="row">
	<div class="col-md-13">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">{title}</h3>
		  </div>
		  <div class="panel-body">


				<!-- editor player -->
				<div id="subtitleeditor" style="width: 100%;">
					
				
				
					<script type="text/javascript" src="apps/jwplayer/jwplayer.js"></script>
					
					<div id="myElement">Loading the player...</div>
					
					<style>
						#myElement{
							width: 100%;
						}
					</style>
					
				
				<script type='text/javascript'>
					jwplayer('myElement').setup({
					flashplayer: 'apps/jwplayer/player.swf',
					image: 'uploads/thumbnails/video/{VideoImage}',
					file: '{VideoUrl}',
					title: '{VideoTitle}',
					description: '{VideoDescription}',
					height: 400,
					width: '100%',
					controlbar: 'bottom',
					   plugins: {
					     'captions-2': {
					       back: false,
					       file: 'index.php?page=query&sec=subtitle&ssec=QuerySubtitle&h=loadsubtitle&sid={sid}&cid={cid}&ext=.vtt',
					       label: "{SubtitleLanguage}",
					   }}	 
					});
				</script>
				</div>
				<!-- end editor player -->	
		  	
		  	
		  </div>
		</div>
	</div>
</div>





