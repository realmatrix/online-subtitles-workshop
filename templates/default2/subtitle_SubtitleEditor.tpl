<script>
	function ShowHide(show, hide){
		var elm2 = document.getElementById(hide);
 		elm2.style.display = "none"; //hide
		var elm1 = document.getElementById(show);
 		elm1.style.display = "block"; //show
 		if( show.substring(0,12) == "ttransscript" || show.substring(0,5) == "tlend" || show.substring(0,7) == "tlstart" ){
 			document.getElementById(show).innerHTML = document.getElementById(hide).innerHTML;
 			document.getElementById(show).focus();
 			document.getElementById(show).select();
 		}
	}
	
	function SaveSubtitle(type, pid, taid, sid, cid, lid) {
		var save = false;
	if(document.getElementById(pid).innerHTML != document.getElementById(taid).value){ save = true;}	
	if(save === true){
		var content = document.getElementById(taid).value;
		content = encodeURIComponent(content);
		document.getElementById(pid).innerHTML="updating...";
		var str = "index.php?page=query&sec=subtitle&ssec=QuerySubtitle&h=edit&type="+type+"&sid="+sid+"&cid="+cid+"&lid="+lid+"&content="+content;	
		if (window.XMLHttpRequest)
		   {
		   xmlhttp=new XMLHttpRequest();
		   }
		 else
		   {
		   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		   }
		 xmlhttp.onreadystatechange=function()
		   {
		   if (xmlhttp.readyState==4 && xmlhttp.status==200)
		     {
		     document.getElementById(pid).innerHTML=xmlhttp.responseText;
		     }
		   }
		 xmlhttp.open("GET", str, false);
		 xmlhttp.send();
	}
	}
</script>

<style>
	.NewLine{
		clear: left;
	}
	#editor-SubtitleContent{
		width: 100%;
		height: 600px;
		overflow-y: scroll;
	}
	.otext
	{
		width: 100%;
		text-align: left;
		clear: left;
		font-weight: bold;
		color: #000066;
	}
	.ltime{
		float: left;
		width: 20%;
		height: 50px;
	}
	.ltext{
		float: left;
		width: 70%;
		height: 50px;
		text-align: left;
	}
	.tlstart{
	display: none; /* hide start time textbox*/
	width: 90%;
	}
	.tlend{
	display: none; /* hide start time textbox*/
	width: 90%;
	}
	.lstart{
		height: 50%;
	}
	.lend{
		height: 50%;
	}
	.tatransscript{
		display: none; /* hide transscript textbox*/
		width: 90%;
	}
	.ptransscript{
		width: 90%;
		height: 100%;
	}
	.LineNumber{
		float: left;
		width: 40px;
		color: #082C52;
	}
</style>
<DIV class="catglow">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	{title} - {CDTitle}                
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



<!-- subtitle editor -->
<div id="subtitleeditor" style="width: 99%;">
	{EditorContent}
</div>
<!-- end subtitle editor -->	



	</SPAN></TD>
	</TR>
	</TBODY>
	</TABLE>
</DIV></div>

<br>