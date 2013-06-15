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
	if($_GET['sec']!=""){$SystemSection=$_GET['sec'];}
	if($_POST['sec']!=""){$SystemSection=$_POST['sec'];}

//////////////////////////////////////////////////////
//compress
    $phpver = phpversion();

     $useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;

     if ( $phpver >= '4.0.4pl1' && ( strstr($useragent,'compatible') || strstr($useragent,'Gecko') ) )
     {
         if ( extension_loaded('zlib') )
         {
             ob_start('ob_gzhandler');
         }
     }
     else if ( $phpver > '4.0' )
     {
         if ( strstr($HTTP_SERVER_VARS['HTTP_ACCEPT_ENCODING'], 'gzip') )
         {
             if ( extension_loaded('zlib') )
             {
                 $do_gzip_compress = TRUE;
                 ob_start();
                 ob_implicit_flush(0);

                 header('Content-Encoding: gzip');
             }
         }
     }
//////////////////////////////////////////////////////
	
	switch ($SystemPage) {
    case ($SystemPage=="home" or ($SystemPage=="video" and $SystemSection=="view")) and $dataonly!="yes":
		//loading template
		echo $GLOBALS['COMMON']->render($TemplateHead, "head");
		echo $GLOBALS['COMMON']->render($TemplateHeader, "header");
		echo $GLOBALS['COMMON']->render($TemplateLeft, "left");
		echo $GLOBALS['COMMON']->render($TemplateBody, "body");
		echo $GLOBALS['COMMON']->render($TemplateRight, "right");
		echo $GLOBALS['COMMON']->render($TemplateFooter, "footer");
        break;
    case ($SystemPage=="video" and $SystemSection=="add") or $SystemPage=="subtitle":
		echo $GLOBALS['COMMON']->render($TemplateHead, "head");
		echo $GLOBALS['COMMON']->render($TemplateHeader, "header");
		echo $GLOBALS['COMMON']->render($TemplateBody, "body");
		echo $GLOBALS['COMMON']->render($TemplateFooter, "footer");
        break;
    case $SystemPage!="" and $dataonly=="yes" and $getwidget!="":
		echo $GLOBALS['COMMON']->render($TemplateHead, "head");
		echo $GLOBALS['COMMON']->GetWidget($getwidget);
        break;
    case $SystemPage!="" and $dataonly=="yes" and $getcontroller!="" and $getsection!="":
		echo $GLOBALS['COMMON']->render($TemplateHead, "head");
		echo $GLOBALS['COMMON']->LoadSection($getcontroller, $getsection);
        break;
    case $SystemPage=="register":
		echo $GLOBALS['COMMON']->render($TemplateRegister, "register");
		break;
    case $SystemPage=="login":
		echo $GLOBALS['COMMON']->render($TemplateLogin, "login");
        break;
    case $SystemPage=="logout":
		echo $GLOBALS['COMMON']->render($TemplateLogout, "logout");
        break;
    default:
	    echo $GLOBALS['COMMON']->render($Template404, "404");
}

//////////////////////////////////////////////////////
//compress
// Compress buffered output if required and send to browser
if ( $do_gzip_compress )
 {
     //
     // Borrowed from php.net!
     //
     $gzip_contents = ob_get_contents();
     ob_end_clean();

     $gzip_size = strlen($gzip_contents);
     $gzip_crc = crc32($gzip_contents);

     $gzip_contents = gzcompress($gzip_contents, 9);
     $gzip_contents = substr($gzip_contents, 0, strlen($gzip_contents) - 4);

     echo "\x1f\x8b\x08\x00\x00\x00\x00\x00";
     echo $gzip_contents;
     echo pack('V', $gzip_crc);
     echo pack('V', $gzip_size);
}
//////////////////////////////////////////////////////	

?>