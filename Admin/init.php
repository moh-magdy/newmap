<?php

//for contact
include 'contact.php';

//Routes
$lang   =   "includes/languages/";
$tpl    =   "includes/templates/";
$func    =  "includes/functions/";
$css    =   "layout/css/";
$js     =   "layout/js/";

$fiIma = $_SERVER['DOCUMENT_ROOT']."/myShortcuts/Themes/Admin/data/upload/websites-Image/";
$dir = './data/upload/websites-Image/';


//Include The Important Files
include     $func   .   "function.php";
include     $lang   .   "en.php";
include     $tpl    .   "header.php";
if(!isset($noNavar)) { include     $tpl    .   "navbar.php";}
