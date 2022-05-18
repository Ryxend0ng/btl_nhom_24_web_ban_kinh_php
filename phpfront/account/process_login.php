<?php
   require "../../common/csdl.php";
    $password=$_POST['password'];
    
    $username=$_POST['username'];
    echo $username;
    $sql="select * from tbl_users where username='$username' and password='$password'";
    $result=mysqli_fetch_array(mysqli_query($conn,$sql));
    $id=$result['id'];
    $numberRows=mysqli_num_rows(mysqli_query($conn,$sql));
    if(isset($_POST['remember'])){
        $remember=true;
    }else{
        $remember=false;
    }
    if($numberRows==1){
        session_start();
        $_SESSION['id']=$id;
        $_SESSION['name']=$result['username'];
        $_SESSION['email']=$result['email'];
        $_SESSION['address']=$result['address'];
        if($remember){
            $token=uniqid("_user",time());
            $sql="update tbl_users set token='$token' where id='$id'";
            mysqli_query($conn,$sql);
            setcookie('token',$token,time()+60*60*24*30);
        }
        
        mysqli_close($conn);
        if($username==="admin"){
            header("Location: ../../index.php");
        }else{
        header("Location: ../../phpfront/index.php");
        exit;
        }
    }else{
        header("Location: ../../phpfront/account/log_in.php?error=Tài khoản hoặc mật khẩu không chính sác");
         
    }
    
?>