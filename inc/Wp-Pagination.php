<?php
//http://www.haloseeker.com/how-to-add-numeric-wordpress-pagination-without-plugin/
//http://dimox.name/wordpress-pagination-without-a-plugin/
 function wp_pagination() {
 global $wp_query;
 $big = 12345678;
 $page_format = paginate_links( array(
     'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
     'format' => '?paged=%#%',
     'current' => max( 1, get_query_var('paged') ),
     'total' => $wp_query->max_num_pages,
     'type'  => 'array',
		 'prev_text' => '&laquo;', //текст ссылки "Предыдущая страница"
		 'next_text' => '&raquo;' //текст ссылки "Следующая страница"
 ) );
 if( is_array($page_format) ) {
             $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
             echo '<nav><ul class="pagination pagination-lg">';
             echo '<li><span aria-hidden="true">Страница '. $paged . ' из ' . $wp_query->max_num_pages .'</span></li>';
             foreach ( $page_format as $page ) {
                     echo "<li>$page</li>";
             }
            echo '</ul></nav>';
 }
 }
