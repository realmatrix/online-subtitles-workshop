<script>
	function ShowHide(show, hide){
		var elm2 = document.getElementById(hide);
 		elm2.style.display = "none"; //hide
		var elm1 = document.getElementById(show);
 		elm1.style.display = "block"; //show
	}
</script>
<style>
	#editor-SubtitleContent{
		width: 100%;
		height: 600px;
		overflow-y: scroll;
	}
	.otext{
		width: 100%;
		text-align: left;
		clear: left;
	}
	.ltime{
		float: left;
		width: 25%;
		height: 50px;
	}
	.ltext{
		float: left;
		width: 75%;
		height: 50px;
		text-align: left;
	}
	.tlstart{
	display: none; /* hide start time textbox*/
	}
	.tlend{
	display: none; /* hide start time textbox*/
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