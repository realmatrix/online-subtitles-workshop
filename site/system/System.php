<?php
class System{
	
	
	function SystemRouter($page="", $sec="", $dataonly="", $controller="", $GetSection="", $GetWidget=""){
		if($dataonly==""){$dataonly=0;}
		if($controller==""){$controller=0;}
		if($widget==""){$widget=0;}
		if($page!=""){
			$args = array(
				array(":page", $page, "str"),
				array(":sec", $sec, "str"),
			);
			//array(":dataonly", $dataonly, "str"),
			//and `dataonly`=:dataonly
			$res = self::db_query("SELECT * FROM `systemrouter` WHERE `page`=:page and `sec`=:sec", $args);
			if(count($res)<1){
				$res = self::db_query("SELECT * FROM `systemrouter` WHERE `page`=:page and `dataonly`=:dataonly", $args);
				print_r($res);
			}			
		$route = self::Route($res);
		return $route;
		}
	}
	
	function GetEnabledWidgets(){
		$res = self::db_query("SELECT `name` FROM `adminwidgets` WHERE `state` = 1", array());
		for ($i=0; $i < count($res); $i++) { 
			$Widgets[] = $res[$i]['name'];
		}
		$WidgetNames = implode(",", $Widgets);
		return $WidgetNames;
	}
	
	function HideDisabledWidgets(){
		$res = self::db_query("SELECT `name` FROM `adminwidgets` WHERE `state` = 0", array());
		for ($i=0; $i < count($res); $i++) { 
			$Widgets[] = array("{".$res[$i]['name']."}", "");
		}
		return $Widgets;
	}	
	
	function Route($res){
		$content = "";
		for ($i=0; $i < count($res); $i++) { 
			if($res[$i]['head']!=0){$content.=self::render($GLOBALS['TemplateHead'], "head");}
			if($res[$i]['header']!=0){$content.=self::render($GLOBALS['TemplateHeader'], "header");}
			if($res[$i]['left']!=0){$content.=self::render($GLOBALS['TemplateLeft'], "left");}
			if($res[$i]['body']!=0){$content.=self::render($GLOBALS['TemplateBody'], "body");}
			if($res[$i]['right']!=0){$content.=self::render($GLOBALS['TemplateRight'], "right");}
			if($res[$i]['footer']!=0){$content.=self::render($GLOBALS['TemplateFooter'], "footer");}
			if($res[$i]['dataonly']==1){
				$GLOBALS['SystemContent']=self::RenderDataOnly($GLOBALS['TemplatesCommon'], $GLOBALS['SystemContent']);
				$GLOBALS['DataOnly'] = TRUE;
			}
		}
		return $content;
	}



	function LoadTemplate($template){
		$TemplatePath = $GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template']."/";
		$content = file_get_contents($TemplatePath.$template);
		return $content;
	}



	function render($array, $tpl){
		$template = $tpl.".tpl";
		$template = self::LoadTemplate($template);
		for ($i = 0; $i <= count($array)-1; $i++) {
		    $template = str_replace($array[$i][0], $array[$i][1], $template);
		}
		if($tpl=="footer"){$template = str_replace("{LoadTime}", self::LoadTime(), $template);}
		return $template;
	}
	
	function RenderDataOnly($array, $content){
		for ($i = 0; $i <= count($array)-1; $i++) {
		    $content = str_replace($array[$i][0], $array[$i][1], $content);
		}
		return $content;
	}

	
	function LoadLib($lib){
		include "libs/".$lib.".php";
	}


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



	function GenBirthYears(){
		$content = "<option></option>";
		$CurrentYear = date("Y");
		$counter = $CurrentYear;
		for ($i = 1; $i <= 100; $i++) {
			$counter = $counter - 1;
		    $content .= "<option>".$counter."</option>";
		}
		return $content;
	}



	function days(){
		for ($i=1; $i <= 31; $i++) { 
			$res[] = $i;
		}
		return $res;
	}



	function GenSelectDays(){
		$days = self::days();
		$res = "<option value=''></option>";
		for ($i=0; $i < count($days); $i++) { 
			$res .= "<option value='".$days[$i]."'>".$days[$i]."</option>";
		}
		return $res;
	}
	
	

	function months(){
		for ($i=1; $i <= 12; $i++) { 
			$res[] = $i;
		}
		return $res;
	}



