<?php

	ignore_user_abort(true);
	set_time_limit(0);

	class Ccron{
		
		private static $content = array();
	
		function cron(){
			return self::cron_content();
		}
	
		function cron_hooks(){
			$array = array(
				array("runall", "RunJob(RunAll)"),
				array("userkeys", "RunJob(UpdateUserKeys)"),
				array("translate", "RunJob(AutoTranslation)"),
			);
			return $array;
		}
			
		function cron_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"",
			);
			return $options;
		}
				
		function cron_content(){
				$content = array
				  (
				  array("{content}", self::report()),
				 );
			 
		return $content;
		}
		
		function state($message){
			array_push(self::$content, $message);
		}
		
		function report(){
			if($GLOBALS['vars']['report']=="1"){
				return implode("<br>", self::$content);
			}else{
				return "";
			}
		}
		
		function RunJob($job){
			$args = array(
				array(":job", $job, "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `SystemCron` WHERE `job` = :job", $args);
			if($GLOBALS['COMMON']->GetMicroTime() - $res[0]['last_run']>$res[0]['frequancy']){
				$args = array(
					array(":time", $GLOBALS['COMMON']->GetMicroTime(), ""),
					array(":job", $job, "str"),
				);
				$GLOBALS['COMMON']->db_query("UPDATE `systemcron` SET `last_run` = :time WHERE `job` = :job", $args);
				self::$job();
			}
		}
		
		function RunAll(){
			self::RunJob('UpdateUserKeys');
			self::RunJob('AutoTranslation');
		}
		
		function ClearLoginBan(){
			
		}
		
		function UpdateUserKeys(){
			$GLOBALS['COMMON']->UpdateUsersKeys();
		}
		
		function AutoTranslation(){
			self::state("running translation...");
			$lines = $GLOBALS['COMMON']->db_query("SELECT * FROM `TranslationQueue` order by `id` ASC limit 10", array());
				for ($i=0; $i < count($lines); $i++) {
					$text = urlencode($lines[$i]['text']);
					$content = file_get_contents("http://glosbe.com/gapi/translate?from=".$lines[$i]['from']."&dest=".$lines[$i]['to']."&format=json&phrase=".$text."&pretty=true");
					$content = json_decode($content, true); 
					$translation = $content['tuc'][0]['phrase']['text'];
						if($translation!=""){
							$args = array(
								array(":lid", $lines[$i]['lid'], "str"),
								array(":sid", $lines[$i]['sid'], "str"),
								array(":cid", $lines[$i]['cid'], "str"),
								array(":text", $translation, "str"),
							);
							$res = $GLOBALS['COMMON']->db_query("UPDATE `Transcriptions` SET `text` = :text WHERE `lid`=:lid and `sid`=:sid and `cid`=:cid ", $args, $ExecState);
							if($ExecState===TRUE){self::state($lines[$i]['lid']." ok");}else{self::state($lines[$i]['lid']." failed");}
						}else{
							self::state($lines[$i]['lid']." - null -"." ok");
						}
				}
		}
		

	
			
	}
	
	
	
?>