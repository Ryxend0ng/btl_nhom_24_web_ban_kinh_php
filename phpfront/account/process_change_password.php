
<?php
require "../../common/csdl.php";
$password_old=$_POST['password_old'];
$password_new=$_POST['password_new'];
$id=$_POST['id'];
$sql="select * from tbl_users
where id='$id' and password='$password_old'";

$num_row=mysqli_num_rows(mysqli_query($conn,$sql));

if($num_row==1){
    $sql="update tbl_users
    set password='$password_new'
    where id='$id' and password='$password_old'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('Location: ../../phpfront/account/change_password.php?error=Đổi mật khẩu thành công&type=sucess');
    exit;
}else{
    header('Location: ../../phpfront/account/change_password.php?error=Mật khẩu cũ không đúng&type=error');
    mysqli_close($conn);
}


?>
