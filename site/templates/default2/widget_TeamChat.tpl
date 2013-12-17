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
		 scroll();
	}
	
	function SendMessage(){
		document.getElementById('send-state').innerHTML = "sending...";
		var content = document.getElementById('teamchat-textarea').value;
		var text = encodeURIComponent(content);
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
		 document.getElementById('send-state').innerHTML = "";
		 scroll();
	}
	
	function scroll(){
		var objDiv = document.getElementById("teamchat-messages");
		objDiv.scrollTop = objDiv.scrollHeight;
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
		overflow-y: scroll;
		margin-bottom: 5px;
	}
	#teamchat-textarea{
		width: 97%;
		height: 40px;
		padding-top:0PX;
		vertical-align: top;
	}
	.chat-username{
		float:left;
		text-decoration:underline;
		font-weight: bold;
	}
	.chat-date{
		float:right;
		font-size: 9px;
	}
	.chat-text{
		clear: both;
		width:auto;
		color: blue;
	}
	#send-state{
		float:left;
		width:auto;
	}
	#div-submit{
		float:right
	}
	.chat-line-container{
		border-bottom-width:1px;
		border-bottom-color:black;
		border-bottom-style: solid;
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
		<input type='text' id='teamchat-textarea' />
		<div style="width: 100%;">
		<div id='send-state'></div>
		<div id='div-submit'><input type="submit" value="Send" onclick="SendMessage(); return false;"/></div>
		</div>
	</form>
</div>


</td>
</tr>
</tbody>
</table>

</DIV>
</div>
<br>


