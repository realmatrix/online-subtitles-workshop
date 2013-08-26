<?php

	// ini_set("display_startup_errors", "1");
	// ini_set("display_errors", "1");
	// error_reporting(E_ALL);

	session_start();

	if(count($_GET)>0){$GLOBALS['vars'] = $_GET;}	
	if(count($_POST)>0){$GLOBALS['vars'] = $_POST;}
	
	include "include/config.php";
	
	include $GLOBALS['SystemPath']."include/db.php";
	
	include $GLOBALS['SystemPath']."include/common.php";
	
	$GLOBALS['COMMON'] = new Common();
	
	$GLOBALS['l']=$GLOBALS['COMMON']->GetLanguage($GLOBALS['config']['lang']);
	
	include "include/Acommon.php";
	
	$GLOBALS['ACOMMON'] = new Acommon();
	
	include "./processor.php";
	
	include "./router.php";
	
	unset($GLOBALS);
	
?>