<?php 
  require "process_register_user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./register.css">
    <title>Đăng ký</title>
</head>
<body>
    <div class="main">

        <form action="register.php" method="POST" class="form" id="form-1">
          <h2 class="heading">Đăng ký</h2>
  
          <div class="spacer"></div>

          <div class="form-group">
            <input id="fullname" name="username" type="text" placeholder="Tên đăng nhập" class="form-control">
            <div style="color:red;text-align: left;font-size: 12px;padding-left: 12px;"><?php if(isset($error['username'])){
              echo $error['username'];
            } ?></div>
            <span class="form-message"></span>
          </div>
  
          <div class="form-group">
            <input id="email" name="email" type="text" placeholder="Nhập địa chỉ email" class="form-control">
            <div style="color:red;text-align: left;font-size: 12px;padding-left: 12px;"><?php if(isset($error['email'])){
              echo $error['email'];
            } ?></div>
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span class="form-message"></span>
          </div>
  
  
          <button class="form-submit">Đăng ký</button>
          <div class="separator">
            <span>hoặc</span>
        </div>

        <div class="quick_login facebook">
            <div class="logo">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="text">Đăng nhập bằng Facebook</div>


        </div>
        <div class="quick_login google">
            <div class="logo">
                <i class="fab fa-google-plus-g"></i>
            </div>
            <div class="text">Đăng nhập bằng Google</div>
        </div>
       
        </form>
  
  
      </div>
      <script src="/new_account/register.js"></script>
      <script>
          
        document.addEventListener('DOMContentLoaded', function () {
          Validator({
            form: '#form-1',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
              Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
              Validator.isEmail('#email'),
              Validator.minLength('#password'),
              Validator.isRequired('#password_confirmation'),
              Validator.isConfirmed('#password_confirmation', function () {
                return document.querySelector('#form-1 #password').value;
              }, 'Mật khẩu nhập lại không chính xác')
            ],
            onSubmit: function (data) {
              // Call API
              console.log(data);
            }
          });
        });
  
  
         
  
      </script>
</body>
</html>