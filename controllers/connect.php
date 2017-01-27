<?php 

// Deklarasi variable untu buat koneksi ke database

$hostname = 'localhost'; //server tempat kita jalankan file php
$username_db = 'root'; //username yang ada di server
$password_db = ''; //password database di server
$dbname = 'infoDiskon'; //nama databasenya


//membuat koneksi
$konek = mysql_connect($hostname, $username_db, $password_db) or die ("Koneksi Gagal!".mysql_error());
mysql_select_db($dbname, $konek); 



 ?>