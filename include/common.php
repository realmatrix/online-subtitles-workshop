<?php
class Common{
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
		$template = self::LoadTemplate($template);
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
	
		if($type=="error"){$res = self::render($Message,"error");}
		if($type=="success"){$res = self::render($Message,"success");}
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
			if(!self::checkWidgetOptions($cwidget)){$data="";}
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
			$render = call_user_func("W".$cwidget."::".$cwidget);
			$content = self::render($render, $cwidget);
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
		if($options['loggedin']=="yes" and self::IsLoggedin()){$loadwidget = TRUE;}
		if($options['loggedin']=="no" and !self::IsLoggedin()){$loadwidget = TRUE;}
		if(count($options['show'])>0 and in_array($page, $options['show'])){$loadwidget = TRUE;}
		if(count($options['show'])==0){$loadwidget=TRUE;}
		if($options['loggedin']=="yes" and !self::IsLoggedin()){$loadwidget = FALSE;}
		if($options['loggedin']=="no" and self::IsLoggedin()){$loadwidget = FALSE;}	
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
		Onlineusers::RemoveOnlineUser();
		session_destroy();
		header('Location: index.php');
		$_GET['logout'] = "logout";
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function login($username){
		$_SESSION['loggedin'] = "YES"; 
		$_SESSION['username'] = $username;
		$userinfo = common::GetUserInfo($username,"");
		$_SESSION['id'] = $userinfo['id'];
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function LoadSection($controller, $section){
		include_once "controllers/".$controller."/".$section.".php";
		$content = call_user_func('C'.$section.'::'.$section);
		$hooks = call_user_func('C'.$section.'::'.$section.'_hooks');
			for ($i=0; $i < count($hooks); $i++) { 
				if(self::CheckControllerHook($section, $hooks[$i][0])==TRUE){call_user_func('C'.$section.'::'.$hooks[$i][1]);}
			}
		$res = self::RenderView($content, $controller, $section);
		if(!array_key_exists($controller.'_'.$section.'_title', $GLOBALS['page'])){$GLOBALS['ERROR'][]= "GLOBALS['page']['".$controller.'_'.$section."_title'] not found inside language file.";}
		$res=str_replace("{title}", $GLOBALS['page'][$controller.'_'.$section.'_title'], $res);
		return $res;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function CheckControllerHook($section, $hook){
		if((isset($_GET['ssec']) and $_GET['ssec']==$section) and (isset($_GET['h']) and $_GET['h']==$hook)){$res = "yes";}
		if((isset($_POST['ssec']) and $_POST['ssec']==$section) and (isset($_POST['h']) and $_POST['h']==$hook)){$res = "yes";}
		if($res=="yes"){return TRUE;}else{return FALSE;}
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function RenderView($array, $view, $section){
		$page = file_get_contents($GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template']."/".$view."_".$section.".tpl");
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
		$sections = self::LoadPage($array);
		return $sections;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GetVideoTypes(){
		$params = array();
	 	$result = self::db_query("SELECT * FROM VideoType", $params);
		return $result;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GetVideoCategories(){
		$params = array();
	 	$result = self::db_query("SELECT * FROM VideoCategory", $params);
		return $result;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GetLanguages(){
		$params = array();
	 	$result = self::db_query("SELECT * FROM Language", $params);
		return $result;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function RenderData($content, $array){
		for ($i=0; $i < count($array); $i++) { 
			$content = str_replace($array[$i][0], $array[$i][1], $content);
		}
		return $content;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function form($array){
		$form = "<div id='div-".$array['id']."'>";
		$form .= "<form name='".$array['name']."' id='".$array['id']."' method='".$array['method']."' action='".$array['action']."' ".$array['extra'].">";
		for ($i=0; $i < count($array['input']); $i++) {
			$form .= "<div id='div-".$array['input'][$i]['id']."'>";
			$form .= " <label for='".$array['input'][$i]['name']."' id='label-".$array['input'][$i]['id']."'>".$array['input'][$i]['text']."</label> ";
			if($array['input'][$i]['type']=='select'){
				$form .= "<select name='".$array['input'][$i]['name']."' id='".$array['input'][$i]['id']."' ".$array['input'][$i]['extra'].">";
				for ($j=0; $j < count($array['input'][$i]['content']); $j++) { 
					$form .= "<option value='".$array['input'][$i]['content'][$j][0]."'>".$array['input'][$i]['content'][$j][1]."</option>";
				}
				$form .= "</select>";
			}
			if($array['input'][$i]['type']=='text'){
				$form .= "<input type='text' name='".$array['input'][$i]['name']."' id='".$array['input'][$i]['id']."' value='".$array['input'][$i]['content']."' ".$array['input'][$i]['extra']."/>";
			}
			if($array['input'][$i]['type']=='textarea'){
				$form .= "<textarea name='".$array['input'][$i]['name']."' id='".$array['input'][$i]['id']."' ".$array['input'][$i]['extra'].">".$array['input'][$i]['content']."</textarea>";
			}
			if($array['input'][$i]['type']=='submit'){
				$form .= "<input type='submit' id='".$array['input'][$i]['id']."' name='".$array['input'][$i]['name']."' value='".$array['input'][$i]['content']."' ".$array['input'][$i]['extra']."/>";
			}
			if($array['input'][$i]['type']=='AjaxSubmit'){
					for ($k=0; $k < count($array['input']); $k++) { 
						$UrlVars .= "+'&".$array['input'][$k]['name']."='+document.getElementById('".$array['input'][$k]['id']."').value";
					}
				$form .= "<a href='#' onclick=\"$('#".$array['AjaxDiv']."').load('".$array['action']."?'".$UrlVars."); document.getElementById('".$array['id']."').innerHTML='<div id=&quot;FormWait&quot;></div>'; \" id='".$array['input'][$i]['id']."' name='".$array['input'][$i]['name']."'>".$array['input'][$i]['content']."</a>";
			}
			if($array['input'][$i]['type']=='img'){
				$form .= "<img name='".$array['input'][$i]['name']."' id='".$array['input'][$i]['id']."' alt='' extra='".$array['input'][$i]['extra']."' src='".$array['input'][$i]['content']."'/>";
			}
			if($array['input'][$i]['type']=='hidden'){
				$form .= "<input type='hidden' name='".$array['input'][$i]['name']."' id='".$array['input'][$i]['id']."' value='".$array['input'][$i]['content']."' ".$array['input'][$i]['extra']."/>";
			}
			if($array['input'][$i]['type']=='file'){
				$form .= "<input type='file' name='".$array['input'][$i]['name']."' id='".$array['input'][$i]['id']."'".$array['input'][$i]['extra']."/>";
			}			
			$form .= "</div>";
		}
		$form .= "</form>";
		$form .= "</div>";
		return $form;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function GetUserInfo($username, $id){
		if($username!=""){
			$params = array(
				array(":username", $username, "str"),
			);
			$res=self::db_query("SELECT * FROM Users WHERE username=:username", $params);
		}
		if($id!=""){
			$params = array(
				array(":id", $id, "str"),
			);
			$res=self::db_query("SELECT * FROM Users WHERE username=:id", $params);
		}
		return $res;
	}
////////////////////////////////////////////

////////////////////////////////////////////
	function information(){
		$AllOnline = Onlineusers::GetAllOnline();
		$total = count($AllOnline['users'])+count($AllOnline['guests'])+count($AllOnline['spiders']);
		$info['OnlineUsers'] = count($AllOnline['users']);
		$info['OnlineGuests'] = count($AllOnline['guests']);
		for ($i=0; $i < count($AllOnline['spiders']); $i++) { 
			$spiders .= $AllOnline['spiders'][$i].", ";
		}
		$info['spiders'] = $spiders;
		$info['total'] = $total;
		$info['OnlineHidden'] = 0;
			$params = array();
			$AllRegistered=self::db_query("SELECT * FROM Users", $params);
		$info['TotalRegistered']= count($AllRegistered);
			$params = array();
			$LatestUser=self::db_query("SELECT * FROM Users ORDER BY id DESC LIMIT 1", $params);
		$info['LatestUser']=$LatestUser[0]['username'];
		return $info;
	}
////////////////////////////////////////////

}
?>