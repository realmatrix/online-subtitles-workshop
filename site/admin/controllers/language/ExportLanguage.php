<?php

	class CExportLanguage{
		
		public static $SearchResult = "";
			
		function ExportLanguage(){
			return self::ExportLanguage_content();
		}
	
		function ExportLanguage_hooks(){
			$array = array(
				array("export", "Export"),
			);
			return $array;
		}
			
		function ExportLanguage_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ExportLanguage_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_ExportLanguage_title")),
			  array("{TableContent}", self::$SearchResult),
			  array("{page}", $GLOBALS['vars']['page']),
			  array("{sec}", $GLOBALS['vars']['sec']),
			  array("{lang}", $GLOBALS['vars']['lang']),
			  array("{LangName}", $GLOBALS['vars']['lang']),
			  array("{FileName}", $GLOBALS['vars']['lang'].".csv"),
			 );
		return $content;
		}
		
		function Export(){
			if($GLOBALS['vars']['lang']!=""){
				$res = $GLOBALS['COMMON']->db_query("SELECT * FROM ".$GLOBALS['vars']['lang'], array());
					$fp = fopen('tmp/'.$GLOBALS['vars']['lang'].'.csv', 'w');
					foreach ($res as $fields) {
					    fputcsv($fp, $fields);
					}
					fclose($fp);
			}
			 header( 'Location: tmp/'.$GLOBALS['vars']['lang'].'.csv');
		}
					
			
	}
	

	
?>