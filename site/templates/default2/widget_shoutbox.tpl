<script>
var interval = setInterval(GetChat,10000);
	function GetChat() {
		var str = "index.php?page=query&sec=chat&ssec=QueryChat&h=get";	
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
		     document.getElementById('shoutbox-messages').innerHTML=xmlhttp.responseText;
		     }
		   }
		 xmlhttp.open("GET", str, false);
		 xmlhttp.send();
		 scroll();
	}
	
	function SendMessage(){
		document.getElementById('send-state').innerHTML = "sending...";
		var content = document.getElementById('shoutbox-textarea').value;
		var text = encodeURIComponent(content);
		var str = "index.php?page=query&sec=chat&ssec=QueryChat&h=set&text="+text;	
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
		     // document.getElementById('shoutbox-messages').innerHTML=xmlhttp.responseText;
		     }
		   }
		 xmlhttp.open("GET", str, false);
		 xmlhttp.send();
		 document.getElementById('shoutbox-textarea').value = "";
		 document.getElementById('send-state').innerHTML = "";
		 scroll();
	}
	
	function scroll(){
		var objDiv = document.getElementById("shoutbox-messages");
		objDiv.scrollTop = objDiv.scrollHeight;
	}
	
	function add(before, after){
		var selectionText = document.getElementById("shoutbox-textarea").value.substr(document.getElementById("shoutbox-textarea").selectionStart, document.getElementById("shoutbox-textarea").selectionEnd);
		var start = document.getElementById("shoutbox-textarea").value.substr(0, document.getElementById("shoutbox-textarea").selectionStart);
		var end = document.getElementById("shoutbox-textarea").value.substr(document.getElementById("shoutbox-textarea").selectionEnd, document.getElementById("shoutbox-textarea").value.length);
		document.getElementById("shoutbox-textarea").value = start + before + selectionText + after + end;
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
		if(document.getElementById("shoutbox-smiles").style.display == 'none'){
			document.getElementById("shoutbox-smiles").style.display = 'block';
			return true;
		}
		if(document.getElementById("shoutbox-smiles").style.display == 'block'){
			document.getElementById("shoutbox-smiles").style.display = 'none';
			return true;
		}
	}
	
	function addsmile(smile){
		document.getElementById("shoutbox-textarea").value = document.getElementById("shoutbox-textarea").value + "[s]" + smile + "[/s]"
	}
</script>
<style>
	#shoutbox-messages{
		width: 100%;
		height: 200px;
		border-width: 1px;
		overflow-x: hidden;
		overflow-y: scroll;
		margin-bottom: 5px;
		border-style: dashed;
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
	}
	#shoutbox-textarea{
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
	#shoutbox-toolbar img{
		float: right;
		cursor: hand;
	}
	.shoutbox-smiles{
		width: 100%;
	}
	.shoutbox-smiles img{
		width: 16px;
		height: 16px;
	}
	.shoutboxsmile-smile{content: url("templates/default2/tmp/smiles/emoticon_smile.png");}
	.shoutboxsmile-happy{content: url("templates/default2/tmp/smiles/emoticon_happy.png");}
	.shoutboxsmile-wink{content: url("templates/default2/tmp/smiles/emoticon_wink.png");}
	.shoutboxsmile-waii{content: url("templates/default2/tmp/smiles/emoticon_waii.png");}
	.shoutboxsmile-tonge{content: url("templates/default2/tmp/smiles/emoticon_tongue.png");}
	.shoutboxsmile-tongue{content: url("templates/default2/tmp/smiles/emoticon_tongue.png");}
	.shoutboxsmile-evilgrin{content: url("templates/default2/tmp/smiles/emoticon_evilgrin.png");}
	.shoutboxsmile-grin{content: url("templates/default2/tmp/smiles/emoticon_grin.png");}
	.shoutboxsmile-surprised{content: url("templates/default2/tmp/smiles/emoticon_surprised.png");}
</style>
<DIV class="catglow" style="width:100%;">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	ShoutBox                
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


	
<div id="widgt-shoutbox">
	<div id='shoutbox-messages'></div>
	
		<div id='shoutbox-smiles' style="display:none;">
			<img class='shoutboxsmile-smile' onclick="addsmile('smile');">
			<img class='shoutboxsmile-evilgrin' onclick="addsmile('evilgrin');">
			<img class='shoutboxsmile-grin' onclick="addsmile('grin');">
			<img class='shoutboxsmile-happy' onclick="addsmile('happy');">
			<img class='shoutboxsmile-surprised' onclick="addsmile('surprised');">
			<img class='shoutboxsmile-tongue' onclick="addsmile('tongue');">
			<img class='shoutboxsmile-waii' onclick="addsmile('waii');">
			<img class='shoutboxsmile-wink' onclick="addsmile('wink');">
		</div>
	
	<div id='shoutbox-toolbar'>
	<img src='templates/default2/tmp/icons/emoticon_smile.png' id='shoutbox-smile-button' onclick="showsmiles();">
	<img src='templates/default2/tmp/icons/text_underline.png' onclick="addunderline();">
	<img src='templates/default2/tmp/icons/text_italic.png' onclick="additalic();">
	<img src='templates/default2/tmp/icons/text_bold.png' onclick="addbold();">
	</div>
	<form>
		<textarea id='shoutbox-textarea' rows="2" onkeydown="if (event.keyCode == 13) { SendMessage(); return false; }"></textarea>
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
