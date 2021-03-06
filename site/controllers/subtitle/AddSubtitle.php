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
			$VideoInfo = $GLOBALS['system']->GetVideoInfo($GLOBALS['vars']['vid']);
				$content = array
				  (
				  array("{vid}", $GLOBALS['vars']['vid']),
				  array("{AddSubtitle}", $GLOBALS['system']->l('subtitle_AddSubtitle_AddSubtitle')),
				  array("{ReleaseName}", $GLOBALS['system']->l('subtitle_AddSubtitle_ReleaseName')),
				  array("{Language}", $GLOBALS['system']->l('subtitle_AddSubtitle_Language')),
				  array("{Country}", $GLOBALS['system']->l('subtitle_AddSubtitle_Country')),
				  array("{Version}", $GLOBALS['system']->l('subtitle_AddSubtitle_Version')),
				  array("{Fps}", $GLOBALS['system']->l('subtitle_AddSubtitle_FPS')),
				  array("{Format}", $GLOBALS['system']->l('subtitle_AddSubtitle_Format')),
				  array("{NoCDs}", $GLOBALS['system']->l('subtitle_AddSubtitle_CDS')),
				  array("{submit}", $GLOBALS['system']->l('subtitle_AddSubtitle_Submit')),
				  array("{SubtitleLanguages}", self::languages()),
				  array("{SubtitleCountry}", self::countries()),
				  array("{SubtitleCDS}", self::cds()),
				  array("{SubtitleFPSsec}", self::numbers()),
				  array("{SubtitleFPSmilsec}", self::numbers()),
				  array("{SubtitleFormats}", self::formats()),
				  array("{RefreshSubtitles}", self::$RefreshSubtitles),
				  array("{Video}", $GLOBALS['system']->l('subtitle_AddSubtitle_videotitle')),
				  array("{VideoTitle}", $VideoInfo[0]['title']),
				 );
			 
		return $content;
		}
		
		function languages(){
			$languages = $GLOBALS['system']->GetLanguages();
			for ($i=0; $i < count($languages); $i++) { 
				$res .= "<option value='".$languages[$i]['id']."'>".$languages[$i]['language']."</option>";
			}
			return $res;
		}

		function cds(){
			$cds = $GLOBALS['system']->GetCds();
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
			$formats = $GLOBALS['system']->GetFormats();
			for ($i=0; $i < count($formats); $i++) { 
				$res .= "<option value='".$formats[$i]['id']."'>".$formats[$i]['format']."</option>";
			}
			return $res;
		}
		
		function countries(){
			$countries = $GLOBALS['system']->GetCountries();
			$res = "";
			for ($i=0; $i < count($countries); $i++) { 
				$res.="<option value='".$countries[$i]['id']."'>".$countries[$i]['short_name']."</option>";
			}
			return $res;
		}
		
		function GetCD($id){
			$cd = $GLOBALS['system']->GetCDById($id);
			$res = $cd[0]['cd'];
			return $res;
		}
		
		function CreateSubtitle(){
			$key = $_SESSION['id'].$GLOBALS['system']->GetMicroTime().$GLOBALS['system']->GenRandomStr(5);
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
				array(":uid", $_SESSION['id'], "str"),
				array(":key", $key, "str"),
			);
			//creating subtitle
			$res=$GLOBALS['system']->db_query("INSERT INTO `subtitles` (`fps_sec`, `fps_mil_sec`, `release_name`, `version`, `language`, `format`, `cds`, `vid`, `country`, `uid`, `key`) VALUES (:fpssec, :fpsmilsec, :releasename, :version, :language, :format, :cds, :vid, :country, :uid, :key);", $params, $ExecState);
			if($ExecState === TRUE){$GLOBALS['SUCCESS'][]="Subtitle '".$GLOBALS['vars']['ReleaseName']."' Added Successfully";} else {$GLOBALS['ERROR'][]="Adding Subtitle '".$GLOBALS['vars']['ReleaseName']."' Failed";}
			//creating cds
			$res = $GLOBALS['system']->db_query("SELECT * FROM `subtitles` WHERE `key` = :key", array(array(":key", $key, "str")));
			$values = "";
			for ($i=0; $i < self::GetCD($res[0]['cds']); $i++) {
				$counter = $i + 1; 
				if($i==self::GetCD($res[0]['cds'])-1){$values .= "('".$res[0]['id']."', 'CD ".$counter."')";}else{$values .= "('".$res[0]['id']."', 'CD ".$counter."'),";}
			}
			$args = array();
			$res = $GLOBALS['system']->db_query("INSERT INTO `subtitlecds` (`sid`, `title`) VALUES ".$values.";", $args, $ExecState);
			if($ExecState === TRUE){} else {$GLOBALS['ERROR'][]="Creating subtitle '".$GLOBALS['vars']['ReleaseName']."' CDS Failed";}
		}
	
			
	}
	
	
	
?>