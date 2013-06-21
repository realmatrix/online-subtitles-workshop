<?php

	session_start();
	
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
	
	$GLOBALS['l']=$GLOBALS['COMMON']->GetLanguage($GLOBALS['config']['lang']);
	
	include "header.php";
	
	include "footer.php";

	include "processor.php";
	
	include "router.php";
	
	unset($GLOBALS);
	
?>