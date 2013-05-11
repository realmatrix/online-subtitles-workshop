<?php

	session_start();
	
	include "include/db.php";
	
	include "include/config.php";
	
	include "include/common.php";
	
	include "include/OnlineUsers.php";
	
	if($_GET['act']=='logout'){
		logout();
	}
	
	include "onload.php";
	
	include "language/".$GLOBALS['config']['language'];
	
	include "header.php";
	
	include "footer.php";
	
	include "processor.php";
	
	include "router.php";
	
	
?>