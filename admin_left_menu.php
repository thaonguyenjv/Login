<?php
if(isset($_SESSION['username']) && isset($_SESSION['quyen'])){
    switch($_SESSION['quyen']){
        case "admin":
            echo "<a href='admin.php?module=admin'><div class='menu_item'>Module 1: chỉ dành cho A</div></a>";
            echo "<a href='admin.php?module=mod'><div class='menu_item'>Module 2: chỉ dành cho A, M</div></a>";
            echo "<a href='admin.php?module=user'><div class='menu_item'>Module 3: chỉ dành cho A, M, U</div></a>";
            break;
        case "mod":
            echo "<a href='admin.php?module=mod'><div class='menu_item'>Module 2: chỉ dành cho A, M</div></a>";
            echo "<a href='admin.php?module=user'><div class='menu_item'>Module 3: chỉ dành cho A, M, U</div></a>";
            break;
        case "user":
            echo "<a href='admin.php?module=user'><div class='menu_item'>Module 3: chỉ dành cho A, M, U</div></a>";
            break;
        default:
            break;
    }
}else
    header("Location: login.php");
?>