	function GenSelectMonths(){
		$months = self::months();
		$res = "<option value=''></option>";
		for ($i=0; $i < count($months); $i++) { 
			$res .= "<option value='".$months[$i]."'>".$months[$i]."</option>";
		}
		return $res;
	}
	
	
	
	function years(){
		$CurrentYear = date("Y");
		for ($i=$CurrentYear+10; $i >= 1800; $i--) { 
			$res[] = $i;
		}
		return $res;
	}



	function minutes($minutes){
		for ($i=1; $i <= $minutes; $i++) { 
			$res[] = $i;
		}
		return $res;
	}



	function LoadWidgets(){
		$widgets = $GLOBALS['config']['widgets'];
		$widget = explode(",", $widgets);
		for ($i = 0; $i <= count($widget)-1; $i++) {
		    $cwidget = trim($widget[$i]);
			if($cwidget!=""){
			//echo checkWidgetOptions($cwidget);
			 $data = "<div id='SystemAjax_".$cwidget."'>".self::GetWidget($cwidget)."</div>";
			if(!self::checkWidgetOptions($cwidget)){$data="";}
			$content[] = array("{".$cwidget."}", $data);
			}
		}
		return $content;
	}



	function GetWidget($widget){
		    $cwidget = trim($widget);
			if($cwidget!=""){include_once "widgets/".$cwidget."/".$cwidget.".php";
				$hooks = call_user_func('W'.$cwidget.'::'.$cwidget.'_hooks');
				$found = 0;
				for ($j=0; $j < count($hooks); $j++) {
					if($GLOBALS['vars']['w']==$cwidget and $GLOBALS['vars']['h']==$hooks[$j][0]){call_user_func('W'.$cwidget.'::'.$hooks[$j][1], $args); $found++;}
				}
				if($GLOBALS['vars']['w']==$cwidget and $found<1){
					$GLOBALS['ERROR'][] = "function not found.";
					$GLOBALS['ERROR'][] = "BUG URL-> <b>".self::CurrentPageUrl()."</b>";
				}
			$TemplateCommon = array(
			array("{TemplatePath}", "templates/".$GLOBALS['config']['template']),
			);
			$render = call_user_func("W".$cwidget."::".$cwidget);
			$render = array_merge($render, $TemplateCommon);
			$content = self::render($render, $cwidget);
			}		
		return $content;
	}



	function checkWidgetOptions($widget){
		include_once "widgets/".$widget."/".$widget.".php";
		$options =  call_user_func("W".$widget."::".$widget."_options");
		$loadwidget = FALSE;
		$page = $GLOBALS['vars']['page'];
		if($page==""){$page="home";}
		if($options['loggedin']=="yes" and self::IsLoggedin()){$loadwidget = TRUE;}
		if($options['loggedin']=="no" and !self::IsLoggedin()){$loadwidget = TRUE;}
		if(count($options['show'])>0 and in_array($page, $options['show'])){$loadwidget = TRUE;}else{$loadwidget = FALSE;}
		if(count($options['show'])==0){$loadwidget=TRUE;}
		if($options['loggedin']=="yes" and !self::IsLoggedin()){$loadwidget = FALSE;}
		if($options['loggedin']=="no" and self::IsLoggedin()){$loadwidget = FALSE;}	
		if(count($options['hide'])>0 and in_array($page, $options['hide'])){$loadwidget = FALSE;}
		return $loadwidget;
	}



	function IsLoggedin(){
		if($_SESSION['loggedin']=="YES"){
			return true;
		}else{
			return false;
		}
	}



	function logout(){
		if(isset($_SESSION['loggedin'])){unset($_SESSION['loggedin']);}
		if(isset($_SESSION['username'])){unset($_SESSION['username']);}
		Onlineusers::RemoveOnlineUser();
		session_destroy();
		header('Location: index.php');
		$_GET['logout'] = "logout";
	}



	function login($username){
		$_SESSION['loggedin'] = "YES"; 
		$_SESSION['username'] = $username;
		$userinfo = self::GetUserInfo($username,"");
		$_SESSION['id'] = $userinfo[0]['id'];
	}



