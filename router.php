<?php
	
	if(!isset($_GET['page']) and !isset($_POST['page'])){$_GET['page']="home"; $_GET['sec']="home";}
/*	
	if($_POST['page']!="register" and $_GET['page']!="register" and $_POST['page']!="login" and $_GET['page']!="login"){
	//loading template
	echo render($TemplateHeader, "header");
	echo render($TemplateLeft, "left");
	echo render($TemplateBody, "body");
	echo render($TemplateRight, "right");
	echo render($TemplateFooter, "footer");
	}
	
	if($_POST['page']=="register" or $_GET['page']=="register"){
	echo render($TemplateRegister, "register");
	}

	if($_POST['page']=="login" or $_GET['page']=="login"){
	echo render($TemplateLogin, "login");
	}	
	
*/

	if(isset($_GET['page'])){$SystemPage = $_GET['page'];}
	if(isset($_POST['page'])){$SystemPage = $_POST['page'];}
	if(isset($_GET['dataonly']) and $_GET['dataonly']=='yes'){$dataonly="yes";}
	if(isset($_POST['dataonly']) and $_POST['dataonly']=='yes'){$dataonly="yes";}	
	if(isset($_GET['getwidget']) and $_GET['getwidget']!=''){$getwidget=$_GET['getwidget'];}
	if(isset($_POST['getwidget']) and $_POST['getwidget']!=''){$getwidget=$_POST['getwidget'];}	
	if($_GET['page']=="logout"){$SystemPage = "logout";}
	
	switch ($SystemPage) {
    case ($SystemPage=="home" || $SystemPage=="video") and $dataonly!="yes":
		//loading template
		echo render($TemplateHeader, "header");
		echo render($TemplateLeft, "left");
		echo render($TemplateBody, "body");
		echo render($TemplateRight, "right");
		echo render($TemplateFooter, "footer");
        break;
    case $SystemPage!="" and $dataonly=="yes" and $getwidget!="":
		echo GetWidget($getwidget);
        break;
    case $SystemPage=="register":
		echo render($TemplateRegister, "register");
		break;
    case $SystemPage=="login":
		echo render($TemplateLogin, "login");
        break;
    case $SystemPage=="logout":
		echo render($TemplateLogout, "logout");
        break;
    default:
	   echo render($Template404, "404");
}
?>