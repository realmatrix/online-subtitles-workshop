<?php

	ini_set('display_errors',1); 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	session_start();

	if(count($_GET)>0){$GLOBALS['vars'] = $_GET;}	
	if(count($_POST)>0){$GLOBALS['vars'] = $_POST;}
	
	include "include/config.php";
	
	include $GLOBALS['SystemPath']."include/db.php";
	
	include $GLOBALS['SystemPath']."system/System.php";
	
	$GLOBALS['system'] = new System();
	
	$GLOBALS['l']=$GLOBALS['system']->GetLanguage($GLOBALS['config']['lang']);
	
	include "include/Acommon.php";
	
	$GLOBALS['ACOMMON'] = new Acommon();
	
	$GLOBALS['ACOMMON']->CleanTmp();
	
	if($GLOBALS['ACOMMON']->CheckAuthority()==""){$GLOBALS['vars']['page']="login"; $GLOBALS['vars']['sec']="login";}
	
	include "./processor.php";
	
	include "./router.php";
	
	unset($GLOBALS);
	
?>