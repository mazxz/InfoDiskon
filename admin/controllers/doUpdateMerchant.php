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

$merchantID = $_POST['merchantID'];
$merchant_name = $_POST['merchant_name'];
$merchant_category = $_POST['merchant_category'];
$merchant_product = $_POST['merchant_product'];
$errMsg ="";

    if ( !$merchant_name || !$merchant_category || !$merchant_name ) 
    { 	
        $errMsg = "Masih ada data kosong!";
        header('location:../update_merchant.php?merchantID='.$merchantID.'?errMsg=Masih ada Data Kosong!');
    } 
    else 
    {
        $execute = mysql_query("UPDATE tbl_master_merchant SET merchant_name = '$merchant_name',merchant_category = '$merchant_category',merchant_product = '$merchant_product',lastUpdate = now(),lastUpdateBy = '$username' WHERE merchantID = '$merchantID'");

        if ($execute) 
        {
            echo "<script>alert('Berhasil Update!');
            window.location='../list_merchant.php';</script>";
        }
        else 
        {
            echo 'Proses Gagal!';
        }
    }

 ?>