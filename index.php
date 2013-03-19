<?php
$server=(isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] == 'on' )? 'https://'.$_SERVER['SERVER_NAME']."/":'http://'.$_SERVER['SERVER_NAME']."/";
$_SERVER['REQUEST_URI']=$server."emp/controller/site/home";
include("emp/emp.php");