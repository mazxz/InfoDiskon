<?php 
session_start();

include '../../controllers/connect.php';

$adminID = $_POST['adminID'];
$nama = $_POST['nama_admin'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confPass = $_POST['confPass'];
$errMsg ="";

    if ( !$nama || !$email || !$username || !$password ) 
    { 	
        $errMsg = "Masih ada data kosong!";
        header('location:../update_admin.php?adminID='.$adminID.'?errMsg=Masih ada Data Kosong!');
    } 
    else if (strcmp($password, $confPass))
    {
    	header('location:../update_admin.php?adminID='.$adminID.'?errMsg=Confirm Password tidak sesuai!');
    }
    else 
    {
        $execute = mysql_query("UPDATE tbl_master_admin SET nama_admin = '$nama',email = '$email',username = '$username',password = '$password' WHERE adminID = '$adminID'");

        if ($execute) 
        {
            echo "<script>alert('Berhasil Update!');
            window.location='../index.php';</script>";
        }
        else 
        {
            echo 'Proses Gagal!';
        }
    }

 ?>