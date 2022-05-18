<?php
require "../common/csdl.php";
$user_id=$_GET["user_id"];
$created_date=$_GET["date"];
$type=$_GET["type"];
    function get_order_by_type($type,$status,$user_id,$created_date){
        global $conn;
        $sql="update tbl_order set type='$type' where user_id='$user_id' and created_date='$created_date'"; 
        $result=(mysqli_query($conn,$sql));
        
    }
    get_order_by_type($type,1,$user_id,$created_date);
    header("Location: /phpadmin/order/interface_order_user_process.php");
?>