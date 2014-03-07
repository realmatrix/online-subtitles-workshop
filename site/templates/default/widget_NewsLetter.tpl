<style>
	.nw-label{
		width: 100%;
		margin-top: 5px;
	}
	.nw-text{
		width: 98%;
	}
</style>







<div class="row">
	<div class="col-md-11">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">News Letter</h3>
		  </div>
		  <div class="panel-body">
<div id="NewsLetter" style="width: 99%;">
<form method="get" action="index.php">			
		<label for="name" class="nw-label">{NewsLetterName}</label>
		<input type="text" name="name" class="nw-text" />
		<label for="email" class="nw-label">{NewsLetterEmail}</label>
		<input type="text" name="email" class="nw-text" />
		<div style="width: 100%; text-align: right; padding-top: 2px;"><input type="submit" value="{NewsLetterSubmit}" /></div>

	<input type="hidden" name="h" value="add"/>
	<input type="hidden" name="w" value="{w}"/>
</form>
</div>	
		  </div>
		</div>
	</div>
</div>









