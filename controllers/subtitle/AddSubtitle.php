<?php

	class CAddSubtitle{

	public static $RefreshSubtitles = "";
			
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
				  array("{vid}", $GLOBALS['vars']['vid']),
				  array("{AddSubtitle}", $GLOBALS['COMMON']->l('subtitle_AddSubtitle_AddSubtitle')),
				  array("{ReleaseName}", $GLOBALS['COMMON']->l('subtitle_AddSubtitle_ReleaseName')),
				  array("{Language}", $GLOBALS['COMMON']->l('subtitle_AddSubtitle_Language')),
				  array("{Country}", $GLOBALS['COMMON']->l('subtitle_AddSubtitle_Country')),
				  array("{Version}", $GLOBALS['COMMON']->l('subtitle_AddSubtitle_Version')),
				  array("{Fps}", $GLOBALS['COMMON']->l('subtitle_AddSubtitle_FPS')),
				  array("{Format}", $GLOBALS['COMMON']->l('subtitle_AddSubtitle_Format')),
				  array("{NoCDs}", $GLOBALS['COMMON']->l('subtitle_AddSubtitle_CDS')),
				  array("{submit}", $GLOBALS['COMMON']->l('subtitle_AddSubtitle_Submit')),
				  array("{SubtitleLanguages}", self::languages()),
				  array("{SubtitleCountry}", self::countries()),
				  array("{SubtitleCDS}", self::cds()),
				  array("{SubtitleFPSsec}", self::numbers()),
				  array("{SubtitleFPSmilsec}", self::numbers()),
				  array("{SubtitleFormats}", self::formats()),
				  array("{RefreshSubtitles}", self::$RefreshSubtitles),
				 );
			 
		return $content;
		}
		
		function languages(){
			$languages = $GLOBALS['COMMON']->GetLanguages();
			for ($i=0; $i < count($languages); $i++) { 
				$res .= "<option value='".$languages[$i]['id']."'>".$languages[$i]['language']."</option>";
			}
			return $res;
		}

		function cds(){
			$cds = $GLOBALS['COMMON']->GetCds();
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
			$formats = $GLOBALS['COMMON']->GetFormats();
			for ($i=0; $i < count($formats); $i++) { 
				$res .= "<option value='".$formats[$i]['id']."'>".$formats[$i]['format']."</option>";
			}
			return $res;
		}
		
		function countries(){
			$countries = $GLOBALS['COMMON']->GetCountries();
			$res = "";
			for ($i=0; $i < count($countries); $i++) { 
				$res.="<option value='".$countries[$i]['id']."'>".$countries[$i]['short_name']."</option>";
			}
			return $res;
		}
		
		function CreateSubtitle(){
			$params = array(
				array(":fpssec", $GLOBALS['vars']['fpssec'], "str"),
				array(":fpsmilsec", $GLOBALS['vars']['fpsmilsec'], "str"),
				array(":releasename", $GLOBALS['vars']['ReleaseName'], "str"),
				array(":version", $GLOBALS['vars']['version'], "str"),
				array(":language", $GLOBALS['vars']['Language'], "str"),
				array(":format", $GLOBALS['vars']['format'], "str"),
				array(":cds", $GLOBALS['vars']['cds'], "str"),
				array(":vid", $GLOBALS['vars']['vid'], "str"),
				array(":country", $GLOBALS['vars']['Country'], "str"),
				array(":uid", $_SESSION['id'], "str")
			);
			$res=$GLOBALS['COMMON']->db_query("INSERT INTO `Subtitles` (`fps_sec`, `fps_mil_sec`, `release_name`, `version`, `language`, `format`, `cds`, `vid`, `country`, `uid`) VALUES (:fpssec, :fpsmilsec, :releasename, :version, :language, :format, :cds, :vid, :country, :uid);", $params, $ExecState);
			if($ExecState === TRUE){$GLOBALS['SUCCESS'][]="Subtitle Added Successfully";} else {$GLOBALS['ERROR'][]="Adding Subtitle Failed";}
		}
	
			
	}
	
	
	
?>