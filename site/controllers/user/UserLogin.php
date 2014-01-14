<?php

	class CUserLogin{
			
		function UserLogin(){
			return self::UserLogin_content();
		}
	
		function UserLogin_hooks(){
			$array = array(
				array("login", "Login")
			);
			return $array;
		}
			
		function UserLogin_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function UserLogin_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l('team_UserLogin_title')),
				  array("{page}", $GLOBALS['vars']['page']),
				  array("{sec}", $GLOBALS['vars']['sec']),
				  array("{LoginUsername}",$GLOBALS['COMMON']->l('login_username')),
				  array("{LoginPassword}",$GLOBALS['COMMON']->l('login_password')),
				 );
			 
		return $content;
		}
		
		function Validate(){
			 if($GLOBALS['vars']['username']==""){$GLOBALS['ERROR'][]=$GLOBALS['COMMON']->l('login_NoUsername');}
			 if($GLOBALS['vars']['password']==""){$GLOBALS['ERROR'][]=$GLOBALS['COMMON']->l('login_NoPassword');}
			 if(preg_match("/^[a-zA-Z0-9]+$/", $GLOBALS['vars']['username']) != 1){$GLOBALS['ERROR'][]=$GLOBALS['COMMON']->l('login_usernameaz');}
			 if(preg_match("/^[a-zA-Z0-9]+$/", $GLOBALS['vars']['password']) != 1){$GLOBALS['ERROR'][]=$GLOBALS['COMMON']->l('login_passwordaz');}
		}
		
		function Login(){
			 self::Validate();
			 if(count($GLOBALS['ERROR'])<1){
				$GLOBALS['vars']['password'] = sha1($GLOBALS['vars']['password']);
				$params = array(
					array(":username", $GLOBALS['vars']['username'], "str"),
					array(":password", $GLOBALS['vars']['password'], "str")
				);
			 	$result = $GLOBALS['COMMON']->db_query("SELECT * FROM users WHERE username=:username and password=:password", $params);
			 	if(count($result)>0)
	 			{
	 			 $args = array(
				 	array(":username", $GLOBALS['vars']['username'], "str"),
				 	array(":time", $GLOBALS['COMMON']->GetMicroTime(), "str"),
				 );
	   			 $GLOBALS['COMMON']->login($GLOBALS['vars']['username']);
				 $res = $GLOBALS['COMMON']->db_query("UPDATE `users` SET `LastLogin` = :time WHERE `username` =:username;", $args);
				 Onlineusers::AddOnlineUser();
				 header( 'Location: index.php' ) ;
	 			 $GLOBALS['SUCCESS'][] = $GLOBALS['COMMON']->l('login_successfull').'<script type="text/javascript">$("#login").empty();setTimeout(function(){ window.location = "index.php"; }, 5000);</script>';
				}
				else {
				$GLOBALS['ERROR'][] = $GLOBALS['COMMON']->l('login_failed');
				}
			 }
		}
		
	
			
	}
	
	
	
?>