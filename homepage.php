<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang Đăng Nhập</title>
</head>
<body>
    <div id="container">
        <div id="banner"><?php include_once "login_status.php"; ?></div>
        <div id="left_menu">
        <?php
            include_once "admin_left_menu.php";
        ?>
        </div>
        <div id="content">
        <?php
            include_once "admin_content.php";
        ?>
        </div>
        <br style="clear:both">
        <div id="footer"></div>
    </div>
</body>
<style>
    body{margin:0px;}
    #container{width:100%;margin: 0px auto;}
    #banner{height:150px; background-color:#70ccff;}
    #left_menu{width:265px; background-color:#960; float:left;margin-right:5px;}
    #content{width:730px; background-color:#660;float:left;}
    #footer{height:100px; background-color:lightblue;}
    .menu_item{padding:10px; background-color:#daf1ff;}
    .menu_item:hover{background-color:white;}
    a:visited, a:link{color:#630;}
    a:hover{color:blue;}
</style>
</html>