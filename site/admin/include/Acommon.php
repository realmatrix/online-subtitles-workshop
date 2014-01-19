<?php
	
	class Acommon{
		


		function LoadTemplate($template){
			$content = file_get_contents($GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template']."/".$template);
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

		
		
		function LoadSections($controller, $section, $vars){
			require_once ("controllers/".$controller."/".$section.".php");
			$array = call_user_func('C'.$section."::".$section."_sections");
			$sections = self::LoadPage($array, $vars);
			return $sections;
		}

		

		function CurrentPageUrl() {
		 $pageURL = 'http';
		 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
		 return $pageURL;
		}
	
	
	
		function LoadSection($controller, $section, $args){
			$res = "";
			if(self::checkSectionOptions($controller, $section, $message)){
			include_once "controllers/".$controller."/".$section.".php";
			$hooks = call_user_func('C'.$section.'::'.$section.'_hooks');
			$found = 0;
				for ($i=0; $i < count($hooks); $i++) {
					if(self::CheckControllerHook($section, $hooks[$i][0], $args)===TRUE){call_user_func('C'.$section.'::'.$hooks[$i][1], $args); $found++;}
				}
				if($args['ssec']==$section and $found==0){
					$GLOBALS['ERROR'][] = "function '".$args['h']."' not found in controllers/".$controller."/".$section.".php";
					$GLOBALS['ERROR'][] = "BUG URL-> <b>".self::CurrentPageUrl()."</b>";
				}
			$content = call_user_func('C'.$section.'::'.$section);
			$options = "";
			$res = self::RenderView($content, $controller, $section);
			//if(!array_key_exists($controller.'_'.$section.'_title', $GLOBALS['page'])){$GLOBALS['ERROR'][]= "GLOBALS['page']['".$controller.'_'.$section."_title'] not found inside language file.";}
			return $res;
			}
			else{
				//echo "<script>alert('".$message."');</script>";
			} 
		}
		
		
		
		function LoadPage($array, $vars){
			$page = "";
			for ($i = 0; $i <= count($array)-1; $i++) {
				if($array[$i][3]){
					 $args = array_merge($vars, $array[$i][2]);
					 $page .= "<div id='SystemAjax_".$array[$i][0]."_".$array[$i][1]."'>".self::LoadSection($array[$i][0], $array[$i][1], $args)."</div>";
				}
			}
			return $page;
		}
		

		function checkSectionOptions($controller, $section, &$message){
			include_once "controllers/".$controller."/".$section.".php";
			$options =  call_user_func("C".$section."::".$section."_options");
			$LoadSEction = FALSE;
			if($_GET['page']!=""){$page = $_GET['page'];}
			if($_POST['page']!=""){$page = $_POST['page'];}
			if($_GET['page']=="" and $_POST['page']==""){$page = "home";}
			if($options['loggedin']=="yes" and self::IsLoggedin()){$LoadSEction = TRUE;}
			if($options['loggedin']=="no" and !self::IsLoggedin()){$LoadSEction = TRUE;}
			if(count($options['show'])>0 and in_array($page, $options['show'])){$LoadSEction = TRUE;}
			if(count($options['show'])==0){$LoadSEction=TRUE;}
			if($options['loggedin']=="yes" and !self::IsLoggedin()){
				$LoadSEction = FALSE;
				$message = "require user to be loggedin.";
			}
			if($options['loggedin']=="no" and self::IsLoggedin()){
				$LoadSEction = FALSE;
				$message = "require user to be not loggedin.";
			}	
			if(count($options['hide'])>0 and in_array($page, $options['hide'])){$LoadSEction = FALSE;}
			return $LoadSEction;
		}



		function IsLoggedin(){
			if($_SESSION['loggedin']=="YES"){
				return true;
			}else{
				return false;
			}
		}
		
		
		
		function CheckControllerHook($section, $hook, $args){
			if((isset($args['ssec']) and $args['ssec']==$section) and (isset($args['h']) and $args['h']==$hook)){$res = "yes";}
			if($res=="yes"){return TRUE;}else{return FALSE;}
		}
	
	
	

	

		function RenderView($array, $view, $section){
			$page = file_get_contents($GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template']."/".$view."_".$section.".tpl");
			for ($i = 0; $i <= count($array)-1; $i++) {
			    $page = str_replace($array[$i][0], $array[$i][1], $page);
			}
			return $page;
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
		
		
		function GetTotalMembers(){
			$args = array();
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Users`", $args);
			return count($res);
		}
		
		
		function GetTotalSubtitles(){
			$args = array();
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Subtitles`", $args);
			return count($res);		
		}
		
		
		function GetTotalVideos(){
			$args = array();
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Videos`", $args);
			return count($res);			
		}
		
		
		function GetNewMessages(){
			$args = array(
				array(":uid", $_SESSION['id'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `PrivateMessages` WHERE `to` = :uid", $args);
			return count($res);
		}
		
		
		function SetOption($name, $value){
			$args = array(
				array(":name", $name, "res"),
				array(":value", $value, "res"),
			);
			$res = $GLOBALS['COMMON']->db_query("UPDATE `Settings` SET `value` = :value WHERE `name` = :name;", $args, $state);
			if($state===TRUE){return TRUE;}else{return FALSE;}
		}
		
		
		function CleanTmp(){
			  $path = './tmp';
			  if ($handle = opendir($path)) {
			    while (false !== ($file = readdir($handle))) {
			        if ((time()-filectime($path.'/'.$file)) < 86400) {  // 86400 = 60*60*24
			          if (strripos($file, '.gz') !== false or strripos($file, '.csv') !== false) {
			            unlink($path.'/'.$file);
			          }
			        }
			    }
			  }
		}
		
		
	}
	
?>