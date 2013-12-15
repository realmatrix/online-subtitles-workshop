<script>
var interval = setInterval(GetChat,10000);
	function GetChat() {
		var str = "index.php?page=query&sec=team&ssec=QueryTeam&h=get&sid="+{sid};	
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
		     document.getElementById('teamchat-messages').innerHTML=xmlhttp.responseText;
		     }
		   }
		 xmlhttp.open("GET", str, false);
		 xmlhttp.send();
	}
	
	function SendMessage(){
		var content = document.getElementById('teamchat-textarea').value;
		var text = encodeURIComponent(content.textContent);
		var str = "index.php?page=query&sec=team&ssec=QueryTeam&h=set&sid="+{sid}+"&text="+text;	
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
		     // document.getElementById('teamchat-messages').innerHTML=xmlhttp.responseText;
		     }
		   }
		 xmlhttp.open("GET", str, false);
		 xmlhttp.send();
		 document.getElementById('teamchat-textarea').value = "";
	}
	GetChat(); 
</script>
<style>
	#teamchat-messages{
		width: 100%;
		height: 200px;
		border-style: solid;
		border-width: 1px;
		overflow-x: hidden;
		margin-bottom: 5px;
	}
	#teamchat-textarea{
		width: 95%;
		height: 40px;
	}
</style>
<DIV class="catglow" style="width:100%;">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	Team Chat                
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


<div id="widgt-teamchat">
	<div id='teamchat-messages'></div>
	<form>
		<textarea id='teamchat-textarea'></textarea>
		<div style="width: 100%; text-align: right;"><input type="submit" value="Send" onclick="SendMessage(); return false;"/></div>
	</form>
</div>


</td>
</tr>
</tbody>
</table>

</DIV>
</div>
<br>


