<?php
if(!isset($_SESSION['username']) || ($_SESSION['quyen'] != "admin" && $_SESSION['quyen'] != "mod")){
    header("Location: login.php");
    exit;
}
?>

<div class="mod-panel">
    <h2>Bảng điều khiển cho Mod</h2>
    <p>Nội dung này dành cho quản trị viên và người điều hành.</p>
    
    <div class="mod-section">
        <h3>Quản lý nội dung</h3>
        <ul>
            <li>Phê duyệt nội dung</li>
            <li>Chỉnh sửa nội dung</li>
            <li>Xóa nội dung</li>
        </ul>
    </div>
    
    <div class="mod-section">
        <h3>Kiểm duyệt người dùng</h3>
        <ul>
            <li>Xem báo cáo người dùng</li>
            <li>Cảnh báo tới người dùng</li>
        </ul>
    </div>
</div>

<style>
.mod-panel {
    background-color: #f0f7ff;
    padding: 20px;
    border-radius: 5px;
}
.mod-section {
    margin-top: 20px;
    padding: 15px;
    background-color: white;
    border-radius: 3px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}
</style>