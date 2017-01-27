<?php
include '../../controllers/connect.php';

 $id= $_GET['couponID']; 

 $query = "DELETE FROM tbl_master_coupon WHERE couponID = '$id'" ;
 $execute = mysql_query($query);
 
 if ($execute)
 {
    //include "../index.php";
    echo "<script>alert('Berhasil Hapus!');
            window.location='../list_coupon.php';</script>";
 }

?>