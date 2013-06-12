<?php

	class CAddSubtitle{

		
		function AddSubtitle(){
			return self::AddSubtitle_content();
		}
	
		function AddSubtitle_hooks(){
			$array = array(
				array("SubmitSubtitle", "CreateSubtitle")
			);
			return $array;
		}
			
		function AddSubtitle_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function AddSubtitle_content(){
				$content = array
				  (
				  array("{vid}", $_GET['vid']),
				  array("{AddSubtitle}", $GLOBALS['lang']['subtitle_AddSubtitle_AddSubtitle']),
				  array("{ReleaseName}", $GLOBALS['lang']['subtitle_AddSubtitle_ReleaseName']),
				  array("{Language}", $GLOBALS['lang']['subtitle_AddSubtitle_Language']),
				  array("{Version}", $GLOBALS['lang']['subtitle_AddSubtitle_Version']),
				  array("{Fps}", $GLOBALS['lang']['subtitle_AddSubtitle_FPS']),
				  array("{Format}", $GLOBALS['lang']['subtitle_AddSubtitle_Format']),
				  array("{NoCDs}", $GLOBALS['lang']['subtitle_AddSubtitle_CDS']),
				  array("{submit}", $GLOBALS['lang']['subtitle_AddSubtitle_Submit']),
				  array("{SubtitleLanguages}", self::languages()),
				  array("{SubtitleCDS}", self::cds()),
				  array("{SubtitleFPS}", self::fps()),
				  array("{SubtitleVersions}", self::versions()),
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

		function cds(){
			$cds = Common::GetCds();
			for ($i=0; $i < count($cds); $i++) { 
				$res .= "<option value='".$cds[$i]['id']."'>".$cds[$i]['cd']."</option>";
			}
			return $res;
		}	
		
		function fps(){
			$fps = Common::GetFps();
			for ($i=0; $i < count($fps); $i++) { 
				$res .= "<option value='".$fps[$i]['id']."'>".$fps[$i]['fps']."</option>";
			}
			return $res;
		}			

		function versions(){
			$versions = Common::GetVersions();
			for ($i=0; $i < count($versions); $i++) { 
				$res .= "<option value='".$versions[$i]['id']."'>".$versions[$i]['version']."</option>";
			}
			return $res;
		}
		
	}
	
	
	
?>