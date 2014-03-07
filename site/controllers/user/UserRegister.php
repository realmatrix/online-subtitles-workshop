<?php

	class CUserRegister{
			
		function UserRegister(){
			return self::UserRegister_content();
		}
	
		function UserRegister_hooks(){
			$array = array(
				array("register", "Register")
			);
			return $array;
		}
			
		function UserRegister_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function UserRegister_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l('team_UserRegister_title')),
				  array("{page}", $GLOBALS['vars']['page']),
				  array("{sec}", $GLOBALS['vars']['sec']),
				  array("{username}",$GLOBALS['system']->l('register_username')),
				  array("{password}",$GLOBALS['system']->l('register_password')),
				  array("{password2}",$GLOBALS['system']->l('register_password2')),
				  array("{email}",$GLOBALS['system']->l('register_email')),
				  array("{birthdate}",$GLOBALS['system']->l('register_birthdate')),
				  array("{selectbirthyear}",$GLOBALS['system']->GenBirthYears()),
				  array("{selectbirthmonth}",$GLOBALS['system']->GenSelectMonths()),
				  array("{selectbirthday}",$GLOBALS['system']->GenSelectDays()),
				  array("{submit}",$GLOBALS['system']->l('register_submit')),
				 );
			 
		return $content;
		}
		
		function Validate(){
			 if($GLOBALS['vars']['username'] == ""){$GLOBALS['ERROR'][] = $GLOBALS['system']->l('register_NoUsername');}
			 if($GLOBALS['vars']['password'] == "" || $GLOBALS['vars']['password2'] == ""){$GLOBALS['ERROR'][] = $GLOBALS['system']->l('register_NoPassword');}
			 if($GLOBALS['vars']['year'] == "" or $GLOBALS['vars']['month'] == "" or $GLOBALS['vars']['day'] == ""){$GLOBALS['ERROR'][] = $GLOBALS['system']->l('register_NoBirthYear');}
			 if($GLOBALS['vars']['password'] != $GLOBALS['vars']['password2']){$GLOBALS['ERROR'][] = $GLOBALS['system']->l('register_PasswordDontMatch');}
			 if(strpos($GLOBALS['vars']['email'], "@") === false){$GLOBALS['ERROR'][] = $GLOBALS['system']->l('register_InvalidEmail');}
			 if(preg_match("/^[a-zA-Z0-9]+$/", $GLOBALS['vars']['username']) != 1){$GLOBALS['ERROR'][] = $GLOBALS['system']->l('register_usernameaz');}
			 if(preg_match("/^[a-zA-Z0-9]+$/", $GLOBALS['vars']['password']) != 1){$GLOBALS['ERROR'][] = $GLOBALS['system']->l('register_passwordaz');}
			 $params = array(
			 	array(":username", $GLOBALS['vars']['username'], "str")
			 );
			 $res = $GLOBALS['system']->db_query("SELECT * FROM users WHERE username = :username", $params);
			 if(count($res)>0){
			 $GLOBALS['ERROR'][] = $GLOBALS['system']->l('register_UsernameExist');
			 }	
			 $params = array(
			 	array(":email", $GLOBALS['vars']['email'], "str")
			 );
			 $res = $GLOBALS['system']->db_query("SELECT * FROM users WHERE email = :email", $params);
			 if(count($res)>0){
			 $GLOBALS['ERROR'][] = $GLOBALS['system']->l('register_EmailExist');
			 }
		}
		
		function Register(){
			self::Validate();
				 if(count($GLOBALS['ERROR'])<1){
				 	$GLOBALS['vars']['password'] = sha1($GLOBALS['vars']['password']);
					$params = array(
						array(":username", $GLOBALS['vars']['username'], "str"),
						array(":password", $GLOBALS['vars']['password'], "str"),
						array(":email", $GLOBALS['vars']['email'], "str"),
						array(":birth", $GLOBALS['vars']['year'], "str"),
						array(":group", "3", "str"),
						array(":birthdate", $GLOBALS['vars']['year']."-".$GLOBALS['vars']['month']."-".$GLOBALS['vars']['day'], "str"),
						array(":RegisterationDate", date("Y-m-d H:i:s"), "str"),
					);
				 	$result = $GLOBALS['system']->db_query("INSERT INTO `users` (`username`, `password`, `email`, `BirthYear`, `group`, `RegisterationDate`, `birthdate`) VALUES (:username, :password, :email, :birth, :group, :RegisterationDate, :birthdate)", $params);
				 	if($result!="error")
		 			{
		 			 $GLOBALS['SUCCESS'][] = $GLOBALS['system']->l('register_completed').'<script type="text/javascript">$("#register").empty();setTimeout(function(){ window.location = "index.php"; }, 5000);</script>';
					}
				 }
			}
		
	
			
	}
	
	
	
?>