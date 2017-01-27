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

$merchant_name = $_POST['merchant_name'];
$merchant_category = $_POST['merchant_category'];
$merchant_product = $_POST['merchant_product'];
$errMsg ="";

$cekMerchant = mysql_query("SELECT * FROM tbl_master_merchant WHERE merchant_name = '$merchant_name'");

if ( mysql_num_rows($cekMerchant) <> 0 ) 
{
   header('location:../insert_merchant.php?errMsg=Merchant sudah ada!');
} 
else 
{
    if ( !$merchant_name || !$merchant_product || !$merchant_category ) 
    { 
        header('location:../insert_merchant.php?errMsg=Masih ada data kosong!');
    } 
    else 
    {
        $execute = mysql_query("INSERT INTO tbl_master_merchant (merchant_name,merchant_category,merchant_product,lastUpdateBy,createdBy) VALUES('$merchant_name','$merchant_category','$merchant_product','$username','$username')");


        if ($execute) 
        {
           echo "<script>alert('Berhasil Menambahkan Merchant!');
            window.location='../list_merchant.php';</script>";
        }
        else 
        {
            echo 'Proses Gagal!';
        }
    }
}
?>