<?php

////////////////////////////////////////////
	function LoadTemplate($template){
		$TemplatePath = $GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template']."/";
		$content = file_get_contents($TemplatePath.$template);
		return $content;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function render($array, $template){
		$template = $template.".tpl";
		$template = LoadTemplate($template);
		for ($i = 0; $i <= count($array)-1; $i++) {
		    $template = str_replace($array[$i][0], $array[$i][1], $template);
		}
		return $template;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function SystemMessage($type,$message){
		if(count($message)>0){
		$content = "<ul class='SystemMessage'>";
		for ($i = 0; $i <= count($message)-1; $i++) {
		    $content.="<li>".$message[$i]."</li>";
		}
		$content .= "</ul>";
		$Message = array
		  (
		  array("{SystemMessage}",$content),
		);
	
		if($type=="error"){$res = render($Message,"error");}
		if($type=="success"){$res = render($Message,"success");}
		return $res;
		}
		else{
			return "";
		}
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GenBirthYears(){
		$content = "<option></option>";
		$counter = "2010";
		for ($i = 1; $i <= 100; $i++) {
			$counter = $counter - 1;
		    $content .= "<option>".$counter."</option>";
		}
		return $content;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function LoadWidgets(){
		$widgets = $GLOBALS['config']['widgets'];
		$widget = explode(",",$widgets);
		for ($i = 0; $i <= count($widget)-1; $i++) {
		    $cwidget = trim($widget[$i]);
			if($cwidget!=""){
			//echo checkWidgetOptions($cwidget);
			$data = "
			<div id='SystemAjax_".$cwidget."'></div>
			<script>
			$.ajax({
			    url: 'index.php?dataonly=yes&getwidget=".$cwidget."',
			    cache: false,
			    dataType: 'html',
			    success: function(data) {
			        $('#SystemAjax_".$cwidget."').html(data);
			    }
			});
			</script>
			";
			if(!checkWidgetOptions($cwidget)){$data="";}
			$content[] = array("{".$cwidget."}", $data);
			}
		}
		return $content;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GetWidget($widget){
		    $cwidget = trim($widget);
			if($cwidget!=""){include_once "widgets/".$cwidget."/".$cwidget.".php";
			$content = call_user_func("W".$cwidget."::".$cwidget);
			$content = render(array(array("{content}",$content)),$cwidget);
			}		
		return $content;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function checkWidgetOptions($widget){
		include_once "widgets/".$widget."/".$widget.".php";
		$options =  call_user_func("W".$widget."::".$widget."_options");
		$loadwidget = FALSE;
		if($_GET['page']!=""){$page = $_GET['page'];}
		if($_POST['page']!=""){$page = $_POST['page'];}
		if($_GET['page']=="" and $_POST['page']==""){$page = "home";}
		if($options['loggedin']=="yes" and IsLoggedin()){$loadwidget = TRUE;}
		if($options['loggedin']=="no" and !IsLoggedin()){$loadwidget = TRUE;}
		if(count($options['show'])>0 and in_array($page, $options['show'])){$loadwidget = TRUE;}
		if(count($options['show'])==0){$loadwidget=TRUE;}
		if($options['loggedin']=="yes" and !IsLoggedin()){$loadwidget = FALSE;}
		if($options['loggedin']=="no" and IsLoggedin()){$loadwidget = FALSE;}	
		if(count($options['hide'])>0 and in_array($page, $options['hide'])){$loadwidget = FALSE;}
		return $loadwidget;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function IsLoggedin(){
		if($_SESSION['loggedin']=="YES"){
			return true;
		}else{
			return false;
		}
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function logout(){
		if(isset($_SESSION['loggedin'])){unset($_SESSION['loggedin']);}
		if(isset($_SESSION['username'])){unset($_SESSION['username']);}
		RemoveOnlineUser();
		session_destroy();
		header('Location: index.php');
		$_GET['logout'] = "logout";
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function LoadSection($controller, $section){
		include_once "controllers/".$controller."/".$section.".php";
		$content = call_user_func('C'.$section.'::'.$section);
		$res = RenderView($content, $controller, $section);
		if(!array_key_exists($controller.'_'.$section.'_title', $GLOBALS['page'])){$GLOBALS['ERROR'][]= "GLOBALS['page']['".$controller.'_'.$section."_title'] not found inside language file.";}
		$array = array(
		array("{content}",$res),
		array("{title}",$GLOBALS['page'][$controller.'_'.$section.'_title']),
		);
		$res = render($array, $controller."_".$section);
		return $res;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function RenderView($array, $view, $section){
		$page = file_get_contents("views/".$view."/".$section.".tpl");
		for ($i = 0; $i <= count($array)-1; $i++) {
		    $page = str_replace($array[$i][0], $array[$i][1], $page);
		}
		return $page;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function db_query($query, $array){
		$DB_HOST=$GLOBALS['DB_HOST'];
		$DB_NAME=$GLOBALS['DB_NAME'];
		$DB_USER=$GLOBALS['DB_USER'];
		$DB_PASS=$GLOBALS['DB_PASS'];
		 $connDB = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8", $DB_USER, $DB_PASS);
		 
		 $connDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 try {
		 // Query
		 $statement = $connDB->prepare($query);
		 // Assign and execute query
		 
		 for ($i = 0; $i <= count($array)-1; $i++) {
		 	if($array[$i][2]=="int"){$type = PDO::PARAM_INT;}
			if($array[$i][2]=="str"){$type = PDO::PARAM_STR;}
			if($array[$i][2]=="bool"){$type = PDO::PARAM_BOOL;}
			if($array[$i][2]=="null"){$type = PDO::PARAM_NULL;}
			 $statement->bindParam($array[$i][0], $array[$i][1], $type);
 		 }
		 
		 //$statement->bindParam(':columnA', $columnA, PDO::PARAM_INT);
		 $statement->setFetchMode(PDO::FETCH_ASSOC);
		 $statement->execute();
		 // Get data
		 $rows = array();
		 if($statement->rowCount() > 0){
		 while($row = $statement->fetch()) {
			$rows[] = $row;
		 }
		 }
		 
		 return $rows;
		 }
		 catch(PDOException $e) {
		 	 if($connDB->errorCode() != "00000"){$GLOBALS['ERROR'][] = $e->getMessage()." ". $connDB->errorCode();} 
		 }
		 //Close the connection
		 $connDB = null;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function LoadPage($array){
		$page = "";
		for ($i = 0; $i <= count($array)-1; $i++) {
			$page .= "
			<div id='SystemAjax_".$array[$i][0]."_".$array[$i][1]."'></div>
			<script>
			$.ajax({
			    url: 'index.php?page=none&dataonly=yes&getcontroller=".$array[$i][0]."&getsection=".$array[$i][1]."',
			    cache: false,
			    dataType: 'html',
			    success: function(data) {
			        $('#SystemAjax_".$array[$i][0]."_".$array[$i][1]."').html(data);
			    }
			});
			</script>
			";
		}
		return $page;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function LoadSections($controller, $section){
		require_once ("controllers/".$controller."/".$section.".php");
		$array = call_user_func('C'.$section."::".$section."_sections");
		$sections = LoadPage($array);
		return $sections;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GetVideoTypes(){
		$params = array();
	 	$result = db_query("SELECT * FROM VideoType", $params);
		return $result;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GetVideoCategories(){
		$params = array();
	 	$result = db_query("SELECT * FROM VideoCategory", $params);
		return $result;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GetLanguages(){
		$params = array();
	 	$result = db_query("SELECT * FROM Language", $params);
		return $result;
	}
////////////////////////////////////////////

?>