<?php
include '../../controllers/connect.php';

 $id= $_GET['merchantID']; 

 $query = "DELETE FROM tbl_master_merchant WHERE merchantID = '$id'" ;
 $execute = mysql_query($query);
 
 if ($execute)
 {
    //include "../index.php";
    echo "<script>alert('Berhasil Hapus!');
            window.location='../list_merchant.php';</script>";
 }

?>