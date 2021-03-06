<?php
		
	$ControllerPage=$GLOBALS['vars']['page']; 
	$ControllerSection=$GLOBALS['vars']['sec'];

	//loading controllers
	if($ControllerPage!="" and $ControllerSection!=""){$GLOBALS['SystemContent'] = $GLOBALS['system']->LoadSections($ControllerPage, $ControllerSection, $GLOBALS['vars']);}
	
		
	//loading widgets
	$GLOBALS['SystemWidgets'] = $GLOBALS['system']->LoadWidgets();	
		
	$TemplatePath = $GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template'];
	
	$error_messages = $GLOBALS['system']->SystemMessage("error",$GLOBALS['ERROR']);
	
	$success_messages = $GLOBALS['system']->SystemMessage("success",$GLOBALS['SUCCESS']);
	
	$GLOBALS['TemplateHeader'] = array
	  (
	  array("{test}",$test),
	);
	
	$GLOBALS['TemplateHead'] = array
	  (
	  array("{test}",$test),
	);
	
	$GLOBALS['TemplateRight'] = array
	  (
	  array("{test}",$test),
	);

	$GLOBALS['TemplateLeft'] = array
	  (
	  array("{test}",$test),
	);
	
	$GLOBALS['TemplateBody'] = array
	  (
	  array("{content}",$GLOBALS['SystemContent']),
	);
	
	$GLOBALS['TemplateFooter'] = array
	  (
	  array("{test}",$test),
	);
	
	$GLOBALS['Template404'] = array
	  (
	  array("{test}",$test),
	); 
	
	$SystemInfo = $GLOBALS['system']->information();
//Fri May 31, 2013 1:43 pm	
	$GLOBALS['TemplatesCommon'] = array 
	(
	  array("{TemplatePath}",$TemplatePath),
	  array("{SiteName}",$GLOBALS['config']['site_title']),
	  array("{PageTitle}",$GLOBALS['vars']['PageTitle']),
	  array("{PageDescription}",$GLOBALS['vars']['PageDesc']),
	  array("{SystemHeader}",$SystemHeader),
	  array("{SystemFooter}",$SystemFooter),
	  array("{SystemError}",$error_messages),
	  array("{SystemSuccess}",$success_messages),
	  array("{LoginOrRegister}",$GLOBALS['system']->l('login_orregister')),
	  array("{UserName}",$_SESSION['username']),	  
	  array("{TotalOnline}",$SystemInfo['total']),
	  array("{OnlineGuests}",$SystemInfo['OnlineGuests']),
	  array("{OnlineRegistered}",$SystemInfo['OnlineUsers']),
	  array("{OnlineHidden}",$SystemInfo['OnlineHidden']),
	  array("{TotalRegistered}",$SystemInfo['TotalRegistered']),
	  array("{TotalUsers}",$SystemInfo['TotalRegistered']),
	  array("{LatestUser}",$SystemInfo['LatestUser']),
	  array("{LatestUserID}",$SystemInfo['LatestUserID']),
	  array("{TotalVideos}",$SystemInfo['TotalVideos']), 
	  array("{TotalSubtitles}",$SystemInfo['TotalSubtitles']),
	  array("{DateTime}",date("D M d, Y h:i a")),
	);

	$GLOBALS['TemplatesCommon'] = array_merge($GLOBALS['TemplatesCommon'],$GLOBALS['SystemWidgets']);
	$GLOBALS['TemplatesCommon'] = array_merge($GLOBALS['TemplatesCommon'],$GLOBALS['system']->HideDisabledWidgets());
	
	$GLOBALS['TemplateHeader'] = array_merge($GLOBALS['TemplateHeader'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['TemplateHead'] = array_merge($GLOBALS['TemplateHead'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['TemplateLeft'] = array_merge($GLOBALS['TemplateLeft'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['TemplateRight'] = array_merge($GLOBALS['TemplateRight'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['TemplateBody'] = array_merge($GLOBALS['TemplateBody'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['TemplateFooter'] = array_merge($GLOBALS['TemplateFooter'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['Template404'] = array_merge($GLOBALS['Template404'], $GLOBALS['TemplatesCommon']);


?>