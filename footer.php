<?php
	
	$SystemFooter = "";
	
	if(IsLoggedin() and $SystemPage!="login"){
		$dq = '"';
		$SystemFooter .= "<script type='text/javascript'>$('#login').html(".$dq.$GLOBALS['lang']['login_welcomeback'].$_SESSION['username']." <a href='?act=logout'>".$GLOBALS['lang']['logout_logout']."</a>".$dq.");</script>"; 
	}
	
?>