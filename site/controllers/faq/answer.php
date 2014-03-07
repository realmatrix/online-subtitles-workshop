<?php

	class Canswer{
			
		function answer(){
			return self::answer_content();
		}
	
		function answer_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function answer_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function answer_content(){
			$answer = self::FaqAnswer();
				$content = array
				  (
				  array("{title}", $GLOBALS['system']->l("faq_answer_title")),
				  array("{question}", $answer[0]['q']),
				  array("{answer}", $answer[0]['a']),
				 );
			 
		return $content;
		}
		
		function FaqAnswer(){
			$args = array(
				array("qid", $GLOBALS['vars']['qid'], "str")
			);
			$answer = $GLOBALS['system']->db_query("SELECT * FROM faq where id = :qid", $args);
			return $answer;
		}

		

	
			
	}
	
	
	
?>