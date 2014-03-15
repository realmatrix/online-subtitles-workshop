<style>
	#submitnewvideo input[type=text], input[type=file]{width: 100%;	margin: 5px;}
	#submitnewvideo textarea{width: 100%;}
	.div-error{width: 100%;	border: 1px; border-color: red; padding: 20px; color: red;}
	.div-message{width: 100%; border: 1px; border-color: green;	padding: 20px; color: green;}
	.checkbox-genre{float: left; width: 20%;}
</style>






<div class="row">
	<div class="col-md-13">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">{title}</h3>
		  </div>
		  <div class="panel-body">
	
	
		  	
<form class="well-lg" id="submitnewvideo" method="post" action="index.php">



		<label for="VideoType">{Type}</label>
		<select class="form-control" name="VideoType" id="VideoType">
			<option></option>
			{VideoType}
		</select>


        <label for="VideoCategory">{Category}</label>
    	<select class="form-control" name="VideoCategory" id="VideoCategory">
			<option value=""> </option>
			{VideoCategory}
		</select>

        <label for="VideoLanguage">{Language}</label>
    	<select class="form-control" name="VideoLanguage" id="VideoLanguage">
			<option value=""> </option>
			{VideoLanguage}
		</select>

        <label for="VideoTitle">{Title}</label>
        <input type="text" class="form-control" name="VideoTitle" id="VideoTitle" value="{htitle}" placeholder="" />

		<label for="VideoOtherTitle">{OtherTitle}</label>
		<input type="text" class="form-control" name="VideoOtherTitle" id="VideoOtherTitle" value="{hothertitle}" placeholder="" />
		
		<label for="VideoUrl">{VideoUrl}</label>
		<input type="text" class="form-control" name="VideoUrl" id="VideoUrl" value="{hvideourl}" placeholder="" />
		
		<label for="countries" >{Country}</label>
		<select class="form-control" name="country" id="country">
			<option value=""> </option>
			{Countries}
		</select>		
		
		<label for="Genres">{Genres}</label>
	        <div style="padding-top: 3px; overflow: auto; width: 100%; height: 160px; border: 0px solid #b0b0b0; padding-left: 5px">
				{VideoGenres}
	    </div>		
		
		<label for="ReleaseDate">{ReleaseDate}</label>
		<select class="form-select" name="rd-month" id="rd-month"><option value=""> </option>{rd-month}</select>
		<select class="form-select" name="rd-day" id="rd-day"><option value=""> </option>{rd-day}</select>
		<select class="form-select" name="rd-year" id="rd-year"><option value=""> </option>{rd-year}</select>

		<br />
		
		<label for="casting">{Casting}</label>
		<input class="form-control" type="text" name="casting" id="casting" value="{hcasting}"  />
		
	<label for="director">{Director}</label>
	<input class="form-control" type="text" name="director" id="director" value="{hdirector}" />
	
	<label for="length" >{Length}</label>
	<select name="length" id="length">
		<option value=""> </option>
	{length}
	</select>	minute(s)
	
	<br />
	
	<label for="tags">{Tags}</label>
	<input class="form-control" type="text" name="tags" id="tags" value="{htags}"  />
	
	<label for="synopsis">{Synopsis}</label>
	<textarea class="form-control" id="synopsis" name="synopsis" rows="5" >{hsynopsis}</textarea>
	
	<br />
			
	<button type="submit" class="btn btn-primary pull-left">{Submit}</button> 

	<input type="hidden" name="page" value="{page}" /> 
	<input type="hidden" name="sec" value="{sec}" /> 
	<input type="hidden" name="ssec" value="AddVideo" />
	<input type="hidden" name="h" value="SubmitVideo" />
</form>		  	
		  	
		  	
		  	
		  	
		  	
		  	
		  </div>
		</div>
	</div>
</div>

		  	
		  	
		  	
		  	


