<?php 
session_start();

include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysql_query("SELECT * FROM tbl_master_admin WHERE username = '$username'");
//cek barisnya
$row = mysql_num_rows($query);
//tampilkan dalam bentuk array
$data = mysql_fetch_array($query);

if (empty($username) || empty($password)) 
{
    header('location:../login.php?errMsg=Tidak boleh ada field yang kosong!');
} 
else 
{
	if ($row == 0)
	{
		header('location:../login.php?errMsg=Username Tidak terdaftar!');
	}
    else if ( $password <> $data['password'] ) 
    {
        header('location:../login.php?errMsg=Password salah!');
    } 
    else 
    {
        $_SESSION['username'] = $username;
        header('location:../admin/index.php');
    }
}

 ?>