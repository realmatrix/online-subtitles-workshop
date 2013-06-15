<?php

	session_start();
	
	//print_r($_GET);	
	
	include "include/db.php";
	
	include "include/config.php";
	
	if($_GET['template']!=""){$GLOBALS['config']['template'] = $_GET['template'];}
	
	include "include/common.php";
	
	$GLOBALS['COMMON'] = new Common();

	include "include/OnlineUsers.php";
	
	if($_GET['act']=='logout'){
		$GLOBALS['COMMON']->logout();
	}
	
	include "onload.php";
	
	include "language/".$GLOBALS['config']['language'];
	
	include "header.php";
	
	include "footer.php";

	include "processor.php";
	
	include "router.php";
	
	unset($GLOBALS);
	
?>