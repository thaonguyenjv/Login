<?php
if(!isset($_SESSION['username']) || $_SESSION['quyen'] != "admin"){
    header("Location: login.php");
    exit;
}
?>

<div class="admin-panel">
    <h2>Bảng điều khiển cho Quản trị viên</h2>
    <p>Chào mừng đến với trang Admin.</p>
    
    <div class="admin-section">
        <h3>Quản lý người dùng</h3>
        <ul>
            <li>Xem tất cả người dùng</li>
            <li>Thêm người dùng mới</li>
            <li>Chỉnh sửa quyền của người dùng</li>
            <li>Xóa người dùng</li>
        </ul>
    </div>
    
    <div class="admin-section">
        <h3>Cấu hình hệ thống/h3>
        <ul>
            <li>Cài đặt Cơ sở dữ liệu</li>
            <li>Cài đặt bảo mật</li>
        </ul>
    </div>
</div>

<style>
.admin-panel {
    background-color: #f5f5f5;
    padding: 20px;
    border-radius: 5px;
}
.admin-section {
    margin-top: 20px;
    padding: 15px;
    background-color: white;
    border-radius: 3px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}
</style>