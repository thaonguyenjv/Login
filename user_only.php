<?php
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
?>

<div class="user-panel">
    <h2>Bảng điều khiển người dùng</h2>
    <p>Nội dung này có thể truy cập được cho tất cả người dùng.</p>
    
    <div class="user-section">
        <h3>Tài khoản</h3>
        <ul>
            <li>Xem thông tin cá nhân</li>
            <li>Cập nhật chi tiết thông tin</li>
            <li>Đổi mật khẩu</li>
        </ul>
    </div>
    
    <div class="user-section">
        <h3>Nội dung của tôi</h3>
        <ul>
            <li>Xem bài đăng</li>
            <li>Tạo nội dung mới</li>
            <li>Chỉnh sửa nội dung</li>
        </ul>
    </div>
</div>

<style>
.user-panel {
    background-color: #f5fff5;
    padding: 20px;
    border-radius: 5px;
}
.user-section {
    margin-top: 20px;
    padding: 15px;
    background-color: white;
    border-radius: 3px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}
</style>