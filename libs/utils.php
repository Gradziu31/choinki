<?php

	function printPostCategories($post_id, array $categories = array()){
        $terms_list = array();
        foreach($categories as $cname){
            $tmp = get_the_terms($post_id, $cname);
            if(is_array($tmp)){
                $terms_list = array_merge($terms_list, $tmp);
            }
        }
        
        if($terms_list){
            foreach($terms_list as $term){
                echo '<a href="'.get_term_link($term->slug, $term->taxonomy).'">'.$term->name.'</a>';
            }
        }
    }

	
	
	
	
	
	
	
	
	
	
	
	//ta fukcja skraca tekst do ilu znaków chcemy
	function the_excerpt_max_charlength($charlength) {
		echo cutText(get_the_excerpt(), $charlength);
	}


    function cutText($text, $maxLength){
        
        $maxLength++;

        $return = '';
        if (mb_strlen($text) > $maxLength) {
            $subex = mb_substr($text, 0, $maxLength - 5);
            $exwords = explode(' ', $subex);
            $excut = - ( mb_strlen($exwords[count($exwords) - 1]) );
            if ($excut < 0) {
                $return = mb_substr($subex, 0, $excut);
            } else {
                $return = $subex;
            }
            $return .= '[...]';
        } else {
            $return = $text;
        }
        
        return $return;
    }
/*
wpisujemy echo cutText($comment->post_title, 27)
czyli w nawiasie co chcemy przyciąć i po przecinku do ilu znaków
*/

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//ta funkcja wypisuje 3 posty najnowsze mogę to użyć np. na stronie głównej
function fetchRecentComments($limit = 3) {

	 global $wpdb;
        //dla bezpieczeństwa
		$limit = (int)$limit;
		
        $res = $wpdb->get_results("
            SELECT C.*, P.post_title
                FROM {$wpdb->comments} C
                    LEFT JOIN {$wpdb->posts} P ON C.comment_post_ID = P.ID
                WHERE comment_approved = 1
                ORDER BY comment_date_gmt DESC
                LIMIT {$limit}
        ");
                
        return $res;

}
/* na stronie głównej wywołuję to w ten sposób

otwieram php 

$recent_comms = fetchRecentComments(3);

	foreach ($recent_comms as $comment):
		$date = new \DateTime($comment->comment_date_gmt);
		
		w bazie danych sprawdzam te nazwy od komenatrzt

zamykam phpa powinno działać
*/















function getQueryParams(){
        global $query_string;
        $parts = explode('&', $query_string);
        
        $return = array();
        foreach($parts as $part){
            $tmp = explode('=', $part);
            $return[$tmp[0]] = trim(urldecode($tmp[1]));
        }
        
        return $return;
    }  

function getQuerySingleParam($name){
        $qparams = getQueryParams();
        
        if(isset($qparams[$name])){
            return $qparams[$name];
        }
        
        return NULL;
    }

function getCurrentPageUrl(){
        $pageURL = 'http';
        
	if(isset($_SERVER["HTTPS"])){
            if($_SERVER["HTTPS"] == "on") {
                $pageURL .= "s";
            }
	}
        
	$pageURL .= "://";
        
	if($_SERVER["SERVER_PORT"] != "80"){
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	}else{
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
        
	return $pageURL;
    }


add_filter('posts_where', 'title_like_posts_where', 10, 2);
    function title_like_posts_where( $where, &$wp_query ) {
        global $wpdb;
        
        if ($post_title_like = $wp_query->get('post_title_like')){
            $where .= ' AND '.$wpdb->posts.'.post_title LIKE \'%'.esc_sql(like_escape($post_title_like)).'%\'';
        }
        
        return $where;
    }
				function generatePagination($paged, $loop) {
				
						$big = 999999999; // need an unlikely integer

							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, $paged ),
								'total' => $loop->max_num_pages,
								'prev_text' => '«',
								'next_text' => '»',
								'type' => 'list'
							) );
				}





?>