<?php

	class CListUsers{
		
		public static $SearchResult = "";
			
		function ListUsers(){
			return self::ListUsers_content();
		}
	
		function ListUsers_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function ListUsers_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ListUsers_content(){
			self::Search();
			$content = array
			  (
			  array("{title}", $GLOBALS['system']->l("admin_widgets_ListUsers_title")),
			  array("{SearchResult}", self::$SearchResult),
			 );
		return $content;
		}
		
		function Search(){
			$res = $GLOBALS['system']->db_query("SELECT * FROM `users`", array());
			for ($i=0; $i < count($res); $i++) { 
								self::$SearchResult .= "<tr>";
								self::$SearchResult .= "<td>".$res[$i]['username']."</td>";
								self::$SearchResult .= "<td class='center'>".date("d F Y", strtotime($res[$i]['RegisterationDate']))."</td>";
								self::$SearchResult .= "<td class='center'>".$GLOBALS['system']->GetUserGroupByID($res[$i]['group'])."</td>";
								self::$SearchResult .= "<td class='center'>";
								self::$SearchResult .= self::UserStatus($res[$i]['state']);
								self::$SearchResult .= "</td>";
								self::$SearchResult .= "<td class='center'>";
								self::$SearchResult .= "<a class='btn btn-success' href='index.php?page=users&sec=view&ssec=ViewUser&h=view&username=".$res[$i]['username']."'>";
								self::$SearchResult .= "<i class='icon-zoom-in icon-white'></i>" ; 
								self::$SearchResult .= "View ";        
								self::$SearchResult .= "</a> ";
								self::$SearchResult .= "<a class='btn btn-info' href='index.php?page=users&sec=edit&username=".$res[$i]['username']."'>";
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

		function UserStatus($state){
			if($state==0){return "<span class='label label-warning'>Pending</span>";}
			if($state==1){return "<span class='label label-success'>Active</span>";}
			if($state==-1){return "<span class='label label-important'>Banned</span>";}
		}
					
			
	}
	
	
	
?>