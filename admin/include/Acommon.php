<?php
	
	class Acommon{
		


		function LoadTemplate($template){
			$content = file_get_contents($GLOBALS['TemplatePath'].$GLOBALS['Template']."/".$template);
			return $content;
		}	
			
		
		function render($array, $template){
			$template = $template.".tpl";
			$template = self::LoadTemplate($template);
			for ($i = 0; $i <= count($array)-1; $i++) {
			    $template = str_replace($array[$i][0], $array[$i][1], $template);
			}
			return $template;
		}
		
		
		
	}
	
?>