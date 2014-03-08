  <style>
	.latest-threads-cell, .top-threads-cell, .latest-replies-cell{
		width: 98%;
		float:left;
		border-style: solid;
		border-width: 1px;
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		height: 30px;
		line-height: 30px;
		margin-left: 2px;
		margin-bottom: 2px;
		text-overflow: ellipsis;
	}	
	.latest-threads-cell a, .top-threads-cell a, .latest-replies-cell a{
		text-decoration: none;
		padding-left: 1px;
		padding-right: 1px;
	}
	.accordion-list-container{
		height: 240px;
		overflow-y: scroll;
		overflow-x: none;
	}
  </style>


<div class="row">
	<div class="col-md-11">
		
<div class="bs-example">
    <div class="panel-group" id="accordion">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Latest Topics</a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
                <div class="accordion-list-container">
        	{LatestTopic}
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Latest Posts</a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        {LatestPost}
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Top Topics</a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        {TopTopics}
      </div>
    </div>
  </div>
</div>
</div>		

	</div>
</div>





















