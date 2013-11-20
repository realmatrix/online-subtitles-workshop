<?php
	
	$AdminPage = $GLOBALS['vars']['page'];
	
	switch ($AdminPage) {
    case ($AdminPage=="main" or $AdminPage=="widgets"):
		//loading template
		$GLOBALS['FinalPage'] = $GLOBALS['ACOMMON']->render($GLOBALS['TemplateHead'], "head");
		$GLOBALS['FinalPage'] .= $GLOBALS['ACOMMON']->render($GLOBALS['TemplateHeader'], "header");
		$GLOBALS['FinalPage'] .= $GLOBALS['ACOMMON']->render($GLOBALS['TemplateLeft'], "left");
		$GLOBALS['FinalPage'] .= $GLOBALS['ACOMMON']->render($GLOBALS['TemplateBody'], "body");
		$GLOBALS['FinalPage'] .= $GLOBALS['ACOMMON']->render($GLOBALS['TemplateRight'], "right");
		$GLOBALS['FinalPage'] .= $GLOBALS['ACOMMON']->render($GLOBALS['TemplateFooter'], "footer");
		echo $GLOBALS['FinalPage'];
        break;
    case $AdminPage=="login":
		$GLOBALS['FinalPage'] = $GLOBALS['ACOMMON']->render($GLOBALS['TemplateLogin'], "login");
		echo $GLOBALS['FinalPage'];
        break;
    case $AdminPage=="logout":
		$GLOBALS['FinalPage'] = $GLOBALS['ACOMMON']->render($GLOBALS['TemplateLogout'], "logout");
		echo $GLOBALS['FinalPage'];
        break;
    default:
	    $GLOBALS['FinalPage'] = $GLOBALS['ACOMMON']->render($GLOBALS['Template404'], "404");
		echo $GLOBALS['FinalPage'];
	}


?>