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
	if(isset($_GET['getcontroller']) and $_GET['getcontroller']!=""){$getcontroller=$_GET['getcontroller'];}
	if(isset($_POST['getcontroller']) and $_POST['getcontroller']!=""){$getcontroller=$_POST['getcontroller'];}
	if(isset($_GET['getsection']) and $_GET['getsection']!=""){$getsection=$_GET['getsection'];}
	if(isset($_POST['getsection']) and $_POST['getsection']!=""){$getsection=$_POST['getsection'];}
	if($_GET['page']=="logout"){$SystemPage = "logout";}
	if($_GET['page']=="none" or $_POST=="none"){$SystemPage = "none";}

	switch ($SystemPage) {
    case ($SystemPage=="home" || $SystemPage=="otherpage") and $dataonly!="yes":
		//loading template
		echo common::render($TemplateHead, "head");
		echo common::render($TemplateHeader, "header");
		echo common::render($TemplateLeft, "left");
		echo common::render($TemplateBody, "body");
		echo common::render($TemplateRight, "right");
		echo common::render($TemplateFooter, "footer");
        break;
    case $SystemPage=="video" :
		echo common::render($TemplateHead, "head");
		echo common::render($TemplateHeader, "header");
		echo common::render($TemplateBody, "body");
		echo common::render($TemplateFooter, "footer");
        break;
    case $SystemPage!="" and $dataonly=="yes" and $getwidget!="":
		echo common::render($TemplateHead, "head");
		echo common::GetWidget($getwidget);
        break;
    case $SystemPage!="" and $dataonly=="yes" and $getcontroller!="" and $getsection!="":
		echo common::render($TemplateHead, "head");
		echo common::LoadSection($getcontroller, $getsection);
        break;
    case $SystemPage=="register":
		echo common::render($TemplateRegister, "register");
		break;
    case $SystemPage=="login":
		echo common::render($TemplateLogin, "login");
        break;
    case $SystemPage=="logout":
		echo common::render($TemplateLogout, "logout");
        break;
    default:
	   echo common::render($Template404, "404");
}
?>