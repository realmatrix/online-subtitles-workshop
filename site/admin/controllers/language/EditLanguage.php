<?php

	class CEditLanguage{
		
		public static $SearchResult = "";
			
		function EditLanguage(){
			return self::EditLanguage_content();
		}
	
		function EditLanguage_hooks(){
			$array = array(
				array("edit", "Edit"),
				array("save", "Save"),
			);
			return $array;
		}
			
		function EditLanguage_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditLanguage_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_EditLanguage_title")),
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
				$content.="<td class='editlanguage-key'>".$res[$i]['key']."</td>";
				$content.="<td class='editlanguage-text'><input type='text' name='text[".$i."]' value='".$text."' class='span12 typeahead' id='typeahead' /></td>";                                      
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