<?php 

include 'params/config.php';
include 'menu.php';
include 'pages.php';

$page = $argv[1];
$title = $pages[$page]['title'];
include 'layouts/'.$pages[$page]['layout'].'.php';
