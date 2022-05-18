<?php
    require "../../common/csdl.php";
    $name=$email=$password=null;
    if(isset($_POST['username'])){
        $name = $_POST['username'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }

    $error=array();

    $sql="select count(*) from tbl_users where email='$email'";
    $result=mysqli_fetch_array(mysqli_query($conn,$sql));
    $sql="select count(*) from tbl_users where username='$name'";
    $result_name=mysqli_fetch_array(mysqli_query($conn,$sql));
    $checkRow=$result['count(*)'];
    $checkRow_name=$result_name['count(*)'];
    
    $check=0;
    if($checkRow>1){
       $error['email']="Trùng email";
       $check+=1;
    }
    if($checkRow_name>1){
        $error['username']="Trùng username";
        $check+=1;
    }
  
    if($check===0&&$name!=null&&$password!=null&&$email!=null){
        $sql="insert into tbl_users(username,password,email,authority_id)
        values('$name','$password','$email',1)";
        mysqli_query($conn,$sql);
        $sql="select id from tbl_users where email='$email'";
        $id=mysqli_fetch_array(mysqli_query($conn,$sql))['id'];
        session_start();
        $_SESSION['id']=$id;
        $_SESSION['name']=$name;
        header("Location: ../../phpfront/account/log_in.php");
    }

  
    mysqli_close($conn);
?>