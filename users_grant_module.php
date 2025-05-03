<?php
function dangnhap($link, $username, $password){
    $result=chayTruyVanTraVeDL($link, "select count(*), quyenid 
                            from tbl_users 
                            where username='".mysqli_real_escape_string($link, $username)."'
                            and password='".md5($password)."'");
    $row = mysqli_fetch_row($result);
    if($row[0]>0){
        $result = chayTruyVanTraVeDL($link, "select ten from tbl_quyen where id=".$row[1]);
        $row = mysqli_fetch_row($result);
        $_SESSION['username'] = $username;
        $_SESSION['quyen'] = $row[0];
        mysqli_free_result($result);
        return true;
    }else{
        mysqli_free_result($result);
        return false;
    }
}

function dangxuat(){
    if(isset($_SESSION['username'])){
        unset($_SESSION['username']);
        unset($_SESSION['quyen']);
        return true;
    }else{
        return false;
    }
}

function phanquyen($link, $userid, $quyenid){
    chayTruyVanKhongTraVeDL($link, "update tbl_users set quyenid='".$quyenid."' where id='".$userid."'");
}
?>