
<?php
require "../../common/csdl.php";
$name=$_POST['username'];
$email=$_POST['email'];
$id=$_POST['id'];
$sql="update tbl_users
set username='$name', email='$email'
where id='$id'";
mysqli_query($conn,$sql);

mysqli_close($conn);
header('Location: ../../phpfront/account/infomation.php?error=Sửa thông tin thành công')
?>
