<?php
include '../../controllers/connect.php';

 $id= $_GET['adminID']; 

 $query = "DELETE FROM tbl_master_admin WHERE adminID = '$id'" ;
 $execute = mysql_query($query);
 
 if ($execute)
 {
    //include "../index.php";
    echo "<script>alert('Berhasil Hapus!');
            window.location='../index.php';</script>";
 }

?>