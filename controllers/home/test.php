<?php

	class Ctest{
		
		function test(){
			return self::test_content();
		}
		
		function test_hooks(){
			$array = array(
			
			);
			return $array;
		}
		
		function test_content(){
			$test = "this is controller test message";
			$TemplateHeader = file_get_contents($GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template']."/head.tpl");
			$TemplateHeader = str_replace("{SystemHeader}", $GLOBALS['SystemData']['SystemHeader'], $TemplateHeader);
			echo ">>>>>>>>>>>>>>>>".$TemplateHeader."<<<<<<<<<<<<<";
				$content = array
				  (
				  array("{test}",$test),
				  array("{TemplateHead}",$TemplateHeader),
				 );
			 
			 return $content;
		}
		
	}
	
	
	
?>