<style>
.col1{
	width: 120px;
}
.col2{
	text-align:left;
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

<div class="row">
	<div class="col-md-13">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">{title} - {CDTitle}</h3>
		  </div>
		  <div class="panel-body">



<!-- editor info -->
<div id="aboutus" style="width: 99%;">






<br />
       <table style="width: 100%;">
       	<tr>
       		<td class="col1">Subtitle Lines:</td>
       		<td class="col2">{TotalLines}</td>
       	</tr>
       	<tr>
       		<td>Finished Lines:</td>
       		<td>{FinishedLines}</td>
       	</tr>
       	<tr>
       		<td>Checked Lines:</td>
       		<td>{CheckedLines}</td>
       	</tr>   
       	<tr>
       		<td>Team Members:</td>
       		<td>{TeamMembers}</td>
       	</tr>   
       	<tr>
       		<td>Finished Progress:</td>
       		<td>
       			

<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="{FinishedProgress}" aria-valuemin="0" aria-valuemax="100" style="width: {FinishedProgress}%;">
    {FinishedProgress}%
  </div>
</div>
       			
       			
       		</td>
       	</tr> 	
       	<tr>
       		<td>Checked Progress:</td>
       		<td>
       			
       			
 <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="{CheckedProgress}" aria-valuemin="0" aria-valuemax="100" style="width: {CheckedProgress}%;">
    {CheckedProgress}%
  </div>
</div>      			
       			
       			
       		</td>
       	</tr>
       </table>
       









</div>
<!-- end editor info -->	



		  </div>
		</div>
	</div>
</div>