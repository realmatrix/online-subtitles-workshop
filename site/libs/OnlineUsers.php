<?php
class Onlineusers{
	
////////////////////////////////////////////
	function CheckSpiders(){

		// Add as many spiders you want in this array
		$spiders = array('Googlebot', 'Yammybot', 'Openbot', 'Yahoo', 'Slurp', 'msnbot', 'ia_archiver', 'Lycos', 'Scooter', 'AltaVista', 'Teoma', 'Gigabot', 'Googlebot-Mobile');
		
		// Loop through each spider and check if it appears in
		// the User Agent
		foreach ($spiders as $spider)
		{
			if (preg_match("/".$spider."/", $_SERVER['HTTP_USER_AGENT']))
			{
				$array[] = $spider;
				//return TRUE;
			}
		}
		if(count($array)>0){
			return $array;
		}
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function AddOnlineUser(){
		$session=session_id();
		$username = $_SESSION['username'];
 		$time=time();
		$params = array(
			array(":session", $session, "str")
		);
		$result=$GLOBALS['system']->db_query("SELECT * FROM onlineusers WHERE session=:session", $params);
		if(count($result)=="0"){
			$params = array(
				array(":session", $session, "str"),
				array(":time", $time, "str"),
				array(":username", $username, "str")
			);	
		 $result1=$GLOBALS['system']->db_query("INSERT INTO onlineusers(session, time, username)VALUES(:session, :time, :username)", $params);
		 }
		 else {
		 	$params = array(
				array(":session", $session, "str"),
				array(":time", $time, "str"),
				array(":username", $username, "str")
			);
		 $result2=$GLOBALS['system']->db_query("UPDATE onlineusers SET time=:time, username=:username WHERE session = :session", $params);
		 }
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function RemoveOnlineUser(){
		$session=session_id();
		$params = array(
			array(":session", $session, "str")
		);
		$result = $GLOBALS['system']->db_query("DELETE FROM onlineusers WHERE session =:session", $params);
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function UpdateOnlineUsers(){
		$time=time();
		$time_check=$time-600; //SET TIME 10 Minute
		$params = array(
		array(":time",$time_check,"str")
		);
 		$result=$GLOBALS['system']->db_query("DELETE FROM onlineusers WHERE time<:time",$params);
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function AddOnlineGuest(){
		$session=session_id();
		$time=time();
		$params = array(
		array(":session", $session, "str")
		);
		$result=$GLOBALS['system']->db_query("SELECT * FROM onlineusers WHERE session=:session", $params);
		if(count($result)=="0" and $session!=""){
		$params = array(
			array(":session", $session, "str"),
			array(":time", $time, "str")
		);	
		 $result1=$GLOBALS['system']->db_query("INSERT INTO onlineusers(session, time)VALUES(:session, :time)", $params);
		 }
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GetOnlineGuests(){
		$user = array();
		$params = array(
			array(":username", "", "str")
		);
		$result = $GLOBALS['system']->db_query("SELECT * FROM onlineusers WHERE username=:username", $params);
		foreach($result as $row){
			$user[] = $row['username'];
		}
		$res = $user;
		//print_r($res);
		return $res;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GetOnlineUsers(){
		$user = array();
		$params = array(
			array(":username", "", "str")
		);
		$result = $GLOBALS['system']->db_query("SELECT * FROM onlineusers WHERE username<>:username", $params);
		foreach($result as $row){
			$user[] = $row['username'];
		}
		$res = $user;
		//print_r($res);
		return $res;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GetAllOnline(){
		$online['spiders']= self::CheckSpiders();
		$online['guests']= self::GetOnlineGuests();
		$online['users']= self::GetOnlineUsers();
		return $online;
	}
////////////////////////////////////////////
	
}
?>