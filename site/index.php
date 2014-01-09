<?php

	ini_set('display_errors',1); 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	
	session_start();
	
	//ini_set('memory_limit', '256');
	
	$GLOBALS['LoadStart'] = microtime(true);
		
	include "include/db.php";
	
	include "include/config.php";
	
	if($_GET['template']!=""){$GLOBALS['config']['template'] = $_GET['template'];}
	
	include "include/common.php";
	
	$GLOBALS['COMMON'] = new Common();

	$GLOBALS['config']['widgets'] = $GLOBALS['COMMON']->GetEnabledWidgets();

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