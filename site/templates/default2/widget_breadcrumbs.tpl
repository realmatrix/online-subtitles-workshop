<style>
	#breadcrumbs{
		width: 100%;
		height: 30px;
	}
	.BreadCrumbs:before{
		content: ' > ';
	}
	.BreadCrumbs{
		text-transform:capitalize;
	}
</style>

<div id="breadcrumbs">
	<a href="index.php">Home</a>
	{BreadCrumbs}
</div>