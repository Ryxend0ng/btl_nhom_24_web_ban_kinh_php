<?php 
 require "../../common/csdl.php";
 if(isset($_COOKIE['token'])){
     $token=$_COOKIE['token'];
     echo $token;
     $sql="select * from tbl_users where token='$token' limit 1";
     $result=mysqli_fetch_array(mysqli_query($conn,$sql));
     $number_row=mysqli_num_rows(mysqli_query($conn,$sql));
     if($number_row==1){
     session_start();
     $_SESSION['id']=$result['id'];
     $_SESSION['name']=$result['username'];
     $_SESSION['email']=$result['email'];
     $_SESSION['address']=$result['address'];
     }
     mysqli_close($conn);

 }
 if(isset($_SESSION['id'])){
     header("Location: ../../phpfront/index.php");
     exit;
 }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log_in.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="main">
     
       
        <form action="process_login.php" method="POST" class="form" >
        
          <h2 class="heading">Đăng nhập</h2>
          <p style="color:red;font-size: 15px;padding-top: 20px;"><?php if (isset($_GET['error'])){
          echo $_GET['error'];
        }?></p>
          <div class="spacer"></div>
  
          <div class="form-group">
            <input id="username" name="username" type="text" placeholder="Tên đăng nhập" class="form-control">
             <span class="form-message"></span>
          </div>
  
          <div class="form-group">
            <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span class="form-message"></span>
          </div>
          
            <div style="text-align:left;display: flex;font-size: 13px;">
            
            <p class="remember" >Ghi nhớ mật khẩu</p>
            <input style="margin-left: 5px;"  name="remember" type="checkbox">
            </div>
          
          <!-- <button hre class="form-submit">Đăng nhập</button> -->
          <input type="submit" class="form-submit" value="Đăng nhập">
          <span><a href="index.html">Quên mật khẩu</a></span>

            <span>Bạn đã có tài khoản chưa? Đăng ký <a href="">Tại đây</a></span>
        </form>
  
      </div>
      
</body>
</html>