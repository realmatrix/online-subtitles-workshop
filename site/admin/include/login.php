<?php
		 $Username = $GLOBALS['vars']['username'];
		 $Password = $GLOBALS['vars']['password'];

		 //Check To See If All Information Is Correct
		
		 if($Username == "")
		 {
		 	$GLOBALS['ERROR'][] = "username is missing.";
		 }
		
		 if($Password == "")
		 {
		 	$GLOBALS['ERROR'][] = "password is missing.";
		 }
		 
		 if(preg_match("/^[a-zA-Z0-9]+$/", $Username) != 1) {
		 	$GLOBALS['ERROR'][] = "invalid username only a-z 0-9 allowed.";
		 }

		 if(preg_match("/^[a-zA-Z0-9]+$/", $Password) != 1) {
		 	$GLOBALS['ERROR'][] = "invalid password only a-z 0-9 allowed.";
		 }
		 

		 	 
		 if(count($error)==0){
			$Password = sha1($Password);
			$params = array(
				array(":username", $Username, "str"),
				array(":password", $Password, "str")
			);
		 	$result = $GLOBALS['system']->db_query("SELECT * FROM Users WHERE username=:username and password=:password", $params);
		 	if(count($result)>0)
 			{ 			 
   			 $GLOBALS['ACOMMON']->login($Username);
			 //echo "ID->".$_SESSION['id'];
			 header( 'Location: index.php' ) ;
 			 $GLOBALS['SUCCESS'][] = "redirecting to control panel...".'<script type="text/javascript">$("#login").empty();setTimeout(function(){ window.location = "index.php"; }, 5000);</script>';
			}
			else 
			{
			$GLOBALS['system']->FailedLogin();
			$GLOBALS['ERROR'][] = "login falied.";
			}
			
		 }

?>