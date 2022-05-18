<?php 
require "../common/csdl.php";
 $sql="select * from tbl_products limit 4";
 $result_hot=(mysqli_query($conn,$sql));
 $sql="select * from tbl_products limit 4 offset 4";
 $result_noi_bat=(mysqli_query($conn,$sql));
 $sql="select * from tbl_products limit 9 offset 3";
 $result_ban_chay=(mysqli_query($conn,$sql));
 unset($_SESSION['cart']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhóm 24</title>
  <?php require "./common/link_shop.php" ?>
</head>
<body>
    <main>
    <?php require "./common/header_shop.php" ?>
        
        <div class="content">
            <div class="content-header">
                <img src="./image/banner.PNG" alt="" class="content-header-img">
            </div>
            <div class="content1">
                <img src="./image/thoitrang7.PNG" alt="">
                <img src="./image/thoitrang3.PNG" alt="">
                <img src="./image/thoitrang4.PNG" alt="">
                <img src="./image/thoitrang5.PNG" alt="">
            </div>
            <div class="content2">
                <div class="content2-1">
                    <span class="content2-1-1">SẢN PHẨM</span>
                    <span class="content2-1-2">NỔI BẬT</span>
                </div>
                <div class="content2-2">
                    <span>Kính unisex</span>
                    <span>Kính mắt nam</span>
                    <span>Kính mắt nữ</span>
                </div>
                <div class="content3-list">
                <?php foreach($result_noi_bat as $product=>$value){ ?>
                    <div class="content3-item" style="width:284px;box-sizing: border-box;">
                        <a href="./product/details_product.php?id_pro=<?php  echo $value['id'] ?>"><img style="width:264;height:264px;" src=<?php  echo $value['avatar'] ?> alt=""></a>
                        <h4 ><p style="overflow-x: hidden;"><?php  echo $value['title'] ?></p></h4>
                        <h5><?php  echo number_format( $value['price']) ?>đ</h5>
                        <div class="content3-emote">
                            <i class="far fa-heart"></i>
                            <i class="fas fa-eye"></i>
                            <?php if(isset($_SESSION['id'])){ ?>
                           <a href="./cart/add_to_cart.php?id_pro=<?php echo $value['id'] ?>"> <i class="fas fa-shopping-cart"></i></a>
                           <?php }?>
                        </div>
                    </div>
                    <?php }?>
                    
                </div>
            </div>
            <div class="content4">
                <div class="content4-left">
                    <div class="content4-left-list">
                        <div class="content4-left-item">
                           
                        </div>
                    </div>
                </div>
                <div class="content4-right">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/369/704/products/29.jpg?v=1572418523850" alt="" class="content4-right-img">
                    <div class="content4-right-right">
                        <div class="content4-right-page">
                            <a href="" class="content4-right-btn">
                                <i class="content4-right-btn-icon1 fas fa-angle-left"></i>
                            </a>
                            <a href="" class="content4-right-btn">
                                <i class="content4-right-btn-icon2 fas fa-angle-right"></i>
                            </a>
                        </div>
                        <h4>Ghế phòng khách ND01</h4>
                        <h5>2.000.000₫</h5>
                        <h6>Chất liệu: Vải nhập khẩu (da - bố - nhung) Nệm mousse D40 cao...</h6>
                        <h6>Hết hạn</h6>
                        <button class="header-btn3">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </div>
            <div class="content2">
                <div class="content5-1">
                    <span class="content2-1-1">SẢN PHẨM</span>
                    <span class="content2-1-2">HOT</span>
                </div>
                <div class="content2-2">
                    <span>Kính unisex</span>
                    <span>Kính mắt nam</span>
                    <span>Kính mắt nữ</span>
                </div>
                
                <div class="content3-list">
                <?php foreach($result_hot as $product=>$value){ ?>
                    <div class="content3-item" >
                    <a href="./product/details_product.php?id_pro=<?php  echo $value['id'] ?>"><img style="width:264;height:264px;" src=<?php  echo $value['avatar'] ?> alt=""></a>
                        <h4 ><p style="overflow-x: hidden;"><?php  echo $value['title'] ?></p></h4>
                        <h5><?php  echo number_format( $value['price']) ?>đ</h5>
                        <div class="content3-emote">
                            <i class="far fa-heart"></i>
                            <i class="fas fa-eye"></i>
                            <?php if(isset($_SESSION['id'])){ ?>
                           <a href="./cart/add_to_cart.php?id_pro=<?php echo $value['id'] ?>"> <i class="fas fa-shopping-cart"></i></a>
                           <?php }?>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="content5">
                <img src="https://bizweb.dktcdn.net/100/369/704/themes/741072/assets/reviews_4_img.jpg?1638842751333" alt="" class="content5-img">
                <div class="content5-review">
                    <span>" Lần đầu đến mua tiệm thấy rất gọn gàng, sáng sủa, thoáng mát dễ chịu. Nhân viên nói chuyện nhỏ nhẹ, lịch sự, rất tôn trọng khách. "</span>
                    <h2>Thùy Dương - Người mẫu</h2>
                </div>
            </div>
            <div class="content6">
            <div class="content-sell">
                        <div class="content6-1">
                            <span class="content2-1-1">BÁN</span>
                            <span class="content2-1-2">CHẠY</span>
                        </div>
                        <div class="content6-page">
                            <a href="" class="content4-right-btn">
                                <i class="content4-right-btn-icon1 fas fa-angle-left"></i>
                            </a>
                            <a href="" class="content4-right-btn">
                                <i class="content4-right-btn-icon2 fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                <div class="content6-list" style="width:auto">
                    
                    <?php foreach($result_hot as $product=>$value){ ?>
                    <div class="content6-item">
                        <img  class="content6-img" src=<?php  echo $value['avatar'] ?> alt="">
                        <div class="content6-right">
                        <h4><?php  echo $value['title'] ?></h4>
                        <h5><?php  echo $value['price'] ?></h5>
                        </div>
                    </div>
                    <?php }?>
                    
                </div>
            </div>
            <div class="content6-bottom">
                <div class="content6-bottom-img">
                    <img src="https://bizweb.dktcdn.net/100/369/704/themes/741072/assets/brand1.png?1638842751333" alt="">
                    <img src="https://bizweb.dktcdn.net/100/369/704/themes/741072/assets/brand2.png?1638842751333" alt="">
                    <img src="https://bizweb.dktcdn.net/100/369/704/themes/741072/assets/brand3.png?1638842751333" alt="">
                    <img src="https://bizweb.dktcdn.net/100/369/704/themes/741072/assets/brand4.png?1638842751333" alt="">
                    <img src="https://bizweb.dktcdn.net/100/369/704/themes/741072/assets/brand5.png?1638842751333" alt="">
                    <img src="https://bizweb.dktcdn.net/100/369/704/themes/741072/assets/brand6.png?1638842751333" alt="">
                </div>
            </div>
            
            <?php require "./common/footer_shop.php" ?>
    </main>
</body>
</html>