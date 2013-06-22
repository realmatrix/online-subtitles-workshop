<?php
	
	if($_GET['page']!=""){$AdminPage=$_GET['page'];}
	if($_POST['page']!=""){$AdminPage=$_POST['page'];}
	if($AdminPage==""){$AdminPage = "main";}
	
	switch ($AdminPage) {
    case ($AdminPage=="main"):
		//loading template
		echo $GLOBALS['ACOMMON']->render($GLOBALS['TemplateHead'], "head");
		echo $GLOBALS['ACOMMON']->render($GLOBALS['TemplateHeader'], "header");
		echo $GLOBALS['ACOMMON']->render($GLOBALS['TemplateLeft'], "left");
		echo $GLOBALS['ACOMMON']->render($GLOBALS['TemplateBody'], "body");
		echo $GLOBALS['ACOMMON']->render($GLOBALS['TemplateRight'], "right");
		echo $GLOBALS['ACOMMON']->render($GLOBALS['TemplateFooter'], "footer");
        break;
    case $AdminPage=="login":
		echo $GLOBALS['ACOMMON']->render($GLOBALS['TemplateLogin'], "login");
        break;
    case $AdminPage=="logout":
		echo $GLOBALS['ACOMMON']->render($GLOBALS['TemplateLogout'], "logout");
        break;
    default:
	   echo $GLOBALS['ACOMMON']->render($GLOBALS['Template404'], "404");
	}


?>