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
		document.getElementById("teamchat-textarea").value = document.getElementById("teamchat-textarea").value + "[s]" + smile + "[/s]";
	}
	
	function setfocus(){
		document.getElementById("shoutbox-textarea").focus();
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
		width: 100%;
		vertical-align: top;
		border-width: 1px;
		border-style: dashed; 
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		resize: none;
		margin-top: 5px;
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
		cursor: pointer;
		cursor: hand;
	}
	.teamchat-smiles{
		width: 100%;
	}
	#teamchat-smiles img{
		width: 16px;
		height: 16px;
		cursor: pointer;
		cursor: hand;
	}
	.teamchatsmile-smile{content: url("{TemplatePath}/tmp/smiles/emoticon_smile.png");}
	.teamchatsmile-happy{content: url("{TemplatePath}/tmp/smiles/emoticon_happy.png");}
	.teamchatsmile-wink{content: url("{TemplatePath}/tmp/smiles/emoticon_wink.png");}
	.teamchatsmile-waii{content: url("{TemplatePath}/tmp/smiles/emoticon_waii.png");}
	.teamchatsmile-tonge{content: url("{TemplatePath}/tmp/smiles/emoticon_tongue.png");}
	.teamchatsmile-tongue{content: url("{TemplatePath}/tmp/smiles/emoticon_tongue.png");}
	.teamchatsmile-evilgrin{content: url("{TemplatePath}/tmp/smiles/emoticon_evilgrin.png");}
	.teamchatsmile-grin{content: url("{TemplatePath}/tmp/smiles/emoticon_grin.png");}
	.teamchatsmile-surprised{content: url("{TemplatePath}/tmp/smiles/emoticon_surprised.png");}
</style>

<div class="row">
	<div class="col-md-11">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Team Chat</h3>
		  </div>
		  <div class="panel-body">








	
<div id="widgt-teamchat">
	<div id='teamchat-messages'></div>
	
		<div id='teamchat-smiles' style="display:none;">
			<img class='teamchatsmile-smile' onclick="addsmile('smile');" onmouseout="setfocus();">
			<img class='teamchatsmile-evilgrin' onclick="addsmile('evilgrin');" onmouseout="setfocus();">
			<img class='teamchatsmile-grin' onclick="addsmile('grin');" onmouseout="setfocus();">
			<img class='teamchatsmile-happy' onclick="addsmile('happy');" onmouseout="setfocus();">
			<img class='teamchatsmile-surprised' onclick="addsmile('surprised');" onmouseout="setfocus();">
			<img class='teamchatsmile-tongue' onclick="addsmile('tongue');" onmouseout="setfocus();">
			<img class='teamchatsmile-waii' onclick="addsmile('waii');" onmouseout="setfocus();">
			<img class='teamchatsmile-wink' onclick="addsmile('wink');" onmouseout="setfocus();">
		</div>
	
	<div id='teamchat-toolbar'>
	<img src='{TemplatePath}/tmp/icons/emoticon_smile.png' id='teamchat-smile-button' onclick="showsmiles();">
	<img src='{TemplatePath}/tmp/icons/text_underline.png' onclick="addunderline();" onmouseout="setfocus();">
	<img src='{TemplatePath}/tmp/icons/text_italic.png' onclick="additalic();" onmouseout="setfocus();">
	<img src='{TemplatePath}/tmp/icons/text_bold.png' onclick="addbold();" onmouseout="setfocus();">
	</div>
	<form>
		<textarea id='teamchat-textarea' rows="2" onkeydown="if (event.keyCode == 13) { SendMessage(); return false; }"></textarea>
		<div style="width: 100%;">
		<div id='send-state'></div>
		<!--<div id='div-submit'><input type="submit" value="Send" onclick="SendMessage(); return false;"/></div>-->
		</div>
	</form>
</div>





		  </div>
		</div>
	</div>
</div>










<script>
	GetChat();
</script>
