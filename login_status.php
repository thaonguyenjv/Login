<?php
if(isset($_SESSION['username'])) {
    echo '<div style="text-align:right; padding:10px;">
            Xin chào, ' . $_SESSION['username'] . ' (' . $_SESSION['quyen'] . ') | 
            <a href="logout.php">Đăng xuất</a>
          </div>';
} else {
    echo '<div style="text-align:right; padding:10px;">
            <a href="login.php">Đăng nhập Admin</a>
          </div>';
}
?>