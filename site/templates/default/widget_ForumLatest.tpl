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
		height: 270px;
		overflow-y: scroll;
		overflow-x: none;
	}
  </style>


<div class="row">
	<div class="col-md-11">
<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Latest Topics
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
        <div class="accordion-list-container">
        	{LatestTopic}
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Latest Posts
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
      	<div class="accordion-list-container">
        {LatestPost}
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
        Top Topics
      </a>
    </div>
    <div id="collapseThree" class="accordion-body collapse">
      <div class="accordion-inner">
      	<div class="accordion-list-container">
        {TopTopics}
        </div>
      </div>
    </div>
  </div>
</div>		
	</div>
</div>

