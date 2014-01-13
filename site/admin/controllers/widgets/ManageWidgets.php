<?php

	class CManageWidgets{
			
		function ManageWidgets(){
			return self::ManageWidgets_content();
		}
	
		function ManageWidgets_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ManageWidgets_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ManageWidgets_content(){
			$widgets = self::ListWidgets();
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_ManageWidgets_title")),
				  array("{widgets}", $widgets),
				 );
			 
		return $content;
		}
		
		function ListWidgets(){
			$res = array();
			if ($handle = opendir('../widgets')) {
			    while (false !== ($entry = readdir($handle))) {
			        if ($entry != "." && $entry != "..") {
			            $res[] = $entry;
			        }
			    }
			    closedir($handle);
			}
			$widgets = "";
			for ($i=0; $i < count($res); $i++) {
				$WidgetInfo = self::GetWidgetInfo($res[$i]); 
								$widgets.="<tr>";
								$widgets.="<td>Test Widget 1</td>";
								$widgets.="<td class='center'>2012/01/01</td>";
								$widgets.="<td class='center'>Member</td>";
								$widgets.="<td class='center'>Member</td>";
								$widgets.="<td class='center'>";
								$widgets.="<span class='label label-success'>Active</span>";
								$widgets.="</td>";
								$widgets.="<td class='center'>";
								$widgets.="<a class='btn btn-success' href='#'>";
								$widgets.="<i class='icon-zoom-in icon-white'></i>";  
								$widgets.='View';       
								$widgets.="</a>";
								$widgets.="<a class='btn btn-info' href='#'>";
								$widgets.="<i class='icon-edit icon-white'></i>";  
								$widgets.='Edit';          
								$widgets.="</a>";
								$widgets.="<a class='btn btn-danger' href='#'";
								$widgets.="<i class='icon-trash icon-white'></i>"; 
								$widgets.="Delete";
								$widgets.="</a>";
								$widgets.="</td>";
								$widgets.="</tr>";
			}
			return $widgets;
		}

		function GetWidgetInfo($widget){
			require_once("../widgets/".$widget."/".$widget.".php");
			$WidgetInfo = call_user_func('W'.$widget.'::'.$widget.'_info');
		}
		
	
			
			
	}
	
	
	
?>