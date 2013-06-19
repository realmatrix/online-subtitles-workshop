<script>
if(!window.jQuery)
{
   var script = document.createElement('script');
   alert("jquery not found loadin from addvideo ");
   script.type = "text/javascript";
   script.src = "apps/jquery/jquery-1.9.1.js";
   document.getElementsByTagName('head')[0].appendChild(script);
}
</script>
<script>
	// this is the id of the submit button
$("#submitButtonId").click(function() {

    var url = "path/to/your/script.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#idForm").serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

    return false; // avoid to execute the actual submit of the form.
});
</script>
<script>
// variable to hold request
var request;
// bind to the submit event of our form
$('form#submitnewvideo').submit(function(event){
	$('#SubmittingForm').show();
    // abort any pending request
    if (request) {
        request.abort();
    }
    //form validation
//    var faults = $('input').filter(function() {
    // filter input elements to required ones that are empty
//    return $(this).data('required') && $(this).val() === '';
//    }).css('background-color', 'red'); // make them attract the eye
//    if(faults.length) return false; // if any required are empty, cancel submit
//     var faults = $('select').filter(function() {
    // filter input elements to required ones that are empty
//    return $(this).data('required') && $(this).val() === '';
//    }).css('background-color', 'red'); // make them attract the eye
//    if(faults.length) return false; // if any required are empty, cancel submit   
    // setup some local variables
   var $form = $(this);
    // let's select and cache all the fields
    var $inputs = $form.find('input, select, button, textarea, file');
    // serialize the data in the form
    var serializedData = $form.serialize();
	//alert(serializedData);
    // let's disable the inputs for the duration of the ajax request
    $inputs.prop('disabled', true);

    // fire off the request to /form.php
    request = $.ajax({
        url: 'index.php',
        type: 'post',
        data: serializedData
    });

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // log a message to the console
        console.log('Hooray, it worked!');
        console.log('Response: '+response);        
        $('#SystemAjax_video_AddVideo').html(response);
    });

    // callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // log the error to the console
        console.error(
            'The following error occured: '+
            textStatus, errorThrown
        );
    });

    // callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // reenable the inputs
        $inputs.prop('disabled', false);
    });

    // prevent default posting of form
    event.preventDefault();
    return false;
});

</script>

<style>
	#submitnewvideo input[type=text], input[type=file]{width: 100%;	margin: 5px;}
	#submitnewvideo textarea{width: 100%;}
	.div-error{width: 100%;	border: 1px; border-color: red; padding: 20px; color: red;}
	.div-message{width: 100%; border: 1px; border-color: green;	padding: 20px; color: green;}
	.checkbox-genre{float: left; width: 20%;}
	#div-submitnewvideo{width:98%;}
</style>

<br /><br />
<div>
<DIV class="catglow" style="width:90%; margin: 0 auto;">
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
    <TD class="forumdetails">
    	
<div id='SubmittingForm' style='width:100%;text-align: center; display: none;'><img src="templates/default2/tmp/ajax-loader.gif"/></div>    	
{message}

{error}

<!-- add video form -->
<div id="div-submitnewvideo">
<form id="submitnewvideo" action="#" method="post">
	
	<label for="VideoType">{Type}</label>
	<select name="VideoType" id="VideoType" data-required="true">
		<option></option>
		{VideoType}
	</select>
	
	<label for="VideoCategory" >{Category}</label>
	<select name="VideoCategory" id="VideoCategory" data-required="true">
		<option value=""> </option>
		{VideoCategory}
	</select>
	
	<label for="VideoLanguage">{Language}</label>
	<select name="VideoLanguage" id="VideoLanguage" data-required="true">
		<option value=""> </option>
		{VideoLanguage}
	</select>
	
	<br />
	<label for="VideoTitle">{Title}</label>
	<input type="text" name="VideoTitle" id="VideoTitle" value="" data-required="true" />
	
	<br />
	<label for="VideoOtherTitle">{OtherTitle}</label>
	<input type="text" name="VideoOtherTitle" id="VideoOtherTitle" value="" />
	
	<br />
	<label for="countries" >{Country}</label>
	<select name="country" id="country"  data-required="true">
		<option value=""> </option>
		{Countries}
	</select>
	
	<br />
	<label for="Genres">{Genres}</label>
        <div style="overflow: auto; width: 100%; height: 100px; border: 1px solid #336699; padding-left: 5px">
			{VideoGenres}
        </div>

	<br />
	<label for="ReleaseDate"  data-required="true">{ReleaseDate}</label>
	<select name="rd-month" id="rd-month"><option value=""> </option>{rd-month}</select>
	<select name="rd-day" id="rd-day"><option value=""> </option>{rd-day}</select>
	<select name="rd-year" id="rd-year"><option value=""> </option>{rd-year}</select>
	
	<br />
	<label for="casting">{Casting}</label>
	<input type="text" name="casting" id="casting" value=""  data-required="true"/>

	<br />
	<label for="director">{Director}</label>
	<input type="text" name="director" id="director" value=""  data-required="true"/>

	<label for="length" >{Length}</label>
	<select name="length" id="length" data-required="true">
		<option value=""> </option>
	{length}</select>	minute(s)
	
	<br />
	<label for="tags">{Tags}</label>
	<input type="text" name="tags" id="tags" value=""  data-required="true"/>

	<br />
	<label for="synopsis">{Synopsis}</label>
	<textarea id="synopsis" name="synopsis" rows="5" data-required="true"> </textarea>
	
	<br /><br />
	<div style="width:100%; text-align: center;">
		<input type="submit" id="submitButtonId" value="{Submit}" />
	</div>
	<input type="hidden" name="dataonly" id="dataonly" value="yes" />
	<input type="hidden" name="getcontroller" id="getcontroller" value="video" />
	<input type="hidden" name="getsection" id="getsection" value="AddVideo" />
	<input type="hidden" name="ssec" id="ssec" value="AddVideo" />
	<input type="hidden" name="h" id="h" value="SubmitVideo" />
</form>
</div>
<!-- end add video form -->		


   	 
    </TD>
	</TR>
	</TBODY>
	</TABLE>
	</DIV></div>
</div>
<br /><br />
