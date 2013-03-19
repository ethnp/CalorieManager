<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Calorie Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--fix toys in url, should be one layer up in dir and not have to use 'toys'-->
    <link href="<?php if(defined('URL')) echo URL; ?>emp/app/styles/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?php if(defined('URL')) echo URL; ?>emp/app/styles/bootstrap/bootstrap-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
        .main{position: relative;margin-top:50px;}
        .count_area{position: relative;margin-top:20px;font-size:20pt;}
    </style>
</head>
<body style="background-color: #72A0C1">
<div style="">
    <div style="" class="navbar navbar-fixed-top">
        <div style="" class="navbar-inner">
            <div style="" class="container">
                <a id="Home" class="brand" style="" href="#">Home</a>
            </div>
        </div>
    </div>
</div>