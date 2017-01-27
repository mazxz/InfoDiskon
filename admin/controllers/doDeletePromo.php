<?php
include '../../controllers/connect.php';

 $id= $_GET['promoID']; 

 $query = "DELETE FROM tbl_transaction_promo WHERE promoID = '$id'" ;
 $execute = mysql_query($query);
 
 if ($execute)
 {
    //include "../index.php";
    echo "<script>alert('Berhasil Hapus!');
            window.location='../list_promo.php';</script>";
 }

?>