<style>
.col1{
	width: 100px;
}
.col2{
	text-align:left;
}
.progressbar{

width:600px;
height:16px;
margin:0 auto 20px auto;
padding:0px;

background:#cfcfcf;
border-width:1px;
border-style:solid;
border-color: #aaa #bbb #fff #bbb;    
box-shadow:inset 0px 2px 3px #bbb;    
}

.progressbar,
.progressbar-inner{
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    -o-border-radius:4px;
}

.progressbar-inner{
    width:77%; /* Change to actual percentage */
    height:100%;
    background:#999;
    
    background-size:18px 18px;
    background-color: #ac0;   
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%,
                        transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%,
                        transparent 75%, transparent);
    background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%,
                        transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%,
                        transparent 75%, transparent);
    background-image: -ms-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%,
                        transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%,
                        transparent 75%, transparent);
    background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%,
                        transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%,
                        transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%,
                        transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%,
                        transparent 75%, transparent);
    
    box-shadow:inset 0px 2px 8px rgba(255, 255, 255, .5), inset -1px -1px 0px rgba(0, 0, 0, .2);
}

/*
 * Color Options
 */
.progressbar-green .progressbar-inner{
    background-color:#ac0;
    width:100%;
}

.progressbar-blue .progressbar-inner{
    background-color:#7ce;
    width:90%;
}

.progressbar-yellow .progressbar-inner{
    background-color:#fb5;
    width:80%;
}

.progressbar-red .progressbar-inner{
    background-color:#f67;
    width:70%;
}

/*
 * Transition - just for fun
 */
.progressbar:hover .progressbar-inner{
    /* width:100%; */   
}
.progressbar .progressbar-inner,
.progressbar:hover .progressbar-inner{
    -webkit-transition:width .5s ease-in;  
    -moz-transition:width .5s ease-in; 
    -o-transition:width .5s ease-in; 
    transition:width .5s ease-in; 
}




h3{
    font-family:Pacifico, Arial, sans-serif;
    text-align:center;
    font-size:30px;
    text-shadow:0px 1px 1px #fff;
    color:#444;
    position:absolute;
    top:65px;
    width:100%;
}

.by{    
    position:absolute;
    bottom:30px;
    right:50px;
}

.by a, 
.by a:visited,
.by a:link, 
.by a:active{
    font-family:Pacifico, Arial, sans-serif;
    font-size:16px;
    text-shadow:0px 1px 1px #fff;
    color:#999;
    text-decoration:none;
}

.by a:hover{
    color:#f67;
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



<!-- editor info -->
<div id="aboutus" style="width: 99%;">






<br />
       <table style="width: 100%;">
       	<tr>
       		<td class="col1">Subtitle Lines:</td>
       		<td class="col2">{TotalLines}</td>
       	</tr>
       	<tr>
       		<td>Checked Lines:</td>
       		<td>{CheckedLines}</td>
       	</tr>   
       	<tr>
       		<td>Finished Lines:</td>
       		<td>{FinishedLines}</td>
       	</tr>
       	<tr>
       		<td>Team Members:</td>
       		<td>{TeamMembers}</td>
       	</tr>    	
       </table>
    <div class="progressbar progressbar-green">
        <div class="progressbar-inner" style="text-align: center;">100%</div>
    </div>

    <div class="progressbar progressbar-blue">
        <div class="progressbar-inner"></div>
    </div>

    <div class="progressbar progressbar-yellow">
        <div class="progressbar-inner"></div>
    </div>
    
    <div class="progressbar progressbar-red">
        <div class="progressbar-inner"></div>
    </div>
   








</div>
<!-- end editor info -->	



	</SPAN></TD>
	</TR>
	</TBODY>
	</TABLE>
</DIV></div>

<br>