<?php

add_filter( 'the_content_more_link', 'modify_read_more_link' );
 function modify_read_more_link() {
 return '<a class="more-link btn btn-info" href="' . get_permalink() . '">Читать далее...</a>';
 }
