<?php

	class Wwidget_breadcrumbs{
		
		function widget_breadcrumbs(){
			return self::widget_breadcrumbs_render();
		}
		
		function widget_breadcrumbs_options(){
			$options = array(
			"show"=>array(), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_breadcrumbs_render(){
			$array = array(
				array("{TemplatePath}",$GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template']),
			);
			return $array;
		}
		
		function breadcrumb() {
		      if ( !is_home() ) {
		      	$res = "";
		          $res.= '<div class="breadcrumbleft" ></div><div class="breadcrumb" > <a style="float: left; color: #555555;" href="';
		          $res.= get_option('home');
		          $res.= '">';
		          $res.= '<img src="http://www.yoursite.com/wp-content/themes/your_themes/images/home.png" style="margin-top: 5px;"/>';
		          $res.= "</a> <div class=\"arrowbread\" ></div> ";
		          }
		 
		          if ( is_category() || is_single() ) {
		               $category = get_the_category();
		               $ID = $category[0]->cat_ID;
		               $res.= '<div>'.get_category_parents($ID, TRUE, '', FALSE ).'</div>';
		          }
		 
		          if(is_single()) {echo ' <div></div>';the_title();}
		          if(is_page()) {the_title();}
		          if(is_tag()){ echo "Tag: ".single_tag_title('',FALSE); }
		          if(is_404()){ echo "404 - Page not Found"; }
		          if(is_search()){ echo "Search"; }
		          if(is_year()){ echo get_the_time('Y'); }            
		 
		          echo "</div><div class=\"breadcrumbright\" ></div><div class=\"clear\"></div>";
		    }
		
	}

	
?>