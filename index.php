<?php
header("Content-Type:text/html; charset=utf-8");
define("APP_PATH",dirname(__FILE__)."/shangcheng");
define("APP_DEBUG",2);
define("SINAAPP",false);
session_start();
require 'frame/PL.php';
?>