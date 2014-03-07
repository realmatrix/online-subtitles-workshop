<style>
	#privatemessages-view-container{
		width: 100%;
	}
	.privatemessages-view-row{
		width: 100%;
		height: 32px;
		clear: both;
		display: table;
		margin-bottom: 2px;
	}
	
	.privatemessages-view-row div{
		border-width: 1px;
		border-style: solid;
		border-color: #DFE8EE;
		height: 32px;
		vertical-align: middle;
		display: table-cell;
		line-height: 32px;
		padding-left: 4px;
		padding-right: 2px;
		overflow: hidden;
	}

	.privatemessages-view-left{
		float: left;
		width: 15%;
		font-weight: bold;
		background-color: #F5FBFE;
		margin-right: 2px;
	}
	.privatemessages-view-right{
		float: right;
		width: 82.5%;
	}
	.privatemessages-view-singlerow-content{
		border-width: 1px;
		border-style: solid;
		border-color: #DFE8EE;
		width: 99%;
		min-height: 32px;
		padding-left: 4px;
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



<!-- view message -->
<div id='privatemessages-view-container'>

	<div class='privatemessages-view-row'>
		<div class='privatemessages-view-left'>{from}</div>
		<div class='privatemessages-view-right'>{mfrom}</div>
	</div>
	<div class='privatemessages-view-row'>
		<div class='privatemessages-view-left'>{date}</div>
		<div class='privatemessages-view-right'>{mdate}</div>
	</div>
	<div class='privatemessages-view-row'>
		<div class='privatemessages-view-left'>{subject}</div>
		<div class='privatemessages-view-right'>{msubject}</div>
	</div>

		<div class='privatemessages-view-singlerow-content'>{mmessage}</div>


</div>
<!-- end view message -->	



	</SPAN></TD>
	</TR>
	</TBODY>
	</TABLE>
</DIV></div>

<br>