<?php
	
	if(!isset($_GET['page']) and !isset($_POST['page'])){$_GET['page']="home"; $_GET['sec']="home";}

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


/////////////////////////////////////////////////////////
//compress
    $phpver = phpversion();

     $useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;

     if ( $phpver >= '4.0.4pl1' && ( strstr($useragent,'compatible') || strstr($useragent,'Gecko') ) )
     {
         if ( extension_loaded('zlib') )
         {
         	 ini_set('zlib.output_compression_level', 1);
             ob_start('ob_gzhandler');
			 $gzhandler = TRUE; 
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
/////////////////////////////////////////////////////////	 
	 	
	switch ($SystemPage) {
    case ($SystemPage=="home" or ($SystemPage=="video" and $SystemSection=="view")) and $dataonly!="yes":
		//loading template
		$GLOBALS['FinalPage'] = $GLOBALS['COMMON']->render($GLOBALS['TemplateHead'], "head");
		$GLOBALS['FinalPage'] .= $GLOBALS['COMMON']->render($GLOBALS['TemplateHeader'], "header");
		$GLOBALS['FinalPage'] .= $GLOBALS['COMMON']->render($GLOBALS['TemplateLeft'], "left");
		$GLOBALS['FinalPage'] .= $GLOBALS['COMMON']->render($GLOBALS['TemplateBody'], "body");
		$GLOBALS['FinalPage'] .= $GLOBALS['COMMON']->render($GLOBALS['TemplateRight'], "right");
		$GLOBALS['FinalPage'] .= $GLOBALS['COMMON']->render($GLOBALS['TemplateFooter'], "footer");
		echo $GLOBALS['FinalPage'];
        break;
    case ($SystemPage=="video" and $SystemSection=="add") or $SystemPage=="subtitle" or $SystemPage=="search":
		$GLOBALS['FinalPage'] = $GLOBALS['COMMON']->render($GLOBALS['TemplateHead'], "head");
		$GLOBALS['FinalPage'] .= $GLOBALS['COMMON']->render($GLOBALS['TemplateHeader'], "header");
		$GLOBALS['FinalPage'] .= $GLOBALS['COMMON']->render($GLOBALS['TemplateBody'], "body");
		$GLOBALS['FinalPage'] .= $GLOBALS['COMMON']->render($GLOBALS['TemplateFooter'], "footer");
		echo $GLOBALS['FinalPage'];
        break;
    case $SystemPage!="" and $dataonly=="yes" and $getwidget!="":
		$GLOBALS['FinalPage'] = $GLOBALS['COMMON']->render($GLOBALS['TemplateHead'], "head");
		$GLOBALS['FinalPage'] .= $GLOBALS['COMMON']->GetWidget($getwidget);
		echo $GLOBALS['FinalPage'];
        break;
    case $SystemPage!="" and $dataonly=="yes" and $getcontroller!="" and $getsection!="":
		$GLOBALS['FinalPage'] = $GLOBALS['COMMON']->render($GLOBALS['TemplateHead'], "head");
		$GLOBALS['FinalPage'] .= $GLOBALS['COMMON']->LoadSection($getcontroller, $getsection, $_POST);
		echo $GLOBALS['FinalPage'];
        break;
    case $SystemPage=="register":
		$GLOBALS['FinalPage'] = $GLOBALS['COMMON']->render($GLOBALS['TemplateRegister'], "register");
		echo $GLOBALS['FinalPage'];
		break;
    case $SystemPage=="login":
		$GLOBALS['FinalPage'] = $GLOBALS['COMMON']->render($GLOBALS['TemplateLogin'], "login");
		echo $GLOBALS['FinalPage'];
        break;
    case $SystemPage=="logout":
		$GLOBALS['FinalPage'] = $GLOBALS['COMMON']->render($GLOBALS['TemplateLogout'], "logout");
		echo $GLOBALS['FinalPage'];
        break;
    default:
	    $GLOBALS['FinalPage'] = $GLOBALS['COMMON']->render($GLOBALS['Template404'], "404");
		echo $GLOBALS['FinalPage'];
}

/////////////////////////////////////////////////////////
//compress
// Compress buffered output if required and send to browser
if($gzhandler === TRUE)
{
	ob_end_flush();
}
if ( $do_gzip_compress )
 {
     //
     // Borrowed from php.net!
     //
     echo "gzip compress is running - message from router.php";
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
/////////////////////////////////////////////////////////


?>