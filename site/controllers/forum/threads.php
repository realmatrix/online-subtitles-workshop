<?php

	class Cthreads{
			
		function threads_sections(){
			$array = array(
				array("forum", "ListThreads", $GLOBALS['vars'], self::ListThreads()),
				array("forum", "CreateThread", $GLOBALS['vars'], self::ListThreads()),
				array("forum", "ViewThread", $GLOBALS['vars'], self::ViewThread()),
				array("forum", "reply", $GLOBALS['vars'], self::ViewThread()),
			);
			return $array;
		}
		
		function threads_set(){
			$GLOBALS['vars']['PageTitle'] = "Forums";
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
			$GLOBALS['BreadCrumbs'] = array(
				array("forums", "page=forum&sec=forums"),
				array("categories", "page=forum&sec=threads&cat=".$GLOBALS['vars']['cat']."&fid=".$GLOBALS['vars']['fid']),
			);
			
		}
		
		function ListThreads(){
			if($GLOBALS['vars']['tid']!=""){return FALSE;}else{return TRUE;}
		}
		
		function ViewThread(){
			if($GLOBALS['vars']['tid']!=""){return TRUE;}else{return FALSE;}
		}
			
	}

	
?>