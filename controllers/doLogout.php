<?php
session_start();
unset( $_SESSION['username'] );

echo "<script>alert('Berhasil Keluar!');
	     window.location='../index.php';</script>";

?>