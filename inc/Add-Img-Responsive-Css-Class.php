<?php

function add_responsive_class($content){

        $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
        $document = new DOMDocument();
        libxml_use_internal_errors(true);
        $document->loadHTML(utf8_decode($content));

        $imgs = $document->getElementsByTagName('img');
        foreach ($imgs as $img) {
           $img->setAttribute('class','img-responsive');
        }

        $html = $document->saveHTML();
        return $html;
}
add_filter ('the_content', 'add_responsive_class');
