<?php
	
	$SystemHeader = "
	<script src='apps/jquery/jquery-1.9.1.js'></script>
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
	";
	
	$GLOBALS['SystemData']['SystemHeader'] = $SystemHeader;
		
?>
