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
		border-width: 1px;
		overflow-x: hidden;
		overflow-y: scroll;
		margin-bottom: 5px;
		border-style: dashed;
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
	}
	#teamchat-textarea{
		width: 95%;
		padding-top:0PX;
		vertical-align: top;
		border-width: 1px;
		border-style: dashed; 
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		resize: none;
	}
	.chat-username{
		text-decoration:underline;
		font-weight: bold;
		color: blue;
		display: block-inline;
	}
	.chat-username:after {
	    content: ":";
	}
	.chat-text{
		color: black;
		display: block-inline;
	}
	.chat-text:before{
		content: " ";
	}
	.chat-date{
		font-size: 9px;
		margin-top: 1px;
	}
	#send-state{
		float:left;
		width:auto;
	}
	#div-submit{
		float:right
	}
	.chat-line-container{
		width: 95%;
		border-width:1px;
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		border-style: solid;
		margin: 0 auto;
		margin-top: 2px;
		margin-bottom: 2px; 
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
		<textarea id='teamchat-textarea' rows="2" onkeydown="if (event.keyCode == 13) { SendMessage(); return false; }"></textarea>
		<div style="width: 100%;">
		<div id='send-state'></div>
		<!--<div id='div-submit'><input type="submit" value="Send" onclick="SendMessage(); return false;"/></div>-->
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


