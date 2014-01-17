<?php

	class CExportLanguage{
		
		public static $SearchResult = "";
			
		function ExportLanguage(){
			return self::ExportLanguage_content();
		}
	
		function ExportLanguage_hooks(){
			$array = array(
				array("edit", "Edit"),
				array("save", "Save"),
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
			 );
		return $content;
		}
		
		function Edit(){
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM ".$GLOBALS['vars']['lang'], array());
			$content = "";
			for ($i=0; $i < count($res); $i++) {
				//$text = mb_convert_encoding($res[$i]['text'], "UTF-8");
				$text = htmlspecialchars($res[$i]['text'], ENT_QUOTES); 
				$text = htmlentities($res[$i]['text']);
				$content.="<tr>";
				$content.="<td class='ExportLanguage-key'>".$res[$i]['key']."</td>";
				$content.="<td class='ExportLanguage-text'><input type='text' name='text[".$i."]' value='".$text."' class='span12 typeahead' id='typeahead' /></td>";                                      
				$content.="<input type='hidden' name='key[".$i."]' value='".$res[$i]['key']."'/>";
				$content.="</tr>"; 
			}
			self::$SearchResult = $content;
		}
		
		function Save(){
			print_r($GLOBALS['vars']['key']);
			self::Edit();
		}
					
			
	}
	

	
?>