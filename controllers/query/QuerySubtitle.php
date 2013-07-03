<?php

	class CQuerySubtitle{

	public static $query = "";
			
		function QuerySubtitle(){
			return self::QuerySubtitle_content();
		}
	
		function QuerySubtitle_hooks(){
			$array = array(
				array("edit", "UpdateSubtitle"),
			);
			return $array;
		}
			
		function QuerySubtitle_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function QuerySubtitle_content(){
				$content = array
				  (
				  array("{query}", self::$query),
				 );
			 
		return $content;
		}
		
		function UpdateSubtitle(){
			if($GLOBALS['vars']['type']!="start" and $GLOBALS['vars']['type']!="end" and $GLOBALS['vars']['type']!="text"){return FALSE;}
			if($GLOBALS['vars']['sid']=="" or $GLOBALS['vars']['cid']=="" or $GLOBALS['vars']['lid']==""){return FALSE;}
			if(!self::GetPermission()){return FALSE;}
			if($GLOBALS['vars']['type']=="start"){self::UpdateStart();}
			if($GLOBALS['vars']['type']=="end"){self::UpdateEnd();}
			if($GLOBALS['vars']['type']=="text"){self::UpdateText();}
		}
		
		function UpdateStart(){
			$args = array(
				array(),
			);
			$res = $GLOBALS['COMMON']->db_query("", $args);
			self::$query = "it works";
		}
		
		function UpdateEnd(){
			$args = array(
				array(),
			);
			$res = $GLOBALS['COMMON']->db_query("", $args);
			self::$query = "it works";
		}
		
		function UpdateText(){
			$args = array(
				array(),
			);
			$res = $GLOBALS['COMMON']->db_query("", $args);
			self::$query = "it works";
		}
		
		function GetPermission(){
			$Permission = FALSE;
			//checking owner
			$args = array(
				array(":uid", $_SESSION['id'], "str"),
				array(":sid", $GLOBALS['vars']['sid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `Subtitles` WHERE `uid` = :uid and `id` = :sid", $args);
			if(count($res)>0){$Permission = TRUE;}
			//checking team
			
			return $Permission;
		}
		
		function Timing($time){
			$res = array(
			"h" => "",
			"m" => "",
			"s" => "",
			"ms" => "",
			);
			$t = explode(":", $time);
			if(count($t)<3){return $res;}
			$res['h'] = $t[0];
			$res['m'] = $t[1];
			$t2 = explode(",", $t[2]);
			if(count($t2)<2){return $res;}
			$res['s'] = $t2[0];
			$res['ms'] = $t2[1];
			return $res;
		}


	
			
	}
	
	
	
?>