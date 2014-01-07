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
	
	function add(before, after){
		var selectionText = document.getElementById("teamchat-textarea").value.substr(document.getElementById("teamchat-textarea").selectionStart, document.getElementById("teamchat-textarea").selectionEnd);
		var start = document.getElementById("teamchat-textarea").value.substr(0, document.getElementById("teamchat-textarea").selectionStart);
		var end = document.getElementById("teamchat-textarea").value.substr(document.getElementById("teamchat-textarea").selectionEnd, document.getElementById("teamchat-textarea").value.length);
		document.getElementById("teamchat-textarea").value = start + before + selectionText + after + end;
	}
	
	function addbold(){
		add("[b]", "[/b]");
	}
	function addunderline(){
		add("[u]", "[/u]");
	}
	function additalic(){
		add("[i]", "[/i]");
	}
	
	function showsmiles(){
		if(document.getElementById("teamchat-smiles").style.display == 'none'){
			document.getElementById("teamchat-smiles").style.display = 'block';
			return true;
		}
		if(document.getElementById("teamchat-smiles").style.display == 'block'){
			document.getElementById("teamchat-smiles").style.display = 'none';
			return true;
		}
	}
	
	function addsmile(smile){
		document.getElementById("teamchat-textarea").value = document.getElementById("teamchat-textarea").value + "[s]" + smile + "[/s]"
	}
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
		vertical-align: top;
		border-width: 1px;
		border-style: dashed; 
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		resize: none;
	}
	.chat-username{
		text-decoration:none;
		font-weight: bold;
		color: #3C7D3E;
		display: block-inline;
	}
	.chat-username:after {
	    content: "";
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
	#teamchat-toolbar img{
		float: right;
		cursor: hand;
	}
	.teamchat-smiles{
		width: 100%;
	}
	.teamchat-smiles img{
		width: 16px;
		height: 16px;
	}
	.teamchatsmile-smile{content: url("templates/default2/tmp/smiles/emoticon_smile.png");}
	.teamchatsmile-happy{content: url("templates/default2/tmp/smiles/emoticon_happy.png");}
	.teamchatsmile-wink{content: url("templates/default2/tmp/smiles/emoticon_wink.png");}
	.teamchatsmile-waii{content: url("templates/default2/tmp/smiles/emoticon_waii.png");}
	.teamchatsmile-tonge{content: url("templates/default2/tmp/smiles/emoticon_tongue.png");}
	.teamchatsmile-tongue{content: url("templates/default2/tmp/smiles/emoticon_tongue.png");}
	.teamchatsmile-evilgrin{content: url("templates/default2/tmp/smiles/emoticon_evilgrin.png");}
	.teamchatsmile-grin{content: url("templates/default2/tmp/smiles/emoticon_grin.png");}
	.teamchatsmile-surprised{content: url("templates/default2/tmp/smiles/emoticon_surprised.png");}
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
	
		<div id='teamchat-smiles' style="display:none;">
			<img class='teamchatsmile-smile' onclick="addsmile('smile');">
			<img class='teamchatsmile-evilgrin' onclick="addsmile('evilgrin');">
			<img class='teamchatsmile-grin' onclick="addsmile('grin');">
			<img class='teamchatsmile-happy' onclick="addsmile('happy');">
			<img class='teamchatsmile-surprised' onclick="addsmile('surprised');">
			<img class='teamchatsmile-tongue' onclick="addsmile('tongue');">
			<img class='teamchatsmile-waii' onclick="addsmile('waii');">
			<img class='teamchatsmile-wink' onclick="addsmile('wink');">
		</div>
	
	<div id='teamchat-toolbar'>
	<img src='templates/default2/tmp/icons/emoticon_smile.png' id='teamchat-smile-button' onclick="showsmiles();">
	<img src='templates/default2/tmp/icons/text_underline.png' onclick="addunderline();">
	<img src='templates/default2/tmp/icons/text_italic.png' onclick="additalic();">
	<img src='templates/default2/tmp/icons/text_bold.png' onclick="addbold();">
	</div>
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

<script>
	GetChat();
</script>
