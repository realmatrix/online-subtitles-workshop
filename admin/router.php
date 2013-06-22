<?php
	
	if($_GET['page']!=""){$AdminPage=$_GET['page'];}
	if($_POST['page']!=""){$AdminPage=$_POST['page'];}
	if($AdminPage==""){$AdminPage = "main";}
	
	switch ($AdminPage) {
    case ($AdminPage=="main"):
		//loading template
		echo $GLOBALS['ACOMMON']->render($TemplateHead, "head");
		echo $GLOBALS['ACOMMON']->render($TemplateHeader, "header");
		echo $GLOBALS['ACOMMON']->render($TemplateLeft, "left");
		echo $GLOBALS['ACOMMON']->render($TemplateBody, "body");
		echo $GLOBALS['ACOMMON']->render($TemplateRight, "right");
		echo $GLOBALS['ACOMMON']->render($TemplateFooter, "footer");
        break;
    case $AdminPage=="login":
		echo $GLOBALS['ACOMMON']->render($TemplateLogin, "login");
        break;
    case $AdminPage=="logout":
		echo $GLOBALS['ACOMMON']->render($TemplateLogout, "logout");
        break;
    default:
	   echo $GLOBALS['ACOMMON']->render($Template404, "404");
	}


?>