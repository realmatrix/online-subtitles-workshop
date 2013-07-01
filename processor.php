<?php

	if($GLOBALS['vars']['register']=="yes"){include "include/register.php";}
	if($GLOBALS['vars']['login']=="yes"){include "include/login.php";}
		
	$ControllerPage=$GLOBALS['vars']['page']; 
	$ControllerSection=$GLOBALS['vars']['sec'];

	//loading controllers
	if($ControllerPage!="" and $ControllerSection!=""){$GLOBALS['SystemContent'] = $GLOBALS['COMMON']->LoadSections($ControllerPage, $ControllerSection, $GLOBALS['vars']);}
	
		
	//loading widgets
	$GLOBALS['SystemWidgets'] = $GLOBALS['COMMON']->LoadWidgets();	
		
	$TemplatePath = $GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template'];
	
	$error_messages = $GLOBALS['COMMON']->SystemMessage("error",$GLOBALS['ERROR']);
	
	$success_messages = $GLOBALS['COMMON']->SystemMessage("success",$GLOBALS['SUCCESS']);
	
	$GLOBALS['TemplateHeader'] = array
	  (
	  array("{test}",$test),
	);
	
	$GLOBALS['TemplateHead'] = array
	  (
	  array("{test}",$test),
	);
	
	$GLOBALS['TemplateRegister'] = array
	  (
	  array("{username}",$GLOBALS['COMMON']->l('register_username')),
	  array("{password}",$GLOBALS['COMMON']->l('register_password')),
	  array("{password2}",$GLOBALS['COMMON']->l('register_password2')),
	  array("{email}",$GLOBALS['COMMON']->l('register_email')),
	  array("{birthyear}",$GLOBALS['COMMON']->l('register_birthyear')),
	  array("{birthselect}",$GLOBALS['COMMON']->GenBirthYears()),
	  array("{submit}",$GLOBALS['COMMON']->l('register_submit')),
	);
	
	$GLOBALS['TemplateLogin'] = array
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
	
	$SystemInfo = $GLOBALS['COMMON']->information();
	
	$GLOBALS['TemplatesCommon'] = array 
	(
	  array("{TemplatePath}",$TemplatePath),
	  array("{SiteName}",$GLOBALS['config']['site_title']),
	  array("{SiteDescription}",$GLOBALS['config']['site_description']),
	  array("{SystemHeader}",$SystemHeader),
	  array("{SystemFooter}",$SystemFooter),
	  array("{SystemError}",$error_messages),
	  array("{SystemSuccess}",$success_messages),
	  array("{LoginUsername}",$GLOBALS['COMMON']->l('login_username')),
	  array("{LoginPassword}",$GLOBALS['COMMON']->l('login_password')),
	  array("{LoginOrRegister}",$GLOBALS['COMMON']->l('login_orregister')),
	  array("{LoginSubmit}",$GLOBALS['COMMON']->l('login_submit')),
	  array("{UserName}",$_SESSION['username']),	  
	  array("{TotalOnline}",$SystemInfo['total']),
	  array("{OnlineGuests}",$SystemInfo['OnlineGuests']),
	  array("{OnlineRegistered}",$SystemInfo['OnlineUsers']),
	  array("{OnlineHidden}",$SystemInfo['OnlineHidden']),
	  array("{TotalRegistered}",$SystemInfo['TotalRegistered']),
	  array("{TotalUsers}",$SystemInfo['TotalRegistered']),
	  array("{LatestUser}",$SystemInfo['LatestUser']),
	  array("{TotalVideos}",$SystemInfo['TotalVideos']), 
	  array("{TotalSubtitles}",$SystemInfo['TotalSubtitles']),
	);

	$GLOBALS['TemplatesCommon'] = array_merge($GLOBALS['TemplatesCommon'],$GLOBALS['SystemWidgets']);
	
	$GLOBALS['TemplateHeader'] = array_merge($GLOBALS['TemplateHeader'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['TemplateHead'] = array_merge($GLOBALS['TemplateHead'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['TemplateLeft'] = array_merge($GLOBALS['TemplateLeft'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['TemplateRight'] = array_merge($GLOBALS['TemplateRight'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['TemplateBody'] = array_merge($GLOBALS['TemplateBody'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['TemplateFooter'] = array_merge($GLOBALS['TemplateFooter'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['TemplateLogin'] = array_merge($GLOBALS['TemplateLogin'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['TemplateRegister'] = array_merge($GLOBALS['TemplateRegister'], $GLOBALS['TemplatesCommon']);
	$GLOBALS['Template404'] = array_merge($GLOBALS['Template404'], $GLOBALS['TemplatesCommon']);


?>