<?php

	class CAddVideo{

		
		function AddVideo(){
			return self::AddVideo_content();
		}
	
		function AddVideo_hooks(){
			$array = array(
				array("SubmitVideo", "SubmitVideo"),
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
				  array("{Countries}", self::countries()),			  
				  array("{rd-day}", self::days()),
				  array("{rd-month}", self::months()),
				  array("{rd-year}", self::years()),
				  array("{length}", self::minutes()),
				 );
			 
		return $content;
		}
		
		function languages(){
			$languages = Common::GetLanguages();
			for ($i=0; $i < count($languages); $i++) { 
				$res .= "<option value='".$languages[$i]['id']."'>".$languages[$i]['language']."</option>";
			}
			return $res;
		}
		
		function types(){
			$types = Common::GetVideoTypes();
			for ($i=0; $i < count($types); $i++) { 
				$res .= "<option value='".$types[$i]['id']."'>".$types[$i]['type']."</option>";
			}
			return $res;
		}
		
		function categories(){
			$categories = Common::GetVideoCategories();
			for ($i=0; $i < count($categories); $i++) { 
				$res .= "<option value='".$categories[$i]['id']."'>".$categories[$i]['category']."</option>";
			}
			return $res;
		}
		
		function countries(){
			$countries = Common::GetCountries();
			for ($i=0; $i < count($countries); $i++) { 
				$res .= "<option value='".$countries[$i]['id']."'>".$countries[$i]['short_name']."</option>";
			}
			return $res;
		}
		
		function days(){
			$days = Common::days();
			for ($i=0; $i < count($days); $i++) { 
				$res .= "<option value='".$days[$i]."'>".$days[$i]."</option>";
			}
			return $res;
		}
		
		function months(){
			$months = Common::months();
			for ($i=0; $i < count($months); $i++) { 
				$res .= "<option value='".$months[$i]."'>".$months[$i]."</option>";
			}
			return $res;
		}

		function years(){
			$years = Common::years();
			for ($i=0; $i < count($years); $i++) { 
				$res .= "<option value='".$years[$i]."'>".$years[$i]."</option>";
			}
			return $res;
		}
		
		function minutes(){
			$minutes = Common::minutes(300);
			for ($i=0; $i < count($minutes); $i++) { 
				$res .= "<option value='".$minutes[$i]."'>".$minutes[$i]."</option>";
			}
			return $res;	
		}
		
		function SubmitVideo(){
			//VideoType=&VideoCategory=&VideoLanguage=&VideoTitle=&VideoOtherTitle=&country=&rd-month=&rd-day=&rd-year=&casting=&director=&length=&tags=&synopsis=+&dataonly=yes&getcontroller=video&getsection=AddVideo&ssec=AddVideo&h=SubmitVideo
			$UserID = $_SESSION['id'];
			
			return "aaaaaaaaaaaa";
		}
		
	}
	
	
	
?>