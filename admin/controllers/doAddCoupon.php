<?php
session_start();

if ( !isset($_SESSION['username']) ) {
    header('location:../login.php?errMsg=Silahkan Login Dahulu!'); 
}
else 
{ 
    $username = $_SESSION['username']; 
}

include '../../controllers/connect.php'; 

$coupon_code = $_POST['coupon_code'];
$coupon_desc = $_POST['coupon_desc'];
$errMsg ="";

$cekCoupon = mysql_query("SELECT * FROM tbl_master_coupon WHERE coupon_code = '$coupon_code'");

if ( mysql_num_rows($cekCoupon) <> 0 ) 
{
   header('location:../insert_coupon.php?errMsg=Coupon sudah ada!');
} 
else 
{
    if ( !$coupon_code || !$coupon_desc ) 
    { 
        header('location:../insert_coupon.php?errMsg=Masih ada data kosong!');
    } 
    else 
    {
        $execute = mysql_query("INSERT INTO tbl_master_coupon (coupon_code,coupon_description,lastUpdateBy,createdBy) VALUES('$coupon_code','$coupon_desc','$username','$username')");


        if ($execute) 
        {
            echo "<script>alert('Berhasil Menambah Coupon!');
            window.location='../list_coupon.php';</script>";
        }
        else 
        {
            echo 'Proses Gagal!';
        }
    }
}
?>