                </div>

                <div class="col-md-4">
                    <!-- right column -->
                    <!-- start right column -->

<!-- login widget -->
	{widget_login}
<!-- end login widget -->

<!-- user info widget -->
	{widget_UserInfo}
<!-- end user info widget-->

<!-- Manage account -->
	{widget_Manage}
<!-- end Manage account-->

<!-- Quick Access widget -->
	{widget_QuickAccess}
<!-- end Quick Access widget-->

<!-- team chat -->
	{widget_TeamChat}
<!-- end team chat widget -->

<!-- shout box widget -->
	{widget_shoutbox}
<!-- end shout box widget -->
	
<!-- News Letter Widget-->
	{widget_NewsLetter}
<!-- end of news letter widget -->

                </div>
            </div>            

<!-- top10 widget start -->
<div class="row">
{widget_top10}
</div>
<!-- top 10 widget end -->


<!-- statistics start -->
<div class="row">
	<div class="col-md-13">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Statistics</h3>
		  </div>
		  <div class="panel-body">
In total there are <STRONG>{TotalOnline}</STRONG> users 
online :: {OnlineRegistered} registered, {OnlineHidden} hidden and {OnlineGuests} guests <BR><BR>Registered 
users: {TotalRegistered} registered users<BR><BR>
Total videos <STRONG>{TotalVideos}</STRONG> • Total subtitles 
<STRONG>{TotalSubtitles}</STRONG> • Total members <STRONG>{TotalUsers}</STRONG> • Our newest member 
<STRONG><A href="index.php?page=user&sec=profile&u=">{LatestUser}</A></STRONG>
		  </div>
		</div>
	</div>
</div>
<!-- statistics end-->
        </div><!-- container end -->