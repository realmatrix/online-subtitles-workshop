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
			$GLOBALS['COMMON']->UpdateLoginBan();
			if(!$GLOBALS['COMMON']->CheckLoginBan()){
			$args = array(
				array(":username", $GLOBALS['vars']['u'], "str"),
				array(":password", sha1($GLOBALS['vars']['p']), "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM users WHERE username=:username and password=:password limit 1", $args);
			if(count($res)>0){
				$array = array(
					array("key" => $res[0]['key']),
				); 
				echo self::xml("1", "", $array);
			}
			else{
				$GLOBALS['COMMON']->FailedLogin();
				echo self::xml("0","invalid username or password");
			}
			}
			else{
				echo self::xml("0", "banned try sgsin in 5 minutes");
			}
		}
		
		
		function xml($state, $message, $content = array()){
			$newsXML = new SimpleXMLElement("<response></response>");
			//$newsXML->addAttribute('newsPagePrefix', 'value goes here');
			$system = $newsXML->addChild('system');
			$system->addAttribute('state', $state);
			$system->addAttribute('message', $message);
			//print_r($keys);
			for ($i=0; $i < count($content); $i++) {
				 $keys = array_keys($content[$i]);
				 $data = $newsXML->addChild('data');
				 for ($j=0; $j < count($keys); $j++) {
					 $data->addAttribute($keys[$j], $content[$i][$keys[$j]]);
				 }
			}
			Header('Content-type: text/xml');
			return $newsXML->asXML();
		}



	
			
	}
	
	
	
?>