<?php
	
	class Acommon{
		


		function LoadTemplate($template){
			$content = file_get_contents($GLOBALS['TemplatePath'].$GLOBALS['Template']."/".$template);
			return $content;
		}	
			
		
		function render($array, $template){
			$template = $template.".tpl";
			$template = self::LoadTemplate($template);
			for ($i = 0; $i <= count($array)-1; $i++) {
			    $template = str_replace($array[$i][0], $array[$i][1], $template);
			}
			return $template;
		}
		
		
		function CheckAuthority(){
			if(!self::CheckLogin()){return FALSE;}
			$args = array(
				array(":id", $_SESSION['id'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Users` WHERE `id` = :id", $args);
			$gid = $res[0]['group'];
			$args = array(
				array(":gid", $gid, "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Groups` WHERE `id` = :gid", $args);
			if($res[0]['group']=="admin"){return TRUE;}else{return FALSE;}
		}
		
		
		function CheckLogin(){
			if(!$GLOBALS['COMMON']->IsLoggedin()){return FALSE;}else{return TRUE;}			
		}
		
		function login($username){
			$_SESSION['loggedin'] = "YES"; 
			$_SESSION['username'] = $username;
			$userinfo = $GLOBALS['COMMON']::GetUserInfo($username,"");
			$_SESSION['id'] = $userinfo[0]['id'];
		}
		
		
		function logout(){
			if(isset($_SESSION['loggedin'])){unset($_SESSION['loggedin']);}
			if(isset($_SESSION['username'])){unset($_SESSION['username']);}
			session_destroy();
			header('Location: index.php');
			$_GET['logout'] = "logout";
		}
		
		
		
	}
	
?>