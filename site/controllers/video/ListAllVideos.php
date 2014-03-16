<?php

	class CListAllVideos{
		
		function ListAllVideos(){
			return self::ListAllVideos_content();
		}
	
		function ListAllVideos_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
		
		function ListAllVideos_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function ListAllVideos_content(){
				$content = array
				  (
				  array("{TableRows}", self::GetVideos()),
				 );			 
		return $content;
		}
		
		function GetVideos(){
			$limit = 30;
			if(!isset($GLOBALS['vars']['i'])){$GLOBALS['vars']['i'] = 0;}
			$args = array(
				array(":from", $GLOBALS['vars']['i'], "str"),
				array(":to", $GLOBALS['vars']['i'] + $limit, "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` limit :from, :to", $args);
			$TableRows = "";
			for ($i=0; $i < count($res); $i++) { 
				$TableRows .= "<tr>";
				$TableRows .= "<td></td>";
				$TableRows .= "<td></td>";
				$TableRows .= "<td></td>";
				$TableRows .= "<td></td>";
				$TableRows .= "</tr>";
			}
			return $TableRows;
		}



		

		

}