
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
