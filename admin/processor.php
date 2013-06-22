<?php


	$GLOBALS['TemplateHeader'] = array
	  (
	  array("{test}",$test),
	);
	
	$GLOBALS['TemplateHead'] = array
	  (
	  array("{test}",$test),
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
	  array("{content}",$AdminContent),
	);
	
	$GLOBALS['TemplateFooter'] = array
	  (
	  array("{test}",$test),
	);
	
	$GLOBALS['Template404'] = array
	  (
	  array("{test}",$test),
	); 
	
	

	$TemplatesCommon = array 
	(
	  array("{TemplatePath}",$GLOBALS['TemplatePath'].$GLOBALS['Template']),
	  array("{SiteName}",$GLOBALS['SiteTitle']),
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
	

	$GLOBALS['TemplateHeader'] = array_merge($GLOBALS['TemplateHeader'], $TemplatesCommon);
	$GLOBALS['TemplateHead'] = array_merge($GLOBALS['TemplateHead'], $TemplatesCommon);
	$GLOBALS['TemplateLeft'] = array_merge($GLOBALS['TemplateLeft'], $TemplatesCommon);
	$GLOBALS['TemplateRight'] = array_merge($GLOBALS['TemplateRight'], $TemplatesCommon);
	$GLOBALS['TemplateBody'] = array_merge($GLOBALS['TemplateBody'], $TemplatesCommon);
	$GLOBALS['TemplateFooter'] = array_merge($GLOBALS['TemplateFooter'], $TemplatesCommon);
	$GLOBALS['TemplateLogin'] = array_merge($GLOBALS['TemplateLogin'], $TemplatesCommon);
	$GLOBALS['Template404'] = array_merge($GLOBALS['Template404'], $TemplatesCommon);
	
?>