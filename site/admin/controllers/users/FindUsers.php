<?php

	class CFindUsers{
		
		public static $SearchResult = "";
			
		function FindUsers(){
			return self::FindUsers_content();
		}
	
		function FindUsers_hooks(){
			$array = array(
				array("find", "Search"),
				array("deleteuser", "DeleteUser"),
			);
			return $array;
		}
			
		function FindUsers_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function FindUsers_content(){
			$content = array
			  (
			  array("{title}", $GLOBALS['COMMON']->l("admin_widgets_FindUsers_title")),
			  array("{SearchResult}", self::$SearchResult),
			 );
		return $content;
		}
		
		function Search(){
			if($GLOBALS['vars']['username']!=""){
			$args = array(
				array(":username", "%".$GLOBALS['vars']['username']."%", "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `users` WHERE `username` LIKE :username", $args);
			for ($i=0; $i < count($res); $i++) { 
								self::$SearchResult .= "<tr>";
								self::$SearchResult .= "<td>".$res[$i]['username']."</td>";
								self::$SearchResult .= "<td class='center'>".date("d F Y", strtotime($res[$i]['RegisterationDate']))."</td>";
								self::$SearchResult .= "<td class='center'>".$GLOBALS['COMMON']->GetUserGroupByID($res[$i]['group'])."</td>";
								self::$SearchResult .= "<td class='center'>";
								self::$SearchResult .= self::UserStatus($res[$i]['state']);
								self::$SearchResult .= "</td>";
								self::$SearchResult .= "<td class='center'>";
								self::$SearchResult .= "<a class='btn btn-success' href='index.php?page=users&sec=view&ssec=ViewUser&h=view&username=".$res[$i]['username']."'>";
								self::$SearchResult .= "<i class='icon-zoom-in icon-white'></i>" ; 
								self::$SearchResult .= "View ";        
								self::$SearchResult .= "</a> ";
								self::$SearchResult .= "<a class='btn btn-info' href='index.php?page=users&sec=edit&ssec=EditUser&h=edit&username=".$res[$i]['username']."'>";
								self::$SearchResult .= "<i class='icon-edit icon-white'></i> " ;
								self::$SearchResult .= "Edit";             
								self::$SearchResult .= "</a> ";
								self::$SearchResult .= "<a class='btn btn-danger' href='#' onclick=\"DeleteUser('".$res[$i]['username']."', '".$res[$i]['id']."')\"> ";
								self::$SearchResult .= "<i class='icon-trash icon-white'></i>" ;
								self::$SearchResult .= "Delete";
								self::$SearchResult .= "</a> ";
								self::$SearchResult .= "</td>";
								self::$SearchResult .= "</tr>";
			}
			}
		}
		
		function UserStatus($state){
			if($state==0){return "<span class='label label-warning'>Pending</span>";}
			if($state==1){return "<span class='label label-success'>Active</span>";}
			if($state==-1){return "<span class='label label-important'>Banned</span>";}
		}
		
		function DeleteUser(){
			$args = array(
				array(":uid", $GLOBALS['vars']['uid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("DELETE FROM `users` WHERE `id` = :uid", $args);
			header( 'Location: index.php?username='.$GLOBALS['vars']['username'].'&page=users&sec=find&ssec=FindUsers&h=find' ) ;
		}
					
			
	}
	
	
	
?>