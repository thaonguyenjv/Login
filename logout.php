<?php
session_start();
require_once "users_grant_module.php";

// Xử lý đăng xuất
dangxuat();

// Chuyển hướng về trang đăng nhập
header("Location: login.php");
exit;
?>