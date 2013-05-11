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
		$content = "<ul>";
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
			$content[] = array("{".$cwidget."}",$data);
			}
		}
		return $content;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GetWidget($widget){
		    $cwidget = trim($widget);
			if($cwidget!=""){include_once "widgets/".$cwidget."/".$cwidget.".php";
			$content = $cwidget();
			}		
		return $content;
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
	function LoadController($controller, $section){
		include "controllers/".$controller."/".$section.".php";
		$content = $section();
		$res = RenderView($content, $controller, $section);
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
	function db_query2($query){
		// CONNECT TO THE DATABASE
			$mysqli = new mysqli($GLOBALS['DB_HOST'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASS'], $GLOBALS['DB_NAME']);
			
			if (mysqli_connect_errno()) {
				printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
			}
			
		
		// A QUICK QUERY ON A FAKE USER TABLE
			$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
			
		// REPORT QUERY ERRORS		
		if (!$result) {
		    $GLOBALS['ERROR'] = "DATABASE QUERY ERROR: ".$mysqli->error;
			return "error";
		 }
		
		// GOING THROUGH THE DATA
			$rows = array();
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()) {
					$rows[] = $row;	
				}
			}
			return $rows;
			
		// CLOSE CONNECTION
			mysqli_close($mysqli);
	}	
////////////////////////////////////////////

////////////////////////////////////////////
	function db_query($query, $array){
		$DB_HOST=$GLOBALS['DB_HOST'];
		$DB_NAME=$GLOBALS['DB_NAME'];
		$DB_USER=$GLOBALS['DB_USER'];
		$DB_PASS=$GLOBALS['DB_PASS'];
		 $connDB = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
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
		 catch(PDOException $e) { $GLOBALS['ERROR'][] = $e->getMessage()." ". $e->getTraceAsString(); }
		 //Close the connection
		 $connDB = null;
	}
////////////////////////////////////////////

?>