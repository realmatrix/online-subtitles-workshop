<?php

	class CFaqList{
			
		function FaqList(){
			return self::FaqList_content();
		}
	
		function FaqList_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function FaqList_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function FaqList_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("faq_FaqList_title")),
				  array("{questions}", self::ListQuestions()),
				 );
			 
		return $content;
		}
		
		function ListQuestions(){
			$args = array();
			$questions = $GLOBALS['COMMON']->db_query("SELECT * FROM Faq", $args);
			$res = "<ul>";
			for ($i=0; $i < count($questions); $i++) { 
				$res .= "<li><a href='index.php?page=faq&sec=list&qid=".$questions[$i]['id']."'>".$questions[$i]['q']."</a></li>";
			}
			$res .= "</ul>";
			return $res;
		}

		

	
			
	}
	
	
	
?>