<?php

	class CSubtitleCDS{
			
		function SubtitleCDS(){
			return self::SubtitleCDS_content();
		}
	
		function SubtitleCDS_hooks(){
			$array = array(
				array("DeleteSubtitles", "DeleteSubtitles"),
			);
			return $array;
		}
			
		function SubtitleCDS_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function SubtitleCDS_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_SubtitleCDS_title")),
				  array("{tablerows}", self::GetCDS()),
				 );
			 
		return $content;
		}
		
		function GetCDS(){
			$cds = $GLOBALS['COMMON']->GetSubtitleCDS($GLOBALS['vars']['sid']);
			$res = "";
			for ($i=0; $i < count($cds); $i++) {
				$index = $i + 1; 
				$res .= "<tr>";
				$res .= "<td>".$index."</td>";
				$res .= "<td>".$cds[$i]['title']."</td>";
				$res .= "<td><a href='index.php?page=".$GLOBALS['vars']['page']."&sec=".$GLOBALS['vars']['sec']."&sid=".$GLOBALS['vars']['sid']."&cid=".$cds[$i]['id']."'>".$GLOBALS['COMMON']->l("subtitle_SubtitleCDS_edit")."</a></td>";
				$res .= "<td><a href='index.php?page=".$GLOBALS['vars']['page']."&sec=".$GLOBALS['vars']['sec']."&sid=".$GLOBALS['vars']['sid']."&cid=".$cds[$i]['id']."&dl=yes'><div class='teamdownload'></div></a></td>";
				$res .= "</tr>";
			}
			if($res==""){$res="no cd subtitles found go to 'manage subtitle' to create or upload subtitle to cd.";}
			return $res;
		}
		

		

	
			
	}
	
	
	
?>