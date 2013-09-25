<?php

	header("Content-Type: text/html;charset=UTF-8");
	
	Onlineusers::UpdateOnlineUsers();
	
	Onlineusers::AddOnlineGuest();
	
	Onlineusers::GetOnlineUsers();
	
	$GLOBALS['l']=$GLOBALS['COMMON']->GetLanguage($GLOBALS['config']['lang']);
	
	if(!isset($_GET['page']) and !isset($_POST['page'])){$_GET['page']="home"; $_GET['sec']="home";}
	
	if($_GET['page']!=""){$GLOBALS['vars']=$_GET;}
	
	if($_POST['page']!=""){$GLOBALS['vars']=$_POST;}
	
	$SystemPage = $GLOBALS['vars']['page'];
	
?>