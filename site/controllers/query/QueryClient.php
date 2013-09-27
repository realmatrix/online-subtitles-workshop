<?php

	class CQueryClient{

	public static $query = "";
			
		function QueryClient(){
			return self::QueryClient_content();
		}
	
		function QueryClient_hooks(){
			$array = array(
				array("login", "ClientLogin"),
			);
			return $array;
		}
			
		function QueryClient_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function QueryClient_content(){
				$content = array
				  (
				  array("{query}", self::$query), 
				 );			 
		return $content;
		}
		
		function ClientLogin(){
			if(!$GLOBALS['COMMON']->CheckLoginBan()){
			$args = array(
				array(":username", $GLOBALS['vars']['u'], "str"),
				array(":password", sha1($GLOBALS['vars']['p']), "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM Users WHERE username=:username and password=:password limit 1", $args);
			if(count($res)>0){
				echo $res[0]['key'];
			}
			else{
				$GLOBALS['COMMON']->FailedLogin();
			}
			}
			else{
				echo "banned try sgsin in 5 minutes";
			}
		}
		



	
			
	}
	
	
	
?>