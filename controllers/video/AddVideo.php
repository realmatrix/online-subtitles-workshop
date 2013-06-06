<?php

	class CAddVideo{

		
		function AddVideo(){
			return self::AddVideo_content();
		}
	
		function AddVideo_hooks(){
			$array = array(
				array("SubmitVideo", "AddNewVideo"),
			);
			return $array;
		}
			
		function AddNewVideo(){
			echo "sdfkl;gd;lkgjdf;slkgjdfs;lkgjdf;gkljgpoierjug;dfkjg;dlgj;dflkgjdfl;kgjdf;lgjkdf;lkgjdf;lgjkf;lgkjfdglk;djfdlf;kjdf;lkgjdf;ljgk";
		}
				
		function AddVideo_content(){
				$content = array
				  (
				  array("{VideoType}", self::types()),
				  array("{VideoCategory}", self::categories()),
				  array("{VideoLanguage}", self::languages()),
				 );
			 
		return $content;
		}
		
		function languages(){
			$languages = common::GetLanguages();
			for ($i=0; $i < count($languages); $i++) { 
				$res .= "<option value='".$languages[$i]['id']."'>".$languages[$i]['language']."</option>";
			}
			return $res;
		}
		
		function types(){
			$types = common::GetVideoTypes();
			for ($i=0; $i < count($types); $i++) { 
				$res .= "<option value='".$types[$i]['id']."'>".$types[$i]['type']."</option>";
			}
			return $res;
		}
		
		function categories(){
			$categories = common::GetVideoCategories();
			for ($i=0; $i < count($categories); $i++) { 
				$res .= "<option value='".$categories[$i]['id']."'>".$categories[$i]['category']."</option>";
			}
			return $res;
		}
		
		

		
	}
	
	
	
?>