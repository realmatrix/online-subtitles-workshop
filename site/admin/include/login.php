<?php
		 $Username = $GLOBALS['vars']['username'];
		 $Password = $GLOBALS['vars']['password'];

		 //Check To See If All Information Is Correct
		
		 if($Username == "")
		 {
		 $GLOBALS['ERROR'][] = $GLOBALS['system']->l('login_NoUsername');
		 }
		
		 if($Password == "")
		 {
		 $GLOBALS['ERROR'][] = $GLOBALS['system']->l('login_NoPassword');
		 }
		 
		 if(preg_match("/^[a-zA-Z0-9]+$/", $Username) != 1) {
		 $GLOBALS['ERROR'][] = $GLOBALS['system']->l('login_usernameaz');
		 }

		 if(preg_match("/^[a-zA-Z0-9]+$/", $Password) != 1) {
		 $GLOBALS['ERROR'][] = $GLOBALS['system']->l('login_passwordaz');
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
 			 $GLOBALS['SUCCESS'][] = $GLOBALS['system']->l('login_successfull').'<script type="text/javascript">$("#login").empty();setTimeout(function(){ window.location = "index.php"; }, 5000);</script>';
			}
			else 
			{
			$GLOBALS['system']->FailedLogin();
			$GLOBALS['ERROR'][] = $GLOBALS['system']->l('login_failed');
			}
			
		 }

?>