	function LoadSection($controller, $section, $args){
		$res = "";
		if(self::checkSectionOptions($controller, $section, $message)){
		include_once "controllers/".$controller."/".$section.".php";
		$hooks = call_user_func('C'.$section.'::'.$section.'_hooks');
		$found = 0;
			for ($i=0; $i < count($hooks); $i++) {
				if(self::CheckControllerHook($section, $hooks[$i][0], $args)===TRUE){call_user_func('C'.$section.'::'.$hooks[$i][1], $args); $found++;}
			}
			if($args['ssec']==$section and $found==0){
				$GLOBALS['ERROR'][] = "function '".$args['h']."' not found in controllers/".$controller."/".$section.".php";
				$GLOBALS['ERROR'][] = "BUG URL-> <b>".self::CurrentPageUrl()."</b>";
			}
		$TemplateCommon = array(
			array("{TemplatePath}", "templates/".$GLOBALS['config']['template']),
		);
		$content = call_user_func('C'.$section.'::'.$section);
		$content = array_merge($content, $TemplateCommon);
		$options = "";
		$res = self::RenderView($content, $controller, $section);
		//if(!array_key_exists($controller.'_'.$section.'_title', $GLOBALS['page'])){$GLOBALS['ERROR'][]= "GLOBALS['page']['".$controller.'_'.$section."_title'] not found inside language file.";}
		return $res;
		}
		else{
			//echo "<script>alert('".$message."');</script>";
		} 
	}



	function checkSectionOptions($controller, $section, &$message){
		include_once "controllers/".$controller."/".$section.".php";
		$options =  call_user_func("C".$section."::".$section."_options");
		$LoadSEction = FALSE;
		if($_GET['page']!=""){$page = $_GET['page'];}
		if($_POST['page']!=""){$page = $_POST['page'];}
		if($_GET['page']=="" and $_POST['page']==""){$page = "home";}
		if($options['loggedin']=="yes" and self::IsLoggedin()){$LoadSEction = TRUE;}
		if($options['loggedin']=="no" and !self::IsLoggedin()){$LoadSEction = TRUE;}
		if(count($options['show'])>0 and in_array($page, $options['show'])){$LoadSEction = TRUE;}
		if(count($options['show'])==0){$LoadSEction=TRUE;}
		if($options['loggedin']=="yes" and !self::IsLoggedin()){
			$LoadSEction = FALSE;
			$message = "require user to be loggedin.";
		}
		if($options['loggedin']=="no" and self::IsLoggedin()){
			$LoadSEction = FALSE;
			$message = "require user to be not loggedin.";
		}	
		if(count($options['hide'])>0 and in_array($page, $options['hide'])){$LoadSEction = FALSE;}
		return $LoadSEction;
	}



	function CheckControllerHook($section, $hook, $args){
		if((isset($args['ssec']) and $args['ssec']==$section) and (isset($args['h']) and $args['h']==$hook)){$res = "yes";}
		if($res=="yes"){return TRUE;}else{return FALSE;}
	}



