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
		document.getElementById("shoutbox-textarea").value = document.getElementById("shoutbox-textarea").value + "[s]" + smile + "[/s]";
	}
	
	function setfocus(){
		document.getElementById("shoutbox-textarea").focus();
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
	.shoutbox-username{
		text-decoration:none;
		font-weight: bold;
		color: #3C7D3E;
		display: block-inline;
	}
	.shoutbox-username:after {
	    content: "";
	}
	.shoutbox-text{
		color: black;
		display: block-inline;
	}
	.shoutbox-text:before{
		content: " ";
	}
	.shoutbox-date{
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
	.shoutbox-line-container{
		width: 98%;
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
	.shoutbox-smile{content: url("templates/default2/tmp/smiles/emoticon_smile.png");}
	.shoutbox-happy{content: url("templates/default2/tmp/smiles/emoticon_happy.png");}
	.shoutbox-wink{content: url("templates/default2/tmp/smiles/emoticon_wink.png");}
	.shoutbox-waii{content: url("templates/default2/tmp/smiles/emoticon_waii.png");}
	.shoutbox-tonge{content: url("templates/default2/tmp/smiles/emoticon_tongue.png");}
	.shoutbox-tongue{content: url("templates/default2/tmp/smiles/emoticon_tongue.png");}
	.shoutbox-evilgrin{content: url("templates/default2/tmp/smiles/emoticon_evilgrin.png");}
	.shoutbox-grin{content: url("templates/default2/tmp/smiles/emoticon_grin.png");}
	.shoutbox-surprised{content: url("templates/default2/tmp/smiles/emoticon_surprised.png");}
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
			<img class='shoutbox-smile' onclick="addsmile('smile');" onmouseout="setfocus();">
			<img class='shoutbox-evilgrin' onclick="addsmile('evilgrin');" onmouseout="setfocus();">
			<img class='shoutbox-grin' onclick="addsmile('grin');" onmouseout="setfocus();">
			<img class='shoutbox-happy' onclick="addsmile('happy');" onmouseout="setfocus();">
			<img class='shoutbox-surprised' onclick="addsmile('surprised');" onmouseout="setfocus();">
			<img class='shoutbox-tongue' onclick="addsmile('tongue');" onmouseout="setfocus();">
			<img class='shoutbox-waii' onclick="addsmile('waii');" onmouseout="setfocus();">
			<img class='shoutbox-wink' onclick="addsmile('wink');" onmouseout="setfocus();">
		</div>
	
	<div id='shoutbox-toolbar'>
	<img src='templates/default2/tmp/icons/emoticon_smile.png' id='shoutbox-smile-button' onclick="showsmiles();">
	<img src='templates/default2/tmp/icons/text_underline.png' onclick="addunderline();" onmouseout="setfocus();">
	<img src='templates/default2/tmp/icons/text_italic.png' onclick="additalic();" onmouseout="setfocus();">
	<img src='templates/default2/tmp/icons/text_bold.png' onclick="addbold();" onmouseout="setfocus();">
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
