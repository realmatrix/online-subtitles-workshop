<?php
	
	include "include/config.php";
	
	include $GLOBALS['SystemPath']."include/db.php";
	
	include $GLOBALS['SystemPath']."include/common.php";
	
	$GLOBALS['COMMON'] = new Common();
	
	$GLOBALS['l']=$GLOBALS['COMMON']->GetLanguage($GLOBALS['config']['lang']);
	
	include "include/Acommon.php";
	
	$GLOBALS['ACOMMON'] = new Acommon();
	
	include "processor.php";
	
	include "router.php";
	
	unset($GLOBALS);
	
?>