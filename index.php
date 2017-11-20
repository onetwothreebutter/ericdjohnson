<?php

$path = str_replace('index.php', '', $_SERVER['REQUEST_URI']);
$doc_root =  $_SERVER['DOCUMENT_ROOT'];


//index
if($path === '/') {
    include($doc_root . '/src/pages/homepage/index.php');
    exit();
}

//work-ive-done subpages
$work_ive_done_matches = array();
if(preg_match("/work-ive-done\/(.+)/", $path, $work_ive_done_matches)) {
    include($doc_root . '/src/pages/work-ive-done/subpages/' . $work_ive_done_matches[1] . '/index.php');
    exit();
}

//regular pages
include($doc_root . '/src/pages/' . $path . '/index.php');
exit();
