<script type='text/javascript' src='apps/jquery/jquery-1.9.1.js'></script> 

<script>
// variable to hold request
var request;
// bind to the submit event of our form
$("form#submitnewsubtitle").submit(function(event){
	//$("#SubmittingForm").show();
    // abort any pending request
    if (request) {
        request.abort();
    }
    //form validation
//    var faults = $('input').filter(function() {
    // filter input elements to required ones that are empty
//    return $(this).data('required') && $(this).val() === "";
//    }).css("background-color", "red"); // make them attract the eye
//    if(faults.length) return false; // if any required are empty, cancel submit
//     var faults = $('select').filter(function() {
    // filter input elements to required ones that are empty
//    return $(this).data('required') && $(this).val() === "";
//    }).css("background-color", "red"); // make them attract the eye
//    if(faults.length) return false; // if any required are empty, cancel submit   
    // setup some local variables
   var $form = $(this);
    // let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea, file");
    // serialize the data in the form
    var serializedData = $form.serialize();
	//alert(serializedData);
    // let's disable the inputs for the duration of the ajax request
    $inputs.prop("disabled", true);

    // fire off the request to /form.php
    request = $.ajax({
        url: "index.php",
        type: "post",
        data: serializedData
    });

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // log a message to the console
        console.log("Hooray, it worked!");
        console.log("Response: "+response);        
        $("#SystemAjax_subtitle_AddSubtitle").html(response);
    });

    // callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // log the error to the console
        console.error(
            "The following error occured: "+
            textStatus, errorThrown
        );
    });

    // callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // reenable the inputs
        $inputs.prop("disabled", false);
    });

    // prevent default posting of form
    event.preventDefault();
});

</script>

<style>
	#submitnewsubtitle input[type=text], input[type=file]{
		width: 100%;
		margin: 5px;
	}
	#submitnewsubtitle textarea{
		width: 100%;
	}
</style>
<div>
<DIV class="catglow" style="width:100%;">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	{AddSubtitle}                
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
    	
    	


<!-- add subtitle form -->
<div id="div-submitnewsubtitle">
	
<form name="submitnewsubtitle" id="submitnewsubtitle" action="#">
<table style="width: 100%;">
	<tr>
		<td style="width: 20%;">{ReleaseName}</td>
		<td style="width: 80%;"><input type="text" name="ReleaseName" /></td>
	</tr>
	<tr>
		<td>{Version}</td>
		<td>
			<input type="text" name="version" />
		</td>
	</tr>
	<tr>
		<td>{Country}</td>
		<td>
			<select name="Country">
				<option></option>
				{SubtitleCountry}
			</select>
		</td>
	</tr>
	<tr>
		<td>{Language}</td>
		<td>
			<select name="Language">
				<option></option>
				{SubtitleLanguages}
			</select>
		</td>
	</tr>
	<tr>
		<td>{Fps}</td>
		<td>
			<select name="fpssec">
				<option></option>
				{SubtitleFPSsec}
			</select>
			<select name="fpsmilsec">
				<option></option>
				{SubtitleFPSmilsec}
			</select>
		</td>
	</tr>
	<tr>
		<td>{Format}</td>
		<td>
			<select name="format">
				<option></option>
				{SubtitleFormats}
			</select>
		</td>
	</tr>
	<tr>
		<td>{NoCDs}</td>
		<td>
			<select name="cds">
				<option></option>
				{SubtitleCDS}
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;">
			<input type="submit" value="{submit}" />
		</td>
	</tr>	
</table>
	<input type="hidden" name="vid" value="{vid}" />
	<input type="hidden" name="dataonly" id="dataonly" value="yes"/>
	<input type="hidden" name="getcontroller" id="getcontroller" value="subtitle"/>
	<input type="hidden" name="getsection" id="getsection" value="Addsubtitle"/>
	<input type="hidden" name="ssec" id="ssec" value="Addsubtitle"/>
	<input type="hidden" name="h" id="h" value="SubmitSubtitle"/>
</form>

</div>
<!-- end add subtitle form -->		


   	 
    </TD>
	</TR>
	</TBODY>
	</TABLE>
	</DIV></div>
</div>
<br />




























