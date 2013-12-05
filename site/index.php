<?php

	session_start();
	
	//ini_set('memory_limit', '256');

	$GLOBALS['LoadStart'] = microtime(true);
		
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
	
	include "header.php";
	
	include "footer.php";
	
	include "processor.php";
	
	include "router.php";
	
	if($GLOBALS['COMMON']->GetOption("run_cron_onload")=="1"){$GLOBALS['COMMON']->RunCronFunction('RunAll');}
		
	unset($GLOBALS);
	
?>