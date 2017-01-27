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

$couponID = $_POST['couponID'];
$coupon_code = $_POST['coupon_code'];
$coupon_desc = $_POST['coupon_desc'];
$errMsg ="";

    if ( !$coupon_code || !$coupon_desc ) 
    { 	
        $errMsg = "Masih ada data kosong!";
        header('location:../update_coupon.php?couponID='.$couponID.'?errMsg=Masih ada Data Kosong!');
    } 
    else 
    {
        $execute = mysql_query("UPDATE tbl_master_coupon SET coupon_code = '$coupon_code',coupon_description = '$coupon_desc',lastUpdate = now(),lastUpdateBy = '$username' WHERE couponID = '$couponID'");

        if ($execute) 
        {
            echo "<script>alert('Berhasil Update!');
            window.location='../list_coupon.php';</script>";
        }
        else 
        {
            echo 'Proses Gagal!';
        }
    }

 ?>