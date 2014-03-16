<?php

	class Wwidget_breadcrumbs{
		
		function widget_breadcrumbs(){
			return self::widget_breadcrumbs_render();
		}
		
		function widget_breadcrumbs_info(){
			$info = array(
			'name' => 'Bread Crumbs',
			'description' => 'widget description',
			'by' => 'RealMatrix',
			'date' => '2014-14-1',
			'version' => '1.0',
			);
			return $info;
		}
		
		function widget_breadcrumbs_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
		
		function widget_breadcrumbs_options(){
			$options = array(
			"show"=>array(), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array("home"), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_breadcrumbs_render(){
			$array = array(
				array("{TemplatePath}",$GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template']),
				array("{page}", ucfirst($GLOBALS['vars']['page'])),
				array("{section}", ucfirst($GLOBALS['vars']['sec'])),
				array("{BreadCrumbs}", self::GetBreadCrumbs()),
			);
			return $array;
		}
		
		function GetBreadCrumbs(){
			if(!isset($GLOBALS['BreadCrumbs']) and $GLOBALS['vars']['page']!="login" and $GLOBALS['vars']['page']!="register"){
				$GLOBALS['ERROR'][] = "GLOBALS['BreadCrumbs'] not found inside 'set' function.";
				$GLOBALS['ERROR'][] = "BUG URL-> <b>".$GLOBALS['system']->CurrentPageUrl()."</b>";
			}
			$res = "";
			$res.="<li><a href='index.php'>Home </a></li>";
			for ($i=0; $i < count($GLOBALS['BreadCrumbs']); $i++) {
				if(count($GLOBALS['BreadCrumbs'])!=$i+1){
					$res.="<li><a href='index.php?".$GLOBALS['BreadCrumbs'][$i][1]."'>".$GLOBALS['BreadCrumbs'][$i][0]."</a></li>";
				}else{
					$res.="<li class='active'>".$GLOBALS['BreadCrumbs'][$i][0]."</li>";
				}
			}
			return $res;
		}

	}

	
?>