	function RenderView($array, $view, $section){
		$page = file_get_contents($GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template']."/".$view."_".$section.".tpl");
		for ($i = 0; $i <= count($array)-1; $i++) {
		    $page = str_replace($array[$i][0], $array[$i][1], $page);
		}
		return $page;
	}



	function db_query($query, $array, &$ExecState="", $multi=FALSE){
		$DB_HOST=$GLOBALS['DB_HOST'];
		$DB_NAME=$GLOBALS['DB_NAME'];
		$DB_USER=$GLOBALS['DB_USER'];
		$DB_PASS=$GLOBALS['DB_PASS'];
		 $connDB = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8", $DB_USER, $DB_PASS);
		 
		 $connDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 try {
		 // Query
		 if($multi===FALSE){
		 $statement = $connDB->prepare($query);
		 }
		 else {
			$query = $query . " " . implode("", $array[0]);
			$statement = $connDB->prepare($query);
		 }
		 // Assign and execute query
		 
		 if($multi===FALSE){
		 for ($i = 0; $i <= count($array)-1; $i++) {
		 	if($array[$i][2]=="int"){$type = PDO::PARAM_INT;}
			if($array[$i][2]=="str"){$type = PDO::PARAM_STR;}
			if($array[$i][2]=="bool"){$type = PDO::PARAM_BOOL;}
			if($array[$i][2]=="null"){$type = PDO::PARAM_NULL;}
			 $statement->bindParam($array[$i][0], $array[$i][1], $type);
 		 }
		 }
		else
		{
		 for ($i = 0; $i < count($array[1]); $i++) {
			 	for ($j=0; $j < count($array[1][$i]) ; $j++) { 
				if($array[1][$i][$j][2]=="int"){$type = PDO::PARAM_INT;}
				if($array[1][$i][$j][2]=="str"){$type = PDO::PARAM_STR;}
				if($array[1][$i][$j][2]=="bool"){$type = PDO::PARAM_BOOL;}
				if($array[1][$i][$j][2]=="null"){$type = PDO::PARAM_NULL;}
				$statement->bindParam($array[1][$i][$j][0], $array[1][$i][$j][1], $type);
			 }
 		 }
		}
		 
		 //$statement->bindParam(':columnA', $columnA, PDO::PARAM_INT);
		 $statement->setFetchMode(PDO::FETCH_ASSOC);
		 if($statement->execute()){
		 	$ExecState = TRUE;
		 }
		 else {
			 $ExecState = FALSE;
		 }
		 
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
		 //echo $statement->queryString;
		 $connDB = null;
	}



	function LoadPage($array, $vars){
		$page = "";
		for ($i = 0; $i <= count($array)-1; $i++) {
			if($array[$i][3]){
				 $args = array_merge($vars, $array[$i][2]);
				 if($GLOBALS['vars']['page']!="query" and $GLOBALS['vars']['sec']!="client"){
				 $page .= "<div id='SystemAjax_".$array[$i][0]."_".$array[$i][1]."'>".self::LoadSection($array[$i][0], $array[$i][1], $args)."</div>";
				 }
				 else{
				 	$page .= self::LoadSection($array[$i][0], $array[$i][1], $args);
				 }
			}
		}
		return $page;
	}



	function LoadSections($controller, $section, $vars){
		require_once ("controllers/".$controller."/".$section.".php");
		$array = call_user_func('C'.$section."::".$section."_sections");
		$set = call_user_func('C'.$section."::".$section."_set");
		$sections = self::LoadPage($array, $vars);
		return $sections;
	}



		function GenratePagination($TotalRows, $rowsPerPages, $CurrentPage){
			$PagesCount = ceil($TotalRows/$rowsPerPages);		
			$res = "";
			if(floor($TotalRows/$rowsPerPages)>1){$res .="<li class='prev'><a href='index.php?page=video&sec=archive&i=1'>&laquo;</a></li>";}
			else{$res .="<li class='prev disabled'><a href='#'>&laquo;</a></li>";}			
			if(floor($TotalRows/$rowsPerPages)>1){$res .="<li class='prev'><a href='index.php?page=video&sec=archive&i=".$CurrentPage - 1 ."'>&lsaquo;</a></li>";}
			else{$res .="<li class='prev disabled'><a href='#'>&lsaquo;</a></li>";}

			for ($i=$CurrentPage; $i < $CurrentPage+6; $i++) { 
				if($PagesCount>=$i and $CurrentPage==$i){$res .= "<li class='active'><a href='#'>".$i."</a></li>";}
				if($PagesCount>=$i and $CurrentPage!=$i){$res .= "<li><a href='index.php?page=video&sec=archive&i=".$i."'>".$i."</a></li>";}			
			}			

			if($PagesCount>$CurrentPage+1){$res .="<li class='next'><a href='index.php?page=video&sec=archive&i=". $CurrentPage + 1 ."'>&rsaquo;</a></li>";}
			else{$res .="<li class='next disabled'><a href='#'>&rsaquo;</a></li>";}			
			if($PagesCount!=$CurrentPage){$res .="<li class='next'><a href='index.php?page=video&sec=archive&i=".$PagesCount ."'>&raquo;</a></li>";}
			else{$res .="<li class='next disabled'><a href='#'>&raquo;</a></li>";}					
					
			return $res;
		}



	function GetVideoTypes(){
		$params = array();
	 	$result = self::db_query("SELECT * FROM videotype", $params);
		return $result;
	}



	function GetVideoCategories(){
		$params = array();
	 	$result = self::db_query("SELECT * FROM videocategory", $params);
		return $result;
	}



	function GetLanguages(){
		$params = array();
	 	$result = self::db_query("SELECT * FROM language", $params);
		return $result;
	}



	function GetCds(){
		$params = array();
	 	$result = self::db_query("SELECT * FROM cds", $params);
		return $result;
	}
	
	
	
	function GetCDById($id){
		$params = array(
			array(":id", $id, "str")
		);
	 	$result = self::db_query("SELECT * FROM cds where id = :id", $params);
		return $result;
	}



	function GetFormats(){
		$params = array();
	 	$result = self::db_query("SELECT * FROM formats", $params);
		return $result;
	}



	function GetCountries(){
		$params = array();
	 	$result = self::db_query("SELECT * FROM countries", $params);
		return $result;
	}



	function GetGenres(){
		$params = array();
	 	$result = self::db_query("SELECT * FROM genres", $params);
		return $result;
	}



	function GetVideoInfo($VideoID){
		$params = array(
			array(":id", $VideoID, "str"),
		);
	 	$result = self::db_query("SELECT * FROM `videos` where `id`=:id ", $params);
		return $result;
	}



	function RenderData($content, $array){
		for ($i=0; $i < count($array); $i++) { 
			$content = str_replace($array[$i][0], $array[$i][1], $content);
		}
		return $content;
	}



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



	function GetUserInfo($username, $id){
		if($username!=""){
			$params = array(
				array(":username", $username, "str"),
			);
			$res=self::db_query("SELECT * FROM users WHERE username=:username", $params);
		}
		if($id!=""){
			$params = array(
				array(":id", $id, "str"),
			);
			$res=self::db_query("SELECT * FROM users WHERE id=:id", $params);
		}
		return $res;
	}
	
	
	
	function GetUserName($id){
		$UserInfo = self::GetUserInfo("", $id);
		$username = $UserInfo[0]['username'];
		return $username;
	}



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
			$AllRegistered=self::db_query("SELECT * FROM users", $params);
		$info['TotalRegistered']= count($AllRegistered);
			$params = array();
			$LatestUser=self::db_query("SELECT * FROM users ORDER BY id DESC LIMIT 1", $params);
		$info['LatestUser']=$LatestUser[0]['username'];
			$params = array();
			$TotalVideos=self::db_query("SELECT id FROM videos", $params);
		$info['TotalVideos']=count($TotalVideos);
			$params = array();
			$TotalSubtitles=self::db_query("SELECT id FROM subtitles", $params);
		$info['TotalSubtitles']=count($TotalSubtitles);
		return $info;
	}



	function FormatMessage($type, $message){
		if(count($message)>0){
			$res = "<div class='div-".$type."'><ul class='ul-".$type."'>";
				for ($i=0; $i < count($message); $i++) { 
					$res .= "<li>".$message[$i]."</li>";
				}
			$res .= "</ul></div>";
			return $res;
		}
		else return "";
	}



	function GetCountryById($id){
		$params = array(
			array(":id", $id, "str")
		);
		$country=self::db_query("SELECT * FROM countries where id=:id", $params);
		return $country;
	}



	function GetGenreById($id){
		$params = array(
			array(":id", $id, "str")
		);
		$genre=self::db_query("SELECT * FROM genres where id=:id", $params);
		return $genre;
	}



	function GetLanguageById($id){
		$params = array(
			array(":id", $id, "str")
		);
		$language = self::db_query("SELECT * FROM language where id=:id", $params);
		return $language;
	}



	function GetFormatById($id){
		$params = array(
			array(":id", $id, "str")
		);
		$genre=self::db_query("SELECT * FROM formats where id=:id", $params);
		return $genre;
	}


	function GetLanguage($lang){
		$result = self::db_query("select * from `lang_".$lang."` ", $params);
		$res = array();
		for ($i=0; $i < count($result); $i++) { 
			$res[$result[$i]['key']]=$result[$i]['text'];
		}
		return $res;
	}



	function l($key){
		if(!array_key_exists($key, $GLOBALS['l'])){
			$GLOBALS['ERROR'][]="language key '".$key."' not found";
			$GLOBALS['ERROR'][] = "BUG URL-> <b>".self::CurrentPageUrl()."</b>";
		}
		$res = $GLOBALS['l'][$key];
		return $res;
	}
	


	function LoadTime(){
		$LoadEnd = microtime(true);
		$res = $LoadEnd - $GLOBALS['LoadStart'];
		$res = number_format($res, 4);
		return $res;
	}
	
	
	function GetUserTeams($uid){
		$args = array(
			array(":uid", $uid, "str"),
		);
		$res = self::db_query("SELECT * FROM `teams` WHERE `owner`=:uid ", $args);
		return $res;
	}
	
	
	
	
	function GetTeamMembers($tid){
		$args = array(
			array(":tid", $tid, "str"),
		);
		$res = self::db_query("SELECT * FROM `teammembers` WHERE `tid`=:tid", $args);
		return $res;
	}

	
	
	
	function GetTeamInfo($tid){
		$args = array(
			array(":tid", $tid, "str"),
		);
		$res = self::db_query("SELECT * FROM `teams` WHERE `id`=:tid", $args);
		return $res;
	}
	
	
	
	
	function GetTeamSubtitles($tid){
		$args = array(
			array(":tid", $tid, "str"),
		);
		$res = $GLOBALS['system']->db_query("SELECT * FROM `teamsubtitles` WHERE `tid`=:tid", $args);
		return $res;
	}
	
	
	
	
	function GetUserSubtitles($uid){
		$args = array(
			array(":uid", $uid, "str")
		);
		$res = self::db_query("SELECT * FROM `subtitles` WHERE `uid`=:uid", $args);
		return $res;
	}
	
	
	
	
	function GetSubtitleInfo($sid){
		$args = array(
			array(":sid", $sid, "str"),
		);
		$res = self::db_query("SELECT * FROM `subtitles` WHERE `id` = :sid", $args);
		return $res;
	}
	
	
	
	
	function GetSubtitleCDS($sid){
		$args = array(
			array(":sid", $sid, "str")
		);
		$res = self::db_query("SELECT * FROM `subtitlecds` WHERE `sid`=:sid", $args);
		return $res;
	}
	
	
	
	
	function GenRandomStr($length = 10) {
	    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	    $res = "";
	    for ($i = 0; $i < $length; $i++) {
	        $res .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    $res = trim($res);
	    return $res;
	}



	function GetMicroTime(){
		$time = microtime();
		$time = explode(" ", $time);
		$time = trim($time[1]);
		return $time;
	}
	
	
	
	function ArrangeLines($sid, $cid){
		$args = array(
			array(":sid", $sid, "str"),
			array("cid", $cid, "str"),
		);
		$res = $GLOBALS['system']->db_query("SELECT * FROM `subtitlescontent` WHERE `sid` = :sid and `cid` = :cid ORDER BY start ASC", $args);
		for ($i=0; $i < count($res); $i++) { 
			$args = array(
				array(":id", $res[$i]['id'], "str"),
				array(":start", $res[$i]['start'], "str"),
			);
			$GLOBALS['system']->db_query("UPDATE `subtitlescontent` SET `start` = :start WHERE `id` = :id ;", $args);
		}
	}
	
	
	function GetTmpDir(){
		$name = date("d-m-Y");
		if (!file_exists('tmp/'.$name)) {
		    mkdir('tmp/'.$name);
		}
		return 'tmp/'.$name;
	}
	
	
	function GetOption($name){
		$args = array(
			array(":name", $name, "str"),
		);
		$res = self::db_query("SELECT * FROM `settings` WHERE `name` = :name", $args);
		return $res[0]['value'];
	}


	function FailedLogin(){
		$args = array(
			array(":ip", $_SERVER['REMOTE_ADDR'], "str"),
		);
		$res = $GLOBALS['system']->db_query("SELECT * FROM `failedlogins` WHERE `ip` = :ip", $args);
		$args = array(
			array(":ip", $_SERVER['REMOTE_ADDR'], "str"),
			array(":time", self::GetMicroTime(), "str"),
		);
		if(count($res)>0){
			$res = $GLOBALS['system']->db_query("UPDATE  `failedlogins` SET  `tries` =  tries+1,`time` =  :time WHERE  `ip` =:ip", $args);
		}
		else{
			$res = $GLOBALS['system']->db_query("INSERT INTO `failedlogins` (`ip` ,`tries` ,`time`)VALUES(:ip, 1, :time)", $args);
		}
	}
	
	
	function CheckLoginBan(){
		$args = array(
			array(":ip", $_SERVER['REMOTE_ADDR'], "str"),
		);
		$res = $GLOBALS['system']->db_query("SELECT * FROM `failedlogins` WHERE `ip` = :ip", $args);
		if($res[0]['tries']>5){return TRUE;}else{return FALSE;}
	}
	
	
	function UpdateLoginBan(){
		$time = self::GetMicroTime();
		$time = $time - 300;
		$args = array(
			array(":time", $time, "str"),
		);
		$res = $GLOBALS['system']->db_query("DELETE FROM `failedlogins` WHERE `time` < :time", $args);
	}
	
	
	function UpdateUsersKeys(){
		$args = array(
			array(":KeyTime", $GLOBALS['system']->GetMicroTime()-86400, "str"),
		);
		$res = $GLOBALS['system']->db_query("SELECT * FROM `users` WHERE `KeyTime`< :KeyTime limit 10", $args);
		for ($i=0; $i < count($res); $i++) {
			$args = array(
				array(":id", $res[$i]['id']),
				array(":key", self::GenRandomStr(30), "str"),
				array(":KeyTime", self::GetMicroTime(), "str"),
			); 
			$GLOBALS['system']->db_query("UPDATE `users` SET  `key` =  :key, `KeyTime` =  :KeyTime WHERE `id` = :id", $args);
		}
	}
	
	
	function CurrentPageUrl() {
	 $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
	}
	
	function RunCronFunction($function){
		require_once("controllers/cron/cron.php");
		$res = call_user_func('Ccron::'.$function);
		return $res;
	}

	function GetUserFavouriteVideos(){
		$args = array(
			array(":uid", $_SESSION['id'], "str"),
		);
		$res = self::db_query("SELECT * FROM `favouritevideos` WHERE `uid` = :uid", $args);
		return $res;
	}
	
	function GetUserFavouriteVideosByID($uid){
		$args = array(
			array(":uid", $uid, "str"),
		);
		$res = self::db_query("SELECT * FROM `favouritevideos` WHERE `uid` = :uid", $args);
		return $res;
	}
	
	function GetUserFavouriteSubtitlesByID($uid){
		$args = array(
			array(":uid", $uid, "str"),
		);
		$res = self::db_query("SELECT * FROM `favouritesubtitles` WHERE `uid` = :uid", $args);
		return $res;
	}
	
	function IsSubtitleOwner($sid){
		$UID = $_SESSION['id'];
		$args = array(
			array(":sid", $sid, "str"),
		);
		$res = $GLOBALS['system']->db_query("SELECT * FROM `subtitles` WHERE `id` = :sid", $args);
		if($res[0]['uid']===$UID){return TRUE;}else{return FALSE;}
	}
	
	function GetUserSubtitlePermisions($sid){
		$args = array(
			array(":uid", $GLOBALS['vars']['sid'], "str"),
			array(":sid", $sid, "str"),
		);
		$res = $GLOBALS['system']->db_query("SELECT * FROM `subtitlepermissions` WHERE `sid` = :sid and `uid` = :uid", $args);
		$permissions['add'] = FALSE;
		$permissions['delete'] = FALSE;
		$permissions['edit'] = FALSE;
		$permissions['check'] = FALSE;
		$permissions['timing'] = FALSE;
		if($res[0]['addlines']==1){$permissions['add']=TRUE;}
		if($res[0]['deletelines']==1){$permissions['delete']=TRUE;}
		if($res[0]['editlines']==1){$permissions['edit']=TRUE;}
		if($res[0]['checklines']==1){$permissions['check']=TRUE;}
		if($res[0]['timing']==1){$permissions['timing']=TRUE;}
		$permissions['owner'] = self::IsSubtitleOwner($sid);
		return $permissions;
	}
	
	function GetUserGroupByID($id){
		$args = array(
			array(":id", $id, "str"),
		);
		$res = self::db_query("SELECT * FROM `groups` WHERE `id` = :id", $args);
		return $res[0]['group'];
	}
	
	function GetUserVideos($uid){
		$args = array(
			array(":uid", $uid, "str"),
		);
		$res = self::db_query("SELECT * FROM `videos` WHERE `uid` = :uid", $args);
		return $res;
	}
	
}
?>