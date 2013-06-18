<?php
	
	$SystemHeader = "
	<script src='apps/jquery/jquery-2.0.2.min.js'></script>
	<script type='text/javascript' charset='utf-8' src='apps/jquery/jquery.collapse.js'></script>
	<script type='text/javascript' charset='utf-8' src='apps/jquery/jquery.tipsy.js'></script>
	<script type='text/javascript' charset='utf-8' src='apps/jquery/jquery.hoverIntent.min.js'></script>
	<script type='text/javascript' language='javascript' src='apps/DataTables-1.9.4/media/js/jquery.dataTables.js'></script>
	<script type='text/javascript' charset='utf-8' src='apps/DataTables-1.9.4/extras/TableTools/media/js/ZeroClipboard.js'></script>
	<script type='text/javascript' charset='utf-8' src='apps/DataTables-1.9.4/extras/TableTools/media/js/TableTools.js'></script>
	
	<script>
	function processFormGet(formId, divid) { 
	//your validation code
	$.ajax( {
	        type: 'GET',
	        url: 'index.php',
	        data: $('#'+formId).serialize(), 
	        success: function(data) {
	            $('#divid').html(data);
	        }
	    } );
	}
	</script>
	
	<script>
	function processFormPOST(formId, divid) { 
	//your validation code
	$.ajax( {
	        type: 'POST',
	        url: 'index.php',
	        data: $('#'+formId).serialize(), 
	        success: function(data) {
	            $('#divid').html(data);
	        }
	    } );
	}
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
});

</script>
	";
	
	$GLOBALS['SystemData']['SystemHeader'] = $SystemHeader;
		
?>
