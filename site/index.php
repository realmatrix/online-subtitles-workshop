<?php

	@ini_set('display_errors',1); 
	@error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	
	session_start();
	
	//ini_set('memory_limit', '256');
	
	$GLOBALS['LoadStart'] = microtime(true);
		
	include "include/db.php";
	
	include "include/config.php";
	
	if($_GET['template']!=""){$GLOBALS['config']['template'] = $_GET['template'];}
	
	include "system/System.php";
	
	$GLOBALS['system'] = new System();

	$GLOBALS['config']['widgets'] = $GLOBALS['system']->GetEnabledWidgets();
	
	$GLOBALS['system']->LoadLib("OnlineUsers");
	
	if($_GET['act']=='logout'){
		$GLOBALS['system']->logout();
	}
	
	include "onload.php";
	
	include "header.php";
	
	include "footer.php";
	
	include "processor.php";
	
	include "router.php";
	
	if($GLOBALS['system']->GetOption("run_cron_onload")=="1"){$GLOBALS['system']->RunCronFunction('RunAll');}
		
	unset($GLOBALS);
	
?>