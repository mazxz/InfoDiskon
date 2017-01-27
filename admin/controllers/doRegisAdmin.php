<?php
include '../../controllers/connect.php'; 

$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$errMsg ="";

$cekUser = mysql_query("SELECT * FROM tbl_master_admin WHERE username = '$username'");

if ( mysql_num_rows($cekUser) <> 0 ) 
{
   header('location:../insert_admin.php?errMsg=Username sudah ada!');
} 
else 
{
    if ( !$nama || !$email || !$username || !$password ) 
    { 
        header('location:../insert_admin.php?errMsg=Masih ada data kosong!');
    } 
    else 
    {
        $execute = mysql_query("INSERT INTO tbl_master_admin (nama_admin,email,username,password) VALUES('$nama','$email','$username','$password')");


        if ($execute) 
        {
            echo "<script>alert('Berhasil Daftar!');
            window.location='../index.php';</script>";
        }
        else 
        {
            echo 'Proses Gagal!';
        }
    }
}
?>