<style>
	#viewsubtitle-infocontainer{
		width: 100%;
	}
	.viewsubtitle-infocontainer-row{
		width: 100%;
		height: 32px;
		clear: both;
		display: table;
		margin-bottom: 2px;
	}
	
	.viewsubtitle-infocontainer-row div{
		border-width: 1px;
		border-style: solid;
		border-color: #DFE8EE;
		height: 32px;
		vertical-align: middle;
		display: table-cell;
		line-height: 32px;
		padding-left: 2px;
		padding-right: 2px;
	}

	.viewsubtitle-infocontainer-left{
		float: left;
		width: 23%;
		font-weight: bold;
		background-color: #F5FBFE;
		margin-right: 1px;
	}
	.viewsubtitle-infocontainer-right{
		float: right;
		width: 75%;
	}
	.viewsubtitle-infocontainer-raterow{
		margin-top: 4px;
		padding-left: 2px;
	}
</style>

<div class="row">
	<div class="panel panel-primary col-md-13">
	  <!-- Default panel contents -->
	  <div class="panel-heading">{title}</div>
	  <!-- Table -->
	  <table class="table table-striped">
	  	<tbody>
	  		<tr>
	  			<td class="col-md-3"><label>{releasename}</label></td>
	  			<td>{Creleasename}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-3"><label>{version}</label></td>
	  			<td>{Cversion}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-3"><label>{country}</label></td>
	  			<td>{Ccountry}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-3"><label>{language}</label></td>
	  			<td>{Clanguage}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-3"><label>{fps}</label></td>
	  			<td>{Cfps}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-3"><label>{format}</label></td>
	  			<td>{Cformat}</td>
	  		</tr>
	  		<tr>
	  			<td class="col-md-3"><label>{cds}</label></td>
	  			<td>{Ccds}</td>
	  		</tr>
	  	</tbody>
	  </table>
	</div>
</div>

