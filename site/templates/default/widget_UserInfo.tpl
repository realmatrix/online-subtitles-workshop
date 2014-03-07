<style>
	#UserInfo{
		width: 99%;
	}
	.widget-userinfo-row{
		width: 100%;
		clear: left;
	}
	.widget-userinfo-row div{
		border-width: 1px;
		border-style: solid;
		border-color: #DFE8EE;
		float: left;
		margin-bottom: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		padding-left: 1px;
		padding-right: 1px;
	}
	.widget-userinfo-welcome{
		width: 100%;
		background-color: #F5FBFE;
		padding-top: 2px;
		padding-bottom: 2px;
		padding-left: 1px;
		padding-right: 1px;
		font-weight: bold;
	}
	.widget-userinfo-left{
		background-color: #F5FBFE;
		width: 122px;
		font-weight: bold;
	}
	.widget-userinfo-right{
		width: 115px;
		margin-left: 2px;
	}
</style>


<div class="row">
	<div class="col-md-11">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Quick Info</h3>
		  </div>
		  <div class="panel-body">
<!-- user info -->
		<div id="UserInfo">

			
				<div align="left">
					
					

<div class='widget-userinfo-row'><div class='widget-userinfo-welcome'>{WelcomeBack} <b><a href="index.php?page=user&sec=profile&u={u}">{UserName}</a> </b></div></div>
					
<div class='widget-userinfo-row'><div class='widget-userinfo-left'>Videos</div><div class='widget-userinfo-right'><a href="index.php?page=video&sec=list">{CreatedVideos}</a></div></div>

<div class='widget-userinfo-row'><div class='widget-userinfo-left'>Subtitles</div><div class='widget-userinfo-right'> <a href="index.php?page=subtitle&sec=list">{CreatedSubtitles}</a></div></div>

<div class='widget-userinfo-row'><div class='widget-userinfo-left'>Followed Videos</div><div class='widget-userinfo-right'> {FavouriteVideos} </div></div>

<!-- <div class='widget-userinfo-row'><div class='widget-userinfo-left'>Finished Subtitles</div><div class='widget-userinfo-right'> {FinishedSubtitles} </div></div> -->

<div class='widget-userinfo-row'><div class='widget-userinfo-left'>Teams</div><div class='widget-userinfo-right'> <a href='index.php?page=team&sec=list'>{CreatedTeams}</a> </div></div>

<div class='widget-userinfo-row'><div class='widget-userinfo-left'>Joined Teams</div><div class='widget-userinfo-right'> {JoinedTeams} </div></div>

<div class='widget-userinfo-row'><div class='widget-userinfo-left'>Invitations</div><div class='widget-userinfo-right'> <a href="index.php?page=team&sec=joined">{invitations}</a> </div></div>

<div class='widget-userinfo-row'><div class='widget-userinfo-left'>Private Messages</div><div class='widget-userinfo-right'> <a href="index.php?page=message&sec=list">{PMS}</a> </div></div>				
					
				</div>
			
		</div>
<!-- end user info -->	
		  </div>
		</div>
	</div>
</div>
