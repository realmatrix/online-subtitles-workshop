<style>
	#breadcrumbs{
		width: 100%;
		height: 30px;
	}
	.BreadCrumbs:before{
		content: ' > ';
	}
	.BreadCrumbs:hover{
		text-decoration:none;
	}
	.BreadCrumbs{
		text-transform:capitalize;
	}
	.BcHome:hover{
		text-decoration:none;
	}
</style>

<div id="breadcrumbs">
	<a class="BcHome" href="index.php">Home</a>
	{BreadCrumbs}
</div>