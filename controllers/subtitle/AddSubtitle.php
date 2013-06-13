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
			if($_GET['vid']!=""){$vid=$_GET['vid'];}
			if($_POST['vid']!=""){$vid=$_POST['vid'];}
				$content = array
				  (
				  array("{vid}", $vid),
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
				  array("{SubtitleFPSsec}", self::numbers()),
				  array("{SubtitleFPSmilsec}", self::numbers()),
				  array("{SubtitleFormats}", self::formats()),
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
		
		function numbers(){
			for ($i=1; $i <= 100; $i++) { 
				$res .= "<option value='".$i."'>".$i."</option>";
			}
			return $res;
		}			

		function formats(){
			$formats = Common::GetFormats();
			for ($i=0; $i < count($formats); $i++) { 
				$res .= "<option value='".$formats[$i]['id']."'>".$formats[$i]['format']."</option>";
			}
			return $res;
		}
		
		function CreateSubtitle(){
			$params = array(
				array(":fpssec", $_POST['fpssec'], "str"),
				array(":fpsmilsec", $_POST['fpsmilsec'], "str"),
				array(":releasename", $_POST['ReleaseName'], "str"),
				array(":version", $_POST['version'], "str"),
				array(":language", $_POST['Language'], "str"),
				array(":format", $_POST['format'], "str"),
				array(":cds", $_POST['cds'], "str"),
				array(":vid", $_POST['vid'], "str"),
			);
			$res=Common::db_query("INSERT INTO `Subtitles` (`fps_sec`, `fps_mil_sec`, `release_name`, `version`, `language`, `format`, `cds`, `vid`) VALUES (:fpssec, :fpsmilsec, :releasename, :version, :language, :format, :cds, :vid);", $params);	
		}
			
	}
	
	
	
?>