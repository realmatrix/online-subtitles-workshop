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
			$form = array(
			 'name' => 'submitnewvideo',
			 'id' => 'submitnewvideo',
			 'method' => 'get',
			 'action' => 'index.php',
			 'extra' => '',
			 'input' => array(
			 		array(type=>'select', content=>self::types(), 'text'=>$GLOBALS['lang']['video_AddVideo_VideoType'], 'name'=>'VideoType', 'id'=>'VideoType', 'extra'=>''),
			 		array(type=>'select', content=>self::categories(), 'text'=>$GLOBALS['lang']['video_AddVideo_VideoCategory'], 'name'=>'VideoCategory', 'id'=>'VideoCategory', 'extra'=>''),
			 		array(type=>'select', content=>self::languages(), 'text'=>$GLOBALS['lang']['video_AddVideo_VideoLanguage'], 'name'=>'VideoLanguage', 'id'=>'VideoLanguage', 'extra'=>''),
			 		),
			 );	
			 
				$content = array
				  (
				  array("{VideoType}", 'text'=>$GLOBALS['lang']['video_AddVideo_VideoType']),
				  array("{VideoCategory}", $GLOBALS['lang']['video_AddVideo_VideoCategory']),
				  array("{VideoLanguage}", $GLOBALS['lang']['video_AddVideo_VideoLanguage']),
				  array("{languages}", ''),
				  array("{types}", ''),
				  array("{categories}", ''),
				  array("{form}", form($form)),
				 );
			 
		return $content;
		}
		
		function languages(){
			$languages = GetLanguages();
			for ($i=0; $i < count($languages); $i++) { 
				$res[] = array($languages[$i]['id'], $languages[$i]['language']);
			}
			return $res;
		}
		
		function types(){
			$types = GetVideoTypes();
			for ($i=0; $i < count($types); $i++) { 
				$res[] = array($types[$i]['id'], $types[$i]['type']);
			}
			return $res;
		}
		
		function categories(){
			$categories = GetVideoCategories();
			for ($i=0; $i < count($categories); $i++) { 
				$res[] = array($categories[$i]['id'], $categories[$i]['category']);
			}
			return $res;
		}
		
		

		
	}
	
	
	
?>