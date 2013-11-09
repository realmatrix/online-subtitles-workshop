<script type='text/javascript'>

var stopat = '';
var startat = '';
var currenttime = '';

function TimeToSecond(time){
	var hms = time; 
	var a = hms.split(':');
	var sec = Math.ceil(a[2]);
	alert(sec);
	var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]); 
	return seconds;
}

function rectime(sec) {
	var hr = Math.floor(sec / 3600);
	var min = Math.floor((sec - (hr * 3600))/60);
	sec -= ((hr * 3600) + (min * 60));
	sec += ''; min += '';
	while (min.length < 2) {min = '0' + min;}
	while (sec.length < 2) {sec = '0' + sec;}
	hr = (hr)?':'+hr:'';
	while (hr.length < 2) {hr = '0' + hr;}
	
	if(sec.substr(1,1) == '.') {sec = '0' + sec;}
	if(sec.length > 6){sec = sec.substr(0,6)}

	return hr + ':' + min + ':' + sec;
}

 jwplayer('myElement').onTime(function() { 

 currenttime = jwplayer().getPosition();
 
 currenttime = rectime(currenttime);
 
 document.getElementById('lineinfo-current').innerHTML = currenttime;
  
 if (jwplayer().getPosition() >= stopat && stopat != '')
 {
 jwplayer().pause();
 stopat = '';
 }
 
 });
 
</script>

<style>
	#lineinfo-subtitle{
		width: 100%;
		text-align: center;
		margin-bottom: 10px;
	}
	#lineinfo-start{
		float: left;
		width: 15%;
		text-align: left;
	}
	#lineinfo-current{
		float: left;
		width: 70%;
		text-align: center;
	}
	#lineinfo-stop{
		float: left;
		width: 15%;
		text-align: right;
	}
</style>
<DIV class="catglow">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	{title}                
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



<!-- line info -->
<div id="lineinfo" style="width: 100%;">


	<div id='lineinfo-subtitle'>...</div>
	<div id='lineinfo-start'>00:00:00.000</div>
	<div id='lineinfo-current'>00:00:00.000</div>
	<div id='lineinfo-stop'>00:00:00.000</div>
	

</div>
<!-- end line info -->	



	</SPAN></TD>
	</TR>
	</TBODY>
	</TABLE>
</DIV></div>

<br>