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
			if($GLOBALS['vars']['type']!="start" and $GLOBALS['vars']['type']!="end" and $GLOBALS['vars']['type']!="text"){return false;}
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


		

	
			
	}
	
	
	
?>