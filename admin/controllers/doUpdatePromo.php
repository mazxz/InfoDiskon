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

$promoID = $_POST['promoID'];
$promo_name = $_POST['promo_name'];
$promo_desc = $_POST['promo_desc'];
$promo_link = $_POST['promo_link'];
$merchant_name = $_POST['merchant_name'];
$promo_category = $_POST['promo_category'];
$promo_image = $_POST['promo_image'];
$errMsg ="";

    if ( !$promo_name || !$promo_category || !$promo_link || !$promo_desc || !$promo_image || !$merchant_name ) 
    { 	
        $errMsg = "Masih ada data kosong!";
        header('location:../update_promo.php?promoID='.$promoID.'?errMsg=Masih ada Data Kosong!');
    } 
    else 
    {
        $execute = mysql_query("UPDATE tbl_transaction_promo SET promo_name = '$promo_name',promo_description = '$promo_desc',merchant_name = '$merchant_name',promo_category = '$promo_category',promo_image = '$promo_image',promo_link = '$promo_link',lastUpdate = now(),lastUpdateBy = '$username' WHERE promoID = '$promoID'");

        if ($execute) 
        {
            echo "<script>alert('Berhasil Update!');
            window.location='../list_promo.php';</script>";
        }
        else 
        {
            echo 'Proses Gagal!';
        }
    }

 ?>