<?php

	class Clist{
			
		function list_sections(){
			$array = array(
				array("faq", "FaqList", $GLOBALS['vars'], TRUE),
				array("faq", "answer", $GLOBALS['vars'], self::ShowAnswer()),
			);
			return $array;
		}	
		
		function list_set(){
				if($GLOBALS['vars']['qid']!=""){
					$GLOBALS['vars']['PageTitle'] = self::GetQuestion();
				}
				else
				{
					$GLOBALS['vars']['PageTitle'] = "Frequently Asked Questions";
				}
			$GLOBALS['vars']['PageDesc'] = $GLOBALS['config']['site_description'];
		}
		
		function ShowAnswer(){
			if($GLOBALS['vars']['qid']!=""){return TRUE;}else{return FALSE;}
		}
		
		function GetQuestion(){
			$args = array(
				array("qid", $GLOBALS['vars']['qid'], "str")
			);
			$question = $GLOBALS['system']->db_query("SELECT * FROM faq where id = :qid", $args);
			return $question[0]['q'];
		}
			
	}

	
?>