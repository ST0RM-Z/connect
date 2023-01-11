<?php
/*
Plugin Name: custom plugin
Version: 1.0.0
*/



function twitter($params) {
return preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/', "$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>", $params);
}
add_filter('the_content', 'twitter');   
add_filter('comment_text', 'twitter');
