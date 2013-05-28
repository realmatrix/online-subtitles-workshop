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
			 'method' => 'GET',
			 'action' => 'index.php',
			 'AjaxDiv' => 'SystemAjax_video_AddVideo',
			 'extra' => '',
			 'input' => array(
			 		array(type=>'select', content=>self::types(), 'text'=>$GLOBALS['lang']['video_AddVideo_VideoType'], 'name'=>'VideoType', 'id'=>'VideoType', 'extra'=>''),
			 		array(type=>'select', content=>self::categories(), 'text'=>$GLOBALS['lang']['video_AddVideo_VideoCategory'], 'name'=>'VideoCategory', 'id'=>'VideoCategory', 'extra'=>''),
			 		array(type=>'select', content=>self::languages(), 'text'=>$GLOBALS['lang']['video_AddVideo_VideoLanguage'], 'name'=>'VideoLanguage', 'id'=>'VideoLanguage', 'extra'=>''),
			 		array(type=>'text', content=>'', 'text'=>$GLOBALS['lang']['video_AddVideo_VideoTitle'], 'name'=>'VideoTitle', 'id'=>'VideoTitle', 'extra'=>''),
			 		array(type=>'img', content=>'http://www.w3schools.com/images/compatible_chrome.gif', 'text'=>$GLOBALS['lang']['video_AddVideo_VideoImage'], 'name'=>'VideoImage', 'id'=>'VideoImage', 'extra'=>''),
			 		array(type=>'AjaxSubmit', content=>$GLOBALS['lang']['video_AddVideo_VideoSubmit'], 'text'=>'', 'name'=>'VideoSubmit', 'id'=>'VideoSubmit', 'extra'=>''),
			 		array(type=>'hidden', content=>'yes', 'text'=>'', 'name'=>'dataonly', 'id'=>'dataonly', 'extra'=>''),
			 		array(type=>'hidden', content=>'video', 'text'=>'', 'name'=>'getcontroller', 'id'=>'getcontroller', 'extra'=>''),
			 		array(type=>'hidden', content=>'AddVideo', 'text'=>'', 'name'=>'getsection', 'id'=>'getsection', 'extra'=>''),
			 		array(type=>'hidden', content=>'AddVideo', 'text'=>'', 'name'=>'ssec', 'id'=>'ssec', 'extra'=>''),
			 		array(type=>'hidden', content=>'SubmitVideo', 'text'=>'', 'name'=>'h', 'id'=>'h', 'extra'=>''),
			 		),
			 );	
			 
				$content = array
				  (
				  array("{form}", common::form($form)),
				 );
			 
		return $content;
		}
		
		function languages(){
			$languages = common::GetLanguages();
			for ($i=0; $i < count($languages); $i++) { 
				$res[] = array($languages[$i]['id'], $languages[$i]['language']);
			}
			return $res;
		}
		
		function types(){
			$types = common::GetVideoTypes();
			for ($i=0; $i < count($types); $i++) { 
				$res[] = array($types[$i]['id'], $types[$i]['type']);
			}
			return $res;
		}
		
		function categories(){
			$categories = common::GetVideoCategories();
			for ($i=0; $i < count($categories); $i++) { 
				$res[] = array($categories[$i]['id'], $categories[$i]['category']);
			}
			return $res;
		}
		
		

		
	}
	
	
	